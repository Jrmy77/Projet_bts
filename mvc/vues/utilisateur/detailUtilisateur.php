<div id="contenu">

<?php

//liste des personnes
 echo '<div class= "container-fluid">
  <div class="card col-12 col-sm-12 col-md-12 p-4" >
  <div class="card-body " >';

  if($lignes[0]['type_compte']=='etudiant'){
    echo '<h5 class="card-title"> Identité :&nbsp'.$lignes[0]['prenomE'].' '.$lignes[0]['nomE'].'</h5>';
  }
    
    
echo'
    <p class="card-text">Adresse e-mail :&nbsp'.$lignes[0]['mail'].'</p>
    <p class="card-text">Profil :&nbsp'.$lignes[0]['type_compte'].'</p>
    <p class="card-text">Mot de passe :&nbsp'.$lignes[0]['mot_de_passe'].'</p>';
  
  if($lignes[0]['type_compte']=='etudiant'){
    echo ' 
    <p class="card-text">Option :&nbsp'.$lignes[0]['option'].'</p>
    <p class="card-text"> Adresse :&nbsp'.$lignes[0]['villeE'].' '.$lignes[0]['code_postaleE'].' '.$lignes[0]['addresseE'].'</p>';
   
  }
   
  echo '  
    </div> 
    </div>
    </div>
</div><br>';
echo '<div class= "container-fluid">
  <div class="card col-12 col-sm-12 col-md-12 p-4" >
  <div class="card-body " >
  <label for=name">Ajouter un document : </label>
  <input type="file" id="fichier" name="fichier"><br>
  
  </div>
  </div>
  ';

if($stage!=NULL){
  foreach($stage as $lestage){
    echo '
    
        <div class="card-body " >
          <center>
            <h5 class="card-title"> Votre stage </h5>
              <p class="card-text"> Ville de stage : '.$lestage['villeStage'].'</p>
              <p class="card-text"> Date début : '.$lestage['dateDebut'].'</p>
              <p class="card-text"> Date fin : '.$lestage['dateFin'].'</p>
              <p class="card-text"> Description : '.$lestage['mission'].'</p>
              <p class="card-text"> Entreprise : '.$lestage['nomEntreprise'].'</p>';
    if($lestage['mailEntreprise']!=NULL){
          echo '<p class="card-text"> Mail : '.$lestage['mailEntreprise'].'</p>';
    }

        echo '
          </center>
        </div>
     ';
  }
  
}

?>

