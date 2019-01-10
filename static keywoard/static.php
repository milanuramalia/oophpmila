<?php

// class Contohstatic {
//	public static $angka = 1;

//	public static function halo() {
//		return "halo " . self::$angka++ . " kali. ";
//	}
//}

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::halo();
// echo "<hr>";
// echo Contohstatic::halo();


class contoh {
	public static $angka = 1;

	public function halo(){
		return "halo" . self::$angka++ . " kali. <br>";
	}
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();











