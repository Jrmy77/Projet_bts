<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}


</style>


<?php
    

    echo '
    <div class="card-body " >
    <center>
      <h5 class="card-title"> Entreprise : '.$lignes[0]['nomEntreprise'].'</h5>
        <p class="card-text"> Ville de stage : '.$lignes[0]['villeStage'].'</p>
        <p class="card-text"> Date début : '.$lignes[0]['dateDebut'].'</p>
        <p class="card-text"> Date fin : '.$lignes[0]['dateFin'].'</p>
        <p class="card-text"> Description : '.$lignes[0]['mission'].'</p>
        <p class="card-text"> Stage libre : '.$lignes[0]['libre'].'</p>
        </center>
    </div>';


    if(isset($_POST['supprimer'])){
        echo "<form method='post' action='index.php?controleur=stage&action=vueStageProf&stage=".$lignes[0]['numStage']."'>
        <input type=submit value='Valider suppression' name='confirmerSuppression'>
    </form>";
    }
    else{
        if($lignes[0]['libre']=="non"){
            echo '
            <form method="post" action="index.php?controleur=stage&action=vueStageProf&stage='.$lignes[0]['numStage'].'">
                <input type=submit value="Supprimer élève du stage" name="supprimer">
            </form>';
        }
        else{
            echo '
            <form method="post" action="index.php?controleur=stage&action=vueStageProf&stage='.$lignes[0]['numStage'].'">
                <select name="etudiant" required>
                    <option value="">Affecter un élève</option>';
            foreach($etudiants as $etudiant){
                echo '<option value="'.$etudiant['id'].'">'.$etudiant['nomE'].' '.$etudiant['prenomE'].'</option>';

            }
            
            echo '
                </select>
                <center>
                <input type=submit class="btn btn-primary" value="Affecter Stage" name="affecter">
                </center>
            </form>';
        }
        
    }


?>