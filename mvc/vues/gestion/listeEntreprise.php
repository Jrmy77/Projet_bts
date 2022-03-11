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
<a href="index.php?controleur=entreprise&action=ajouterEntreprise">
        <button type="button" class="btn btn-primary" >Ajouter une Entreprise</button></a>
</center>
<br>
<div id="contenu">
<table border="1" cellpadding="15">
<tr>
<th>Nom Entreprise</th>
<th>Description</th>
<th>E-Mail</th>
<th>Supprimer</th>


</tr>
<?php
//liste des personnes
 foreach  ($lignes as $row) {
        echo "<tr><td> ".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td><a href='index.php?controleur=entreprise&action=deleteEntreprise=".$row['numEntreprise']."'>
                <img src='vues/images/supprimer.png' style='width: 50px;'></img>
            </a>
        </td>
        </tr>";
       
        // faire le bouton supprimer 

        
  }
 
?>

</table>
</div>