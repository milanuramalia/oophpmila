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


class cetakInfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("Panda", "Masashi kishimoto", "Shonen Jump", 40000);
$produk2 = new produk("uncharted", "Neil Druckmann", "Sony Computer", 300000);


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";

$infoproduk1 = new cetakInfoproduk();
echo $infoproduk1->cetak($produk1);


