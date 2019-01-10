<?php

abstract class produk {
	private $judul ,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul( $judul) {
		$this->judul = $judul;		
	}

	public function getJudul() {
		return$this->judul;
	}

	public function setPenulis( $penulis ) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
			return $this->penulis;
	}

	public function setPenerbit( $penerbit ) {
			$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

public function setHarga( $harga ){
	$this->harga = $harga;
}
	public function getharga(){
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}


 abstract public function getinfoproduk();

 	public function getinfo() {
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
		$str = "komik : " . $this->getinfo() . " -{$this->jmlhHalaman} Halaman.";
		return $str;
	}
}


class game extends produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $waktuMain = 0){
		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getinfoproduk() {
		$str = "game : " . $this->getinfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}


class cetakInfoproduk {
	public$daftarproduk = array();

	public function tambahproduk( produk $produk){
		$this->daftarproduk[]= $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach( $this->daftarproduk as $p ){
			$str.= "-{$p->getinfoproduk()} <br>";
		}

		return $str;
	}
}


$produk1 = new komik("Panda", "Masashi kishimoto", "Shonen Jump", 40000, 100,  "komik");
$produk2 = new game("uncharted", "Neil Druckmann", "Sony Computer", 300000, 50, "game");

$cetakproduk = new cetakInfoproduk();
$cetakproduk->tambahproduk( $produk1 );
$cetakproduk->tambahproduk( $produk2 );
echo $cetakproduk->cetak();

























