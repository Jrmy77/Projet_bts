<?php
require_once './modele/ModelUtilisateur.php';
$action= $_REQUEST['action'];
switch ($action){

    case "detailUtilisateur":{
        $liste=ModelUtilisateur::getAllinfo($_GET['Utilisateur'],$_GET['cat']);
        include "vues/utilisateurs/detailUtilisateur.php";
        break;
    }

    case "supprimer" :{
        $user=$_GET['utilisateur'];
        $cat=$_GET['cat'];
        $utilisateur=ModelUtilisateur::getAllinfo($user,$cat);
        include 'vues/gestion/supprimerUtilisateur.php';
        
        break;
    }

}

?>