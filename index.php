<?php 
include('php_obj/autoload.php');
include('vue/navbar.php');
$a = new Articles;
$al = $a->liste_all();
include('vue/shop.php'); 
include('vue/footer.php');

?>
