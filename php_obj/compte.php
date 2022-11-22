<?php

include('autoload.php');
include('./vue/navbar.php');
$u = new Users;
// if(!$u->verif_session())
// {
//     header('Location:../');
// }
// else
// {
    
     
    $p = new Articles();
    // $a->add('Jul','UC7ZuMv7r60Cwn7mRNlPC0LA','https://yt3.ggpht.com/jkc8hGK_a6Mru4V1vY1IUxdP_m7MmcA-i3VpaOFOUB-zG-zsh-ilKPX2q-eucd7eClRWkEpt=s176-c-k-c0x00ffffff-no-rj','Extraterrestre');
   $al = $p->liste(1);    
   include('vue/artistes.php');
// }

?>