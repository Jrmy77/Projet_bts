<?php
require_once 'ModelPdo.php';
class ModelStage {
	
   public static function getAllStage() {
        try {
			$sql="SELECT  * FROM stage INNER JOIN entreprise on `stage`.`numEntreprise` = `entreprise`.`numEntreprise` ";
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        	}		
   }
   
	public static function detailStage($id) {
		try{
			$sql="SELECT  * FROM stage INNER JOIN entreprise on `stage`.`numEntreprise` = `entreprise`.`numEntreprise`";
			$sql=$sql." WHERE `numStage` = '$id'";
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
		}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
	public static function SetStage($name) { 
		try{
				$query="INSERT INTO service(id, libellé) VALUES (NULL, '$name')";
				$result=ModelPdo::$pdo->exec($query);
				return $result;
			}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
	
	public static function deleteStage($id) {
		try{
			
			$query="DELETE FROM stage WHERE numStage=$id";
			$result=ModelPdo::$pdo->exec($query);
			return $result;
			
		}
		catch (PDOException $e){
			
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
	
	public static function libererStage($stage){
		try{
			
			$query="UPDATE `stage` SET `idE`=NULL, `libre`='oui' WHERE `numStage`=$stage";
			$result=ModelPdo::$pdo->exec($query);
			return $result;		
		}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}

	public static function affecterStage($etudiant, $stage){
		try{
			
			$query="UPDATE `stage` SET `idE`=$etudiant, `libre`='non' WHERE `numStage`=$stage";
			$result=ModelPdo::$pdo->exec($query);
			return $result;
		}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
}

?>