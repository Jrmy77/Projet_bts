<?php
require_once './modele/ModelUtilisateur.php';
$action= $_REQUEST['action'];
switch ($action){

    case "detailUtilisateur" :{
		$liste=ModelUtilisateur::getAllinfo($_GET['Utilisateur'],$_GET['cat']);
        include "vues/tableau.php";
        include "vues/gestion/detailUtilisateur.php";
        
        break;
    }

    case "supprimer" :{
        if(isset($_POST['supprimer'])){
            ModelUtilisateur::deleteUtilisateur($_GET['utilisateur']);
        }
        else{
            $cat= $_GET['cat'];
            $user = $_GET['utilisateur'];
            $utilisateur = ModelUtilisateur::getAllinfo($user,$cat);    
            include './vues/gestion/supprimerUtilisateur.php';
        }
        break;
    }
}

?>