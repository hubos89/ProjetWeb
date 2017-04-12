<?php
	session_start();
	include('connexion.inc.php');
	$req=$bdd->prepare('SELECT EXISTS (SELECT pseudo FROM CompteWeb WHERE pseudo= :pseudo AND mdp= :mdp ) AS article_exists');
	$req->execute(array('pseudo' => $_POST['pseudo'],'mdp'=>$_POST['mdp']));
	$res=$req->fetch();
	if($res[0]=="1"){
		$_SESSION['id']=$_POST['pseudo'];
		header('Location: ../index.php?erreur=0');
	}else{
		header('Location: ../index.php?page=connection&erreur=1');
	}
	$req->closeCursor();
?>