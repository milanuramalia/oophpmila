<?php

class game extends produk implements infoproduk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $waktuMain = 0){
		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getinfo() {
	$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";

	return $str;
}

	public function getinfoproduk() {
		$str = "game : " . $this->getinfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}