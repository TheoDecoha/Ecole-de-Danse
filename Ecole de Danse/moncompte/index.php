<?php
session_start();

include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
$id = $_SESSION['id'];
include('../DB/connexion_base.php');
$reponse = $bdd->query('Select * from article order by date_article desc');
$retour = "
<ul>
				<li><a href='info.php'>Informations du compte</a></li>
				<li><a href='ajoutenfant.php'>Ajouter un enfant</a></li>
				<li><a href='inscrireenfant.php'>Inscrire un enfant</a></li>
			</ul>
				";


$site->corps = $retour;
$site->affiche();
?>
