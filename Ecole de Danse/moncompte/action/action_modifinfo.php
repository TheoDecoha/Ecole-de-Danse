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
$id = $_SESSION['id'];
$bdd = new PDO('mysql:host=localhost;dbname=ecolededanse', 'root', '');
$bdd->exec("SET CHARACTER SET utf8");

$insert = $bdd->exec("update responsable set email='$email', nom='$nom', prenom='$prenom', mdp='".md5($mdp)."', adresse='$adresse', ville='$ville',
cp=$cp,telephone=$tel,tel_portable=$port where id = $id ");
header("Location: ../info.php");
?>
