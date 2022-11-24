<?php

include('../php_obj/autoload.php'); ?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
<?php
include('../vue/navbar.php');
$p = new Panier;
$count = $p->comptePanier();
$a = new Articles;
$panier = $pl = $p->obtenirPanier();
if($panier==False)
{
    ?>
    <div style="text-align:center"class="alert alert-secondary" role="alert">
  Votre panier est vide !
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
<?php
}
else
{


// var_dump($panier);
include('../vue/commander.php');
include('../vue/footer.php');
}

?>