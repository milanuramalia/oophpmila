<?php

class produk {
	public $judul ,
		   $penulis,
		   $penerbit;

	protected $diskon = 0;

	private $harga;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}



	public function getharga(){
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

public function getinfoproduk(){
	$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";

	return $str;
}

}


class komik extends produk {
	public $jmlhHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $jmlhHalaman = 0) {

		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->jmlhHalaman = $jmlhHalaman;
	}


	public function getinfoproduk() {
		$str = "komik : " . parent::getinfoproduk() . " -{$this->jmlhHalaman} Halaman.";
		return $str;
	}
}


class game extends produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $waktuMain = 0){
		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}



	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getinfoproduk() {
		$str = "game : " . parent::getinfoproduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}


class cetakInfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$produk1 = new komik("Panda", "Masashi kishimoto", "Shonen Jump", 40000, 100,  "komik");
$produk2 = new game("uncharted", "Neil Druckmann", "Sony Computer", 300000, 50, "game");

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";

$produk2->setdiskon(50);
echo $produk2->getharga();













