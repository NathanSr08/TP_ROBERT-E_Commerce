<?php

class Articles
{

    function add($title,$des,$date_aj,$idc,$picture,$prix)
    {
        $cnx = cnx_bdd();
        $requete = "INSERT INTO Articles (Title,`Description`,Date_ajout,id_Catégories,picture,prix) VALUES ('".$title."','".$des."','".$date_aj."',$idc,'".$picture."','".$prix."');";
        $ok=$cnx->query($requete);
        echo $requete;
    }
    function liste($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT a.id,a.Title,a.Description,a.Date_ajout,a.prix,a.picture FROM Articles a INNER JOIN Catégories c on a.id_Catégories = c.id WHERE c.id = $id; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['prix']=$ligne['prix'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function liste_one($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Articles where id = $id; ";
       
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['prix']=$ligne['prix'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }




}
?>