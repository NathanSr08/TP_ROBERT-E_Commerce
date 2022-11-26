<?php
// include('bdd.php');
class Users
{
    function add($nom,$mail,$mdp) //Ajouter un Utilisateurs
    {

        $cnx = cnx_bdd();
        //On verifie que le mail n'existe pas dans la bdd
        $requete = "select * from Users where mail = '".$mail."';";
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il n'existe pas alors on insert le user dans la bdd
        if(!$ligne)
        {
            $requete = "Insert into Users (nom,mail,mdp) VALUES ('".$nom."','".$mail."','".$mdp."');";
            $ok=$cnx->query($requete);
        }
        //Si il existe alors 
        else
        {
            return False;
        }
     
    }
 
    function del($id)  // Suprimer un utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "delete from Users where id = $id;";
        $ok=$cnx->query($requete);
    }


    function liste() //Lister les utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "select * from Users;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['Nom']=$ligne['Nom'];
            $info[$i]['Mail']=$ligne['Mail'];
            $info[$i]['Password']=$ligne['Password'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }

    function connexion($mail,$mdp)//Connexion de l'utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "select * from Users where Mail = '".$mail."';"; //On teste si le mail du User existe
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il existe alors
        if($ligne) 
        {
            //On teste si il a mis le bon mot de passe
            $requete = "select * from Users where Mail = '".$mail."' and Password = '".$mdp."';";
            $jeuResultat=$cnx->query($requete);  
            $ligne = $jeuResultat->fetch();
            //Si il a mis le bon mot de passe alors
            if($ligne)
            {
                
               //On rentre les info du compte dans les variables de sessions
                $_SESSION['id'] = $ligne['id'];
                $_SESSION['mail'] = $ligne['Mail'];
                $_SESSION['cat'] = $ligne['cat'];
                return True;

            }
            //Si le mot de passe n'est pas bon
            else
            {
                return False;
            }
        }
        //Si le mail n'existe pas dans la bdd
        else
        {
            return False;
        }
    }
    //Efface les variable de session/Deconnecte le User
    function del_session()
    {
        unset($_SESSION['id']);
        unset($_SESSION['mail']);
        unset($_SESSION['nom']);
        unset($_SESSION['cat']);
    }
    function root()
    {
        if(isset($_SESSION['cat']) && $_SESSION['cat']=="root")
        {
            return True;
        }
        else
        {
            return False;
        }
    }
    //Verifie si le user est connecter
    function verif_session()
    {
        if(empty($_SESSION['id']))
        {
            return False;
        }
        else
        {
            return TRUE;
        }
    }
    //Affiche les variables de sessions
    function echo_session()
    {
        echo $_SESSION['id'];
        echo $_SESSION['mail'];
    }
}




?>