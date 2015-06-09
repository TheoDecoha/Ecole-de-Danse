<?php
session_start();
$enfant = $_POST['enfant'];
$id = $_SESSION['id'];
$bdd = new PDO('mysql:host=localhost;dbname=ecolededanse', 'root', '');
$bdd->exec("SET CHARACTER SET utf8");
foreach($_POST['cbcours'] AS $cle=>$value)
{
$insert = $bdd->exec("insert into participer values($value,$enfant)");
}

header("Location: ../index.php.php");


?>
