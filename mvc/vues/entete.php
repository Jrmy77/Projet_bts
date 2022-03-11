<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>MSL</title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>
    <div id="global">
    	<div id="entete">
      <!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Navbar Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
         <a class="navbar-brand" href="index.php?controleur=utilisateur&action=accueil">JFM Projet</a>
 
         <!-- Left -->
         <ul class="navbar-nav mr-auto">         
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <?php 
               if($_SESSION['categorie']=='admin'){
                  include 'vues\enteteadmin.php';
               }
               elseif($_SESSION['categorie']=='professeur'){
                  include 'vues\enteteProfesseur.php';
               }
               elseif($_SESSION['categorie']=='etudiant'){
                  include 'vues\enteteEtudiant.php';
               }

            ?>
         </ul>            
         <!-- <form class="form-inline ml-auto">
                <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Rechercher</button>
         </form> -->
         <!-- Right -->
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href='index.php?controleur=utilisateur&action=DetailUtilisateur'>
				  <?php
				  	echo $_SESSION['categorie'];
				  ?>
			  </a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href='index.php?controleur=utilisateur&action=deconnexion'>Se deconnecter</a>
           </li>
         </ul>
</div>
      </nav>
 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </body>
</html>

		</div><!-- #entete -->
   

