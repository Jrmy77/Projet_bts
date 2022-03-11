<?php
session_start();

		
		if(isset($_SESSION['user'])){
			
			include("vues/entete.php") ;
			include("vues/sommaire.php");
		}	
			
		if(isset($_REQUEST['controleur'])){
			switch ($_REQUEST['controleur']) {


				case "utilisateur" :{
					include 'controleur/ctlUtilisateur.php';//ici
					break;	

				}

				case "stage" :{
					include 'controleur/cltStage.php';//ici
					break;	

				}


				case "entreprise" :{
					include 'controleur/ctlEntreprise.php';
					break;

					}
					
				case "messagerie" :{
					include 'controleur/ctlMessagerie.php';
					break;
				}

				case "admin" :{
					include 'controleur/ctlAdmin.php';
					break;
				}

			}	
		}
		
		if(isset($_SESSION['user'])){		
			
			include("vues/pied.php") ;
		}
		else{
			include"connexion.php";
			
		}
     
