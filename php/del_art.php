<?php
include('../php_obj/autoload.php');
$a = new Articles;
$a->del($_GET['id']);


?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="manage_art.php"
</SCRIPT>