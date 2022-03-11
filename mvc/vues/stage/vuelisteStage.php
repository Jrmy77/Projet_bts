<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left:10%;
  border:none;
  border-radius:5px 5px 5px 5px;
  
}
 th {
background:#007bff;
color:white;
}
td, th {
  border: 0px;   
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<center>
<a href="index.php?controleur=stage&action=ajouterStage">
        <button type="button" class="btn btn-primary" >Ajouter un Stage</button></a>
</center>
<br>

<div id="contenu">
<table border="1" cellpadding="15">
<tr>
<th>Nom entreprise</th>
<th>Ville du stage</th>
<th>Date Début</th>
<th>Date Fin</th>
<th>Mission</th>
<th>Libre</th>
<th>Détail du Stage</th>

</tr>
<?php
//liste des personnes
 foreach  ($lignes as $row) {
    echo "<tr><td> ".$row['nomEntreprise']."</td>";
        echo "<td>
                ".$row[1]."
              </td>";
        echo "<td>
                ".$row[2]."
              </td>";
        echo "<td>
                ".$row[3]."
              </td>";
        echo "<td>"
                .$row[4]."
              </td>";
        echo "<td>
                ".$row[5]."
              </td>";
        echo "<td>
                  <center>
                      <a href='index.php?controleur=stage&action=vueStageProf&stage=".$row['numStage']."'>
                          <img src='vues/images/detail.png' style='width: 50px;'/>
                      </a>
                  </center>
              </td>";

        
  }
 
?>

</table>
</div>

