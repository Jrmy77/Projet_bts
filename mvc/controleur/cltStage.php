<?php
require_once './modele/ModelStage.php';
$action= $_REQUEST['action'];

switch ($action) {
	
	
	case "listeStage" :{
			
			$lignes = ModelStage::getAllStage(); 
			include 'vues/stage/vuelisteStage.php';
			
			break;
		}

		case "listeStageEtd" :{
			
			$lignes = ModelStage::getAllStage(); 
			include 'vues/stage/listeStageEtd.php';
			
			break;
		}

		case "ajouterStage" :{
			
			
						include 'vues/stage/ajouterStage.php';
						
						break;
					}
	
	case "detailStage":{
		$lignes = ModelStage::detailStage($_GET['stage']); 
		include 'vues/stage/detailStage.php';	
		break;
	}	
		
	case "newStage" :{
			
		if(isset($_POST['AjoutS'])){
				$name = $_POST['Nom'];
				$pdo = ModelStage:: SetStage($name);
				header("location: index.php");
			}
		
		$lignes = ModelStage::getAllStage(); 
		include 'vues/stage/newStage.php';
		
		break;
	}


	case 'vueStageProf' :{
		
		if(isset($_POST['confirmerSuppression'])){
			ModelStage::libererStage($_GET['stage']);
		}
		elseif(isset($_POST['affecter'])){
			ModelStage::affecterStage($_POST['etudiant'],$_GET['stage']);
		}

		$lignes=ModelStage::detailStage($_GET['stage']);
		if ($lignes[0]['libre']=='oui'){
			require_once './modele/ModelUtilisateur.php';
			$etudiants = ModelUtilisateur::getClassEtudiant($lignes[0]['numClasse']);
		}
		
		include 'vues/stage/gererStage.php';
		break;
	}
		
		
	case "deleteStage" :{
		$id = $_GET['id'];
		$pdo = ModelStage::deleteStage($id);
		
	}
	
}


