<?php
//liste des services	
 foreach  ($lignes as $row) {

        echo' <ul class="list-group list-group-flush">
        <li class="list-group-item">'.$row['2'].'&emsp;'; //à changer
        echo '<a href="index.php?controleur=entreprise&action=detailEntreprise&entreprise='.$row[3].'">
        <button type="button" class="btn btn-primary" >En savoir plus</button></a></li>
        </ul>';
      
  }
?>