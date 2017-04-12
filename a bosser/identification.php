<?php
session_start();
if(isset($_POST['mdp'])AND isset($_POST['pseudo'])){
	$fichier=fopen('compte','r');
	$tmp=1;
	$res=0;
	while($tmp!=0){
		$contenuFile=fgets($fichier,4048);
		if(empty($contenuFile)){
			$tmp=0;
		}else{
			if(preg_match('#^[0-9]+:'.$_POST['pseudo'].':'.$_POST['mdp'].'#',$contenuFile)){
			$res=1;
			$info=explode(":",$contenuFile);
			}
		}
		
	}

	if($res==1){
		$_SESSION['pseudo']=$info[1];
		$_SESSION['mail']=$info[5];
		$_SESSION['nom']=$info[4];
		$_SESSION['prenom']=$info[3];
		$_SESSION['date']=$info[7];
		$_SESSION['telephone']=$info[6];
		header('Location: main.php');
		exit();
	}else{
		header('Location: index.php?mdp=0');
		exit();
	}
	fclose($fichier);
}
?>