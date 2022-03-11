<?php

require_once './modele/ModelUtilisateur.php';
$action= $_REQUEST['action'];



switch ($action) {
	
	
	case "listeUtilisateur" :{
			
			$lignes = ModelUtilisateur::getAllUtilisateur(); 
			include 'vues/utilisateur/vuelisteUtilisateur.php';
			
			break;
		}

		case "listeEtudiant" :{
			
			$lignes = ModelUtilisateur::getEtudiant(); 
			include 'vues/utilisateur/vuetudiant.php';
			
			break;
		}
	
	
	case "newUtilisateur" :{
			
			if(isset($_POST['cree'])){
				$name = $_POST['name'];
				$mdp = $_POST['mdp'];
				$email = $_POST['email'];
				$type = $_POST['type'];
				$pdo = ModelUtilisateur::creeUtilisateur($name, $mdp, $email, $type);
				header("location: index.php?controleur=utilisateur&action=ajouterUtilisateur");
			}
		
			 
			include 'vues/utilisateur/listeUtilisateur.php';
			
		
			break;
		}

		case "accueil" :{
			
//			$lignes = ModelUtilisateur::getacceuil(); 
			include 'vues/utilisateur/accueil.php';
			
			break;
		}

		case "ajouterUtilisateur" :{
			
			//			$lignes = ModelUtilisateur::getacceuil(); 
						include 'vues/gestion/ajouterutilisateur.php';
						
						break;
					}
		
		case "DetailUtilisateur" :{
			
			$id = $_SESSION['user'];
			$cat = $_SESSION["categorie"];
			$lignes = ModelUtilisateur::getAllinfo($id,$cat); 
			$stage= ModelUtilisateur::stageEtudiant($id);
			include 'vues/utilisateur/detailUtilisateur.php';
			break;
		}
		
		case "deleteUtilisateur" :{
			$id = $_GET['id'];
			$pdo = ModelUtilisateur::deleteUtilisateur($id);
			header("location: index.php");
		}
		
		case "newConnexion" :{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$pdo = ModelUtilisateur::connexionUtilisateur($username,$password);
			if($pdo===NULL or empty($pdo)){
				header("location: index.php?connexion=incomplete");
        	}
			else {
				$_SESSION['user']=$pdo[0][0];
				$_SESSION['categorie']=$pdo[0][4];
				header("location: index.php?controleur=utilisateur&action=accueil");
			}
			break;
		} 
		
		case "deconnexion":{
			session_unset();
			session_destroy();
			header("location: index.php");
			break;			
		}
}

