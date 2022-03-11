<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

<center>

<a href="CONVENTION DE STAGE BTS SIO.pdf" target ="blank">
        <button type="button" class="btn btn-primary" >Télécharger Convention de stage</button></a>

       
<a href="fiche d'appréciation stage.doc.pdf" target ="blank">
        <button type="button" class="btn btn-primary" >Télécharger Fiche d'appréiation</button></a>



<a href="Attestation de Stage 2021 SIO.docx.pdf" target ="blank">
        <button type="button" class="btn btn-primary" >Télécharger Attestation</button></a>

<br>
</center>
<br>
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
<th>Detail</th>


</tr>
<?php
//liste des personnes
 foreach  ($lignes as $row) {
       echo "<tr><td> ".$row['nomEntreprise']."</td>";
        echo "<td> ".$row[1]."</td>"; 
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";

        
  }
 
?>



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