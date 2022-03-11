<?php
require_once './modele/ModelEntreprise.php';
$action= $_REQUEST['action'];

switch ($action) {
	
	
	case "listeEntreprise" :{
			
			$lignes = ModelEntreprise::getAllEntreprise(); 
			include 'vues/entreprise/vuelisteEntreprise.php';
			
			break;
		}

		case "ajouterEntreprise" :{
			
			//			$lignes = ModelUtilisateur::getacceuil(); 
						include 'vues/gestion/ajouterEntreprise.php';
						
						break;
					}

		case "listeEntreprisegestion" :{
			
			$lignes = ModelEntreprise::getAllEntreprise(); 
			include 'vues/gestion/listeEntreprise.php';
			
			break;
		}
	
	case "detailEntreprise":{
		$lignes = ModelEntreprise::detailEntreprise($_GET['entreprise']); 
		include 'vues/entreprise/detailEntreprise.php';	
		break;
	}	
		
	case "newEntreprise" :{
			
		if(isset($_POST['creee'])){
				$nom = $_POST['nom'];
				$dscp = $_POST['dscp'];
				$mail = $_POST['mail'];
				$pdo = ModelEntreprise:: creeEntreprise($nom, $dscp, $mail);
				header("location: index.php?controleur=entreprise&action=ajouterEntreprise");
			}
		
			 
			// include 'vues/entreprise/newEntreprise.php';
			
			break;
		}
		
		case "deleteEntreprise" :{
			$id = $_GET['id'];
			$pdo = ModelEntreprise::deleteEntreprise($id);
			
		}
	
}


