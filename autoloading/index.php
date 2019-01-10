<?php 

require_once 'App/init.php';

  $produk1 = new komik("Panda", "Masashi kishimoto", "Shonen Jump", 40000, 100,  "komik");
 $produk2 = new game("uncharted", "Neil Druckmann", "Sony Computer", 300000, 50, "game");

 $cetakproduk = new cetakInfoproduk();
 $cetakproduk->tambahproduk( $produk1 );
 $cetakproduk->tambahproduk( $produk2 );
echo $cetakproduk->cetak();

  echo "<hr>";

new coba();