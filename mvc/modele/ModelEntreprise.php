<?php
require_once 'ModelPdo.php';
class ModelEntreprise {
	
   public static function getAllEntreprise() {
        try {
			$sql="SELECT  * FROM entreprise ";
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur dans la BDD ");
        	}		
   }
   
	public static function detailEntreprise($id) {
		try{
			$sql="SELECT  * FROM entreprise ";
			$sql=$sql." WHERE `numEntreprise` = '$id'";
			$result=ModelPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
		}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
	}
	public static function SetEntreprise($name) { 
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

	public static function creeEntreprise($nom, $dscp, $mail) { 
		try{
				$query="INSERT INTO entreprise(nomEntreprise, descp, mailEntreprise) VALUES ('$nom', '$dscp', '$mail')";
				$result=ModelPdo::$pdo->exec($query);
				return $result;
			
			}
		catch (PDOException $e){
 			echo $e->getMessage();
            die("Erreur dans la BDD ");
		}
		
	}
	
	public static function deleteEntreprise($id) {
		try{
			
			$query="DELETE FROM service WHERE id=$id";
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