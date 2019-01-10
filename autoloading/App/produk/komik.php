<?php

class komik extends produk implements infoproduk {
	public $jmlhHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis" , $penerbit = "penulis", $harga = 0, $jmlhHalaman = 0) {

		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->jmlhHalaman = $jmlhHalaman;
	}

	public function getinfo() {
	$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";

	return $str;
}


	public function getinfoproduk() {
		$str = "komik : " . $this->getinfo() . " -{$this->jmlhHalaman} Halaman.";
		return $str;
	}
}