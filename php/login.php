<?php
include('../php_obj/autoload.php'); 
include('../vue/navbar.php');
if(count($_POST)==0)
{
    include('../vue/login.php');
    include('../vue/footer.php');
}
else
{
   if($_POST['mail']!="")
   {
        $u = new Users;
        $cnx = $u->connexion($_POST['mail'],$_POST['mdp']);
        if($cnx)
        {
            ?>
            <SCRIPT LANGUAGE="JavaScript">
            document.location.href="view_panier.php"
            </SCRIPT>
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-danger" role="alert">
                Email ou mot de passe incorrecte !
            </div>
            <?php
            include('../vue/login.php');
        }
   }
   else
   {
    include('../vue/login.php');
    include('../vue/footer.php');
   }
}


?>