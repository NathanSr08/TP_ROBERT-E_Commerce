<?php

include('autoload.php');
include('../vue/navbar.php');
$a = new Artistes;
$al = $a->liste();
$p = new Playliste;
if(count($_POST)==0)
{
    include('../vue/add_art.php');
}
else
{
  $p->add($_SESSION['id'],$_POST['artiste']);
  $c = $a->liste_byid($_POST['artiste']);
  $v = new Video;
  $v->add($c[0]['chanel_id']);
  header('Location:../');
}



?>