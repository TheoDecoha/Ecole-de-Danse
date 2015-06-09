<?php
session_start();
$id = $_SESSION['id'];
include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
$id = $_SESSION['id'];
include('../DB/connexion_base.php');
$reponse = $bdd->query("Select * from enfants where parent_id = $id");
$retour = "<a href='index.php'>Retour</a>
<h2>Inscrire un enfant</h2>
<form id='' action='action/action_inscrireenfant.php' method='post'> 
						<fieldset>
							<label for='name' >Enfant :</label>
							<select id='name' name='enfant'>";
while ($donnees = $reponse->fetch())
{
$nomenf = $donnees['nom'];
$prenomenf = $donnees['prenom'];
$id = $donnees['id'];
$retour .="<option value ='$id'>$nomenf $prenomenf</option>";
}			
$retour .= "</select><br/>
<label for='name' >Cours :</label>";

$reponse = $bdd->query("Select * from cours");
while ($donnees = $reponse->fetch())
{
$cours = $donnees['type'];
$idcours = $donnees['id'];
$retour .= "<input id='check' type='checkbox' id='name' name='cbcours[]' value='$idcours'>$cours</input>";
}
$retour .="<br/>
							<input type='submit' value='Modifier' />
						</fieldset> 
						</form>";

$site->corps = $retour;
$site->affiche();
?>
