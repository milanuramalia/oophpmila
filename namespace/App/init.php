<?php 

//require_once 'produk/infoproduk.php';
// require_once 'produk/produk.php';
 //require_once 'produk/komik.php';
// require_once 'produk/game.php';
// require_once 'produk/cetakInfoproduk.php';
// require_once 'produk/User.php';

// require_once 'service/User.php';


spl_autoload_register( function( $class){
	$class = explode('\\', $class);
	$class = end($class);
  require_once 'produk/' .$class . '.php';
 });

spl_autoload_register( function( $class){
	$class = explode('\\', $class);
	$class = end($class);
  require_once 'service/' .$class . '.php';
 });