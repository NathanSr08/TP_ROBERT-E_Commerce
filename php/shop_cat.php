<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');
$a = new Articles;
$al = $a->liste($_GET['id']);
if(empty($al))
{
    ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../#test"
</SCRIPT>
<?php
}
include('../vue/shop1.php');
include('../vue/footer.php');
?>