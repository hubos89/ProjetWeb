<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>  Template </title>
	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
</head>
	<form method="post" action="identification.php">
		<p>
			<div>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
			<div class="center">
			<?php
				if(isset($_GET['mdp'])AND $_GET['mdp']=="0"){
					echo'<div class="red">Mot de passe Incorect</div>';
				}else{
					echo'<br/>';
				}
			?>
			<input type="text" name="pseudo" placeholder="Identifiant" required autofocus/> <br/>
			<input type="password" name="mdp" placeholder="Mot de passe" required /><br/><br/>
			<input type="submit" value="Connexion"/> 
			</div>
		</p>
	</form>

</html>