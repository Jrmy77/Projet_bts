<?php



echo "<form method='post' action='index.php?controleur=admin&action=supprimer&utilisateur=".$user."&cat=".$cat."'>

"; //fais ce que t'en veuxecho '
echo '<div class="card-body " >
<center>
  <h5 class="card-title"> Info : </h5>
    <p class="card-text"> Nom utilisateur : '.$utilisateur[0]['nom_utilisateur'].'</p>
    <p class="card-text"> Mail : '.$utilisateur[0]['mail'].'</p>
    <p class="card-text"> Catégorie : '.$utilisateur[0]['type_compte'].'</p>';
   if($cat=='etudiant'){    
    echo '
    <p class="card-text"> nom : '.$utilisateur[0]['nomE'].'</p>
    <p class="card-text"> prenom : '.$utilisateur[0]['prenomE'].'</p>
    <p class="card-text"> ville étudiant : '.$utilisateur[0]['villeE'].'</p>
    ';
   }elseif($cat=='professeur'){
        echo '
        <p class="card-text"> Nom Professeur : '.$utilisateur[0]['nomP'].'</p>
        <p class="card-text"> Matière : '.$utilisateur[0]['matier'].'</p>
        ';
   }
   
 echo '<p class="card-text"> <input type="submit" name="supprimer" value="valider suppression"> </p>  
    </center>
</div>';
echo "
<hr>

</form>

"; 








?>