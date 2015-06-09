<?php
session_start();
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];
$tel = $_POST['tel'];
$port = $_POST['telport'];

include('../DB/connexion_base.php');
$reponse = $bdd->query("select * from respnsable where email='$email'"); 

$donnees = $reponse->fetch;
if($reponse->rowCount() == 1){
$_SESSION['inscrmail'] = 'errorexist';
header("Location: ../inscription.php");

}
else
 {
$insert = $bdd->exec("insert into responsable values('','$email','$nom','$prenom','".md5($mdp)."','$adresse','$ville',$cp,$tel,$port)");
header("Location: ../inscription.php?succes=ok");
 }



//$reponse = $bdd->query("insert into utilisateurs values('',$_POST['email'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'])");
?>
