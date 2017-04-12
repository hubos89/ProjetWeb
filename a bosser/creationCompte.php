<?php
session_start();
$fichier=fopen('compte','r');
$contenuFile=fgets($fichier,4048);
$pseudo=0;
$mdp=0;
$mail=0;
$ligne=substr_count($contenuFile,"\n")+2;

$tmp=1;
while($tmp!=0){
	$contenuFile=fgets($fichier,4048);
	if(empty($contenuFile)){
		$tmp=0;
	}else{
		if(preg_match('#^[0-9]+:'.$_POST['pseudo'].':#',$contenuFile)){
			$pseudo=1;
		}
		if(preg_match('#^[0-9]+:.+:.+:.+:.+:'.$_POST['mail'].':#',$contenuFile)){
			$mail=1;
		}
	}
}
if(isset($_POST['mdp'])AND isset($_POST['mdpVerif']) AND strcmp($_POST['mdp'],$_POST['mdpVerif'])){
	$mdp=1;
}


fclose($fichier);



if($mdp==1){
	if($pseudo==1){
		if($mail==1){
			header('Location: creerCompte.php?pseudo=0&mail=0&mdp=0');
			exit();
		}
		header('Location: creerCompte.php?pseudo=0&mdp=0');
		exit();
	}
	header('Location: creerCompte.php?mdp=0');
	exit();
}else{
	if($pseudo==1){
		if($mail==1){
			header('Location: creerCompte.php?mail=0&pseudo=0');
			exit();
		}
		header('Location: creerCompte.php?pseudo=0');
		exit();
	}else{
		if($mail==1){
			header('Location: creerCompte.php?mail=0');
			exit();
		}
	}
}


	file_put_contents("compte","\n".$ligne.':'.$_POST['pseudo'].':'.$_POST['mdp'].':'.$_POST['prenom'].':'.$_POST['nom'].':'.$_POST['mail'].':'.$_POST['tel'].':'.$_POST['date'],FILE_APPEND | LOCK_EX);
	header('Location: main.php?'.$mdp.'&'.$mail.'&'.$pseudo);
	exit();


?>