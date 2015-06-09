<?php
session_start();
$id = $_SESSION['id'];
include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
$id = $_SESSION['id'];
include('../DB/connexion_base.php');
$reponse = $bdd->query('Select * from article order by date_article desc');
$retour = "<a href='index.php'>Retour</a>
<h2>Ajouter un enfant</h2>
<form id='inscription' action='action/action_ajoutenfant.php' method='post'> 
						<fieldset>
							<label for='name'>Nom :</label>
							<input type='text' id='name' name='nom' value='' required /><br/>
							<label for='name'>Prénom :</label>
							<input type='text' id='name' name='prenom' value='' required /><br/>
							<input type='submit' value='Ajouter' />
						</fieldset> 
						</form>";


$site->corps = $retour;
$site->affiche();
?>
