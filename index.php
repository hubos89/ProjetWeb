<?php
include('Vue/entete.php');
	switch($_GET['page']){
		case 'profil':
			include('Vue/profil.php');
		break; 
		case 'creerCarte':
			include('Vue/creerCarte.php');
		break;
		case 'mesCartes':
			include('Vue/mesCartes.php');
		break;
		case 'connection':
			include('Vue/connection.php');
		break;
		case 'infoCarte':
			include('Vue/infoCarte.php');
		break;
		case 'creerCompte' :
			include('Vue/creerCompte.php');
		break;
		default :
		break;
	}
include('Vue/footer.php');
?>
