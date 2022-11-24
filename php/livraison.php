<?php
include('../php_obj/autoload.php');
$u = new Users;
if(!$u->verif_session())
{
    ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="login.php?er=02"
        </SCRIPT>
        <?php
}
else
{
include('../vue/navbar.php');
include('../vue/livraison.php');
include('../vue/footer.php');
}


?>
