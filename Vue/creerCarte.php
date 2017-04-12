<div class="body">
	<form method="post" action="Modele/identification.php">
		<table border="0" cellspacing="0" cellpadding="0"> 
		<div class="creerCarteGauche">
			<tr><td class="creerCarteGauche">Classeur</td><td class="creerCarteDroite"> <select><option> Google<option> IE9</select></td>
			<tr><td class="creerCarteGauche">Nom</td><td class="creerCarteDroite"> <input type="text" name="nom" placeholder="Nom" required /></td>
			<tr><td class="creerCarteGauche">Public</td><td class="creerCarteDroite"> <input type="radio" name="visibilite" value="Public"></td>
			<tr><td class="creerCarteGauche">Privée</td><td class="creerCarteDroite"> <input type="radio" name="visibilite" value="Privee" checked></td>
			<tr><td class="creerCarteGauche">Administrateur</td><td class="creerCarteDroite"> <textarea name="administrateur" rows=4 cols=40 placeholder="admin" class="textarea"></textarea></td>
			<tr><td class="creerCarteGauche">Editeur</td><td class="creerCarteDroite"> <textarea name="editeur" rows=4 cols=40 placeholder="editeur" class="textarea"></textarea></td>
			<tr><td class="creerCarteGauche">Consultat</td><td class="creerCarteDroite"> <textarea name="consultant" rows=4 cols=40 placeholder="consultant" class="textarea"></textarea></td>
		</div>
		</table>
	</form>
</div>