<?php

class produk {
	public $judul ,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhHalaman,
		   $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0  ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhHalaman = $jmlhHalaman;
		$this->waktuMain  = $waktuMain;
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
	public function getinfoproduk(){
		$str = "komik : " . parent::getinfoproduk() . " -($this->jmlhHalaman} Halaman.";
		return $str;
	}
}


class game extends produk {
	public function getinfoproduk() {
		$str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam. ";
		return $str;
	}
}


class cetakInfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Panda", "Masashi kishimoto", "Shonen Jump", 40000, 100, 0, "komik");
$produk2 = new game("uncharted", "Neil Druckmann", "Sony Computer", 300000, 0, 50, "game");


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();