<?php
session_start();
$pseudo=0;
$mdp=0;
$mail=0;
include('connexion.inc.php');


	$reqPseudo=$bdd->prepare('SELECT EXISTS (SELECT pseudo FROM CompteWeb WHERE pseudo= :pseudo) AS article_exists');
	$reqPseudo->execute(array('pseudo' => $_POST['pseudo']));
	$resPseudo=$reqPseudo->fetch();
	if($resPseudo[0]=="1"){
		$pseudo=1;
	}else{
		$pseudo=0;
	}
	$reqPseudo->closeCursor();
	$reqMail=$bdd->prepare('SELECT EXISTS (SELECT pseudo FROM CompteWeb WHERE mail= :mail) AS article_exists');
	$reqMail->execute(array('mail' => $_POST['mail']));
	$resMail=$reqMail->fetch();
	if($resMail[0]=="1"){
		$mail=1;
	}else{
		$mail=0;
	}
	$reqMail->closeCursor();
if(isset($_POST['mdp'])AND isset($_POST['mdpVerif']) AND strcmp($_POST['mdp'],$_POST['mdpVerif'])){
	$mdp=1;
}


if($mdp==1){
	if($pseudo==1){
		if($mail==1){
			header('Location: ../index.php?page=creerCompte&pseudo=0&mail=0&mdp=0');
			exit();
		}
		header('Location: ../index.php?page=creerCompte&pseudo=0&mdp=0');
		exit();
	}
	header('Location: ../index.php?page=creerCompte&mdp=0');
	exit();
}else{
	if($pseudo==1){
		if($mail==1){
			header('Location: ../index.php?page=creerCompte&mail=0&pseudo=0');
			exit();
		}
		header('Location: ../index.php?page=creerCompte&pseudo=0');
		exit();
	}else{
		if($mail==1){
			header('Location: ../index.php?page=creerCompte&mail=0');
			exit();
		}
	}
}
	
	$req = $bdd->prepare('INSERT INTO CompteWeb VALUES (:pseudo, :mdp, :nom, :prenom, :mail, :tel, :dateN,:adresse,:dateI)');
	$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'mdp' => $_POST['mdp'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' => $_POST['mail'],
    'tel' => $_POST['tel'],
	'dateN' => $_POST['date'],
	'adresse' => $_POST['adresse'],
	'dateI' => date("d/m/Y")
    ));
	$_SESSION['id']=$_POST['pseudo'];
	header('Location: ../index.php?'.$mdp.'&'.$mail.'&'.$pseudo);
	exit();
?>