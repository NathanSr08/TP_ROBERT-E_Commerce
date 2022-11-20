<?php
include('autoload.php');
$u = new Users;
$u->del_session();
header('Location:../');
?>