<?php
include('autoload.php');
include('../vue/navbar.php');
$v = new Video();
$vl = $v->liste($_GET['id']);
include('../vue/liste_video.php');

?>