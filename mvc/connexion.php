<?php 
			echo "<head>
			<title>CONNEXION</title>
		  <meta charset='utf-8'>
		   <!-- importer le fichier de style -->
		   <link rel='stylesheet' href='login.css'/> 
	   <link rel='stylesheet' href='./css/bootstrap.min.css'>
	   <link rel='stylesheet' href='bootstrap.css'>
	   </head>
	   <body>
        <div id='container'>
					
					<form action='index.php?controleur=utilisateur&action=newConnexion' method='post'>
						<center><h2>Connexion</h2></center>
						<br>
						
						<label><b>Nom d'utilisateur</b></label>
						<input type='text' placeholder='Entrer votre login' name='username' required>

						<label><b>Mot de passe</b></label>
						<input type='password' placeholder='Entrer votre mot de passe' name='password' required>

						<input type='submit' id='submit' value='CONNEXION' name='CONNEXION'>";
						
						if(isset($_GET['connexion'])){
							
								echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";

						}
			echo "   </form>
				   </div>";
				
?>
