<?php
session_start();
$email = $_POST['email'];
$mdp = $_POST['mdp'];
include('../DB/connexion_base.php');
$reponse = $bdd->query("Select * from responsable where email='$email'");
$donnees = $reponse->fetch();
if($reponse->rowCount() == 1){
if(md5($mdp) == $donnees['mdp'])
{
	$_SESSION['prenom'] = $donnees['prenom'];
	$_SESSION['id'] = $donnees['id'];
	$_SESSION['loged'] = 'loged';
	// echo 'bon mdp';
}
else{
	$_SESSION['loged'] = 'errormdp';
	// echo 'mauvais mdp';
}
}
else
{
	$_SESSION['loged'] = 'errorid';
	// echo 'mauvais id';
	// echo count($reponse->rowCount());
}

	header("Location: ../index.php");
?>
