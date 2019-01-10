<?php

class produk {
	public $judul ,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk("Panda", "Masashi kishimoto", "Shonen Jump", 40000);
$produk2 = new produk("uncharted", "Neil Druckmann", "Sony Computer", 300000);
$produk3 = new produk("Dragon ball");


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
var_dump($produk3);