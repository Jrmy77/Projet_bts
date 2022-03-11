<div id="contenu">
<form method='post' action='index.php?controleur=stage&action=newStage'>
	<table border="1" cellpadding="15">
		<tr>
			<td>Nom</td>
			<td>Identifiant</td>			
		</tr>
		<tr>	
			<td><input type="text" name="Nom"></td>
			<td><?php $fin=end($lignes); echo $fin['id']+1; ?></td>
			<td><input type="submit" value="valider" name="AjoutS"></td>
		</tr>
	</table>
</form>
</div>