<?php
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$id = $_SESSION['id'];
$bdd = new PDO('mysql:host=localhost;dbname=ecolededanse', 'root', '');
$bdd->exec("SET CHARACTER SET utf8");
$insert = $bdd->exec("insert into enfants values('','$nom','$prenom',$id)");
header("Location: ../index.php.php");



//$reponse = $bdd->query("insert into utilisateurs values('',$_POST['email'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'])");
?>
