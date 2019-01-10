<?php

class produk {
	public $judul ,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhHalaman = $jmlhHalaman;
		$this->waktuMain  = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

public function getinfolengkap(){
	// komik : Panda | Mashasi kishimoto, Shonen Jump (Rp. 40000) - 155 Halaman.
	$str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";
	if( $this->tipe == "komik") {
		$str .= " - {$this->jmlhHalaman} Halaman.";
	} else if( $this->tipe == "game") {
		$str .= " ~ {$this->waktuMain} Jam.";
	}

	return $str;



}	

}


class cetakInfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$produk1 = new produk("Panda", "Masashi kishimoto", "Shonen Jump", 40000, 100, 0, "komik");
$produk2 = new produk("uncharted", "Neil Druckmann", "Sony Computer", 300000, 0, 50, "game");

echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();