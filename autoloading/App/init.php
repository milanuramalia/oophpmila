<?php 

// require_once 'App/produk/infoproduk.php';
// require_once 'App/produk/produk.php';
// require_once 'App/produk/komik.php';
// require_once 'App/produk/game.php';
// require_once 'App/produk/cetakInfoproduk.php';


spl_autoload_register( function( $class){
	require_once 'produk/' .$class . '.php';
});