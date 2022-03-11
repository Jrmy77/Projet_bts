

<div id='contenu'>
<table border="1" cellpadding="15">
<tr>
<th>Nom utilisateur</th>
<th>Mèl</th>
<th>Statut</th>
<th>Supprimer</th>

</tr>
<?php
//liste des personnes
 foreach  ($liste as $row) {
    echo "<tr><td> ".$row['mail']."</td>";
    echo "<td> ".$row['mail']."</td>";
    echo "<td>".$row['type_compte']."</td>
    <td><a href='index.php?controleur=admin&action=supprimer&utilisateur=".$row['id']."&cat=".$row['type_compte']."'>
            <img src='vues/images/supprimer.png' style='width: 50px;'></img>
        </a>
    </td>
    </tr>";
        

        
  }
 
?>

</table>
</div>


