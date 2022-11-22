<?php

class Articles
{

    function add($title,$des,$date_aj,$idc,$picture,$prix)
    {
        $cnx = cnx_bdd();
        $requete = "INSERT INTO Articles (Title,`Description`,Date_ajout,id_Catégories,picture,prix) VALUES ('".$title."','".$des."','".$date_aj."',$idc,'".$picture."','".$prix."');";
        $ok=$cnx->query($requete);
        
    }
    function del($id)
    {
        $cnx = cnx_bdd();
        $requete = "Delete from Articles where id = $id";
        $ok=$cnx->query($requete);
    }
    function liste_all()
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Articles; ";
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
    function liste_allv2($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT c.Title from Articles a inner join Catégories c on a.id_Catégories = c.id where a.id = $id; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['Title']=$ligne['Title'];
           
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
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