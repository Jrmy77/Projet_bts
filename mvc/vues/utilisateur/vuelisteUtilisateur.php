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
<div id="contenu">
<table border="1" cellpadding="15">
<tr>
<th>Nom utilisateur</th>
<th>Statut</th>
<th>Detail Utilisateur</th>

</tr>
<center>
<a href="index.php?controleur=utilisateur&action=ajouterUtilisateur">
        <button type="button" class="btn btn-primary" >Ajouter un Utilisateur</button></a>
</center>
<br>
<?php
//liste des personnes
 foreach  ($lignes as $row) {
        echo "
        <tr>
              <td> ".$row['nom_utilisateur']."
        </td>";

        echo "<td>"
                  .$row['type_compte']."
              </td>";

        echo "<td>
                <a href='index.php?controleur=admin&action=detailUtilisateur&Utilisateur=".$row['id']."&cat=".$row['type_compte']."'>
                  <img src='vues/images/detail.png' style='width: 50px;'></img>
                </a>
              </td>";

        
  }
?>

</table>
</div>