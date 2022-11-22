<?php 
include('php_obj/autoload.php');
include('vue/navbar.php');
if(isset($_GET['er']))
{
    if($_GET['er']==01)
    {
        ?>
        <div style="text-align:center"class="alert alert-danger" role="alert">
  Permission denied !!
</div> <?php
    }
}
$a = new Articles;
$al = $a->liste_all();
include('vue/shop.php'); 
include('vue/footer.php');

?>
