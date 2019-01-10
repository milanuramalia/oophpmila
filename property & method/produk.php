<?php

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;
	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new produk();
// $produk1->judul = "Panda";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahanProperty = "wkwkwk" ;
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Panda";
$produk3->penulis= "Masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 40000;

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis= "Neil Druckmann";
$produk4->penerbit = "Sony computer";
$produk4->harga = 300000;

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();