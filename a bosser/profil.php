<?php
session_start();
?>
	<body>
		<div id="profil";>
			<form method="post" action="identification.php">
			<?php
				echo 'Pseudo : '.$_SESSION['pseudo'];
				echo '<br/>Mail : '.$_SESSION['mail'];
				echo '<br/>Nom : '.$_SESSION['nom'];
				echo '<br/>Prenom : '.$_SESSION['prenom'];
				echo '<br/>Date de naissance : '.$_SESSION['date'];
				echo '<br/>Telephone : '.$_SESSION['telephone'];
			?>
			<form>
		</div>
	</body>