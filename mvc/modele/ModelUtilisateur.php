<?php
require_once 'ModelPdo.php';
class ModelUtilisateur {
	
   public static function getAllUtilisateur() {
        try {
			$sql="SELECT  * FROM user  ";
			//$sql="SELECT  * FROM user INNER JOIN etudiant, professeur on `user`.`id` = `etudiant`.`id` on `user`.`id` = `professeur`.`id` ";
			// $sql="SELECT  villeStage, mission, libre, nomEntreprise FROM stage, entreprise WHERE  "; il faut que je trouve la requete pour afficher le nom de l'entreprise !
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        	}		
   }

   

   public static function getEtudiant() {
	try {
		$sql="SELECT  * FROM etudiant ";
		// $sql="SELECT  nomE, prenomE, villeE, code_postaleE, adresseE FROM etudiant, user WHERE id = "; il faut que je trouve la requete pour afficher seulement les infos de l'étudiant connecté
	
		$result=ModelPdo::$pdo->query($sql);
		$liste=$result->fetchAll();
		return $liste;
	} catch (PDOException $e) {
		echo $e->getMessage();
		die("Erreur dans la BDD ");
		}		
}
	
	public static function SetUtilisateur($lastname, $firstname, $email, $city) { 
		try{
				$query="INSERT INTO etudiant(nomE,prenomE, email, villeE) VALUES ('$lastname', '$firstname', '$email', '$city')";
				$result=ModelPdo::$pdo->exec($query);
				return $result;
			
			}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
		
	}

	public static function creeUtilisateur($name, $mdp, $email, $type) { 
		try{
				$query="INSERT INTO `user`(`nom_utilisateur`,`mot_de_passe`, `mail`, `type_compte`) VALUES ('$name', '$mdp', '$email', '$type')";
				$result=ModelPdo::$pdo->exec($query);
				return $result;
			
			}
		catch (PDOException $e){
 			echo $e->getMessage();
            die(" erreur dans la BDD ");
		}
		
	}

//	public static function getacceuil() {
		// try {
		// 	$sql="SELECT  * FROM stage ";
		// 	// $sql="SELECT  villeStage, mission, libre, nomEntreprise FROM stage, entreprise WHERE  "; il faut que je trouve la requete pour afficher le nom de l'entreprise !
		// 	$result=ModelPdo::$pdo->query($sql);
		// 	$liste=$result->fetchAll();
		// 	return $liste;
		// } catch (PDOException $e) {
		// 	echo $e->getMessage();
		// 	die("Erreur dans la BDD ");
		// 	}		
//	}
	
	public static function deleteUtilisateur($id){
		try{
			
			$query="DELETE FROM user WHERE id=$id";
			$result=ModelPdo::$pdo->exec($query);
			return $result;
			
		}
		catch (PDOException $e){
			
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
	
	
	public static function getAllinfo($id,$cat) {
        try {
			$sql="SELECT  * FROM `user` ";
			
			if($cat=="etudiant"){
				$sql=$sql."INNER JOIN `etudiant` on `user`.`id` = `etudiant`.`id` ";//SELECT  * FROM `user` INNER JOIN etudiant on `user`.`id` = `etudiant`.`id`
				$sql=$sql."WHERE `etudiant`.`id`=$id";
			}
			elseif($cat=="professeur"){
				$sql=$sql."INNER JOIN `professeur` on `user`.`id` = `professeur`.`id` ";
				$sql=$sql."WHERE `professeur`.`id`=$id";
			}
			elseif($cat=="admin"){
				$sql=$sql."WHERE `id`=$id";
			}
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        	}		
   }


   
	public static function connexionUtilisateur($username,$password){
		try {
			$sql="SELECT * FROM `user` WHERE `nom_utilisateur` = '$username' AND `mot_de_passe` = '$password'";
			$result=ModelPdo::$pdo->query($sql);
			$profil=$result->fetchAll();
			return $profil;
		}catch (Exception $e) {
			echo 'ERROR:'.$e->getMessage();
		}		
	}
	
	public static function getClassEtudiant($class){
		try {
			$sql="SELECT * FROM `etudiant` WHERE `numClasse` = $class";
			$result=ModelPdo::$pdo->query($sql);
			$profil=$result->fetchAll();
			return $profil;
		}catch (Exception $e) {
			echo 'ERROR:'.$e->getMessage();
		}	
	}

	public static function stageEtudiant($etudiant){
		try {
			$sql="SELECT * FROM `stage` INNER JOIN entreprise on `stage`.`numEntreprise` = `entreprise`.`numEntreprise` WHERE `idE` = $etudiant";
			$result=ModelPdo::$pdo->query($sql);
			$profil=$result->fetchAll();
			return $profil;
		}catch (Exception $e) {
			echo 'ERROR:'.$e->getMessage();
		}	
	}

	
}

?>