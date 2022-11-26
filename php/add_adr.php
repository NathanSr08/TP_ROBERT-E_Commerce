<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');
$ad = new Addresse;
if(count($_POST)==0)
{
    include('../vue/add_adr.php');
}
else
{
    $ad->add($_SESSION['id'],$_POST['Title'],$_POST['Pays'],$_POST['Ville'],$_POST['Code_postal'],$_POST['Rue'],$_POST['N°']);
    ?>    <SCRIPT LANGUAGE="JavaScript">
    document.location.href="livraison.php?er=11"
    </SCRIPT> <?php
}

?>