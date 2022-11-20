<?php
include('../php_obj/autoload.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
include('../vue/navbar.php');
$c = new Categories;
$cl = $c->liste();
$a = new Articles;
if(count($_POST)==0)
{
    include('../vue/ajout_article.php');
    include('../vue/footer.php');

}
else
{
    $date = date('d-m-y');
    $a->add( $_POST['title'],$_POST['des'],$date,$_POST['cat'],$_POST['pic'],$_POST['prix']);
   ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../"
</SCRIPT>
<?php

}

?>