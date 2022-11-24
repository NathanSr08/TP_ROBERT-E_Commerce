<?php
include('autoload.php');
$v = new Video();
$v->add($_GET['id']);
?>