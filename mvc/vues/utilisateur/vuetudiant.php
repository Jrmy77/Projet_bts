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
<th>Nom</th>
<th>prenom</th>
<th>Option</th>
<th>Ville</th>
<th>Code Postal</th>
<th>Détail Etudiant</th>

</tr>
<?php
//liste des personnes
 foreach  ($lignes as $row) {
        echo "<tr><td> ".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "<td>".$row[6]."</td>";
        echo "<td>
                <a href=''>
                  <img src='vues/images/detail.png' style='width: 50px;'></img>
                </a>
              </td>";
        

        
  }
 
?>

</table>
</div>