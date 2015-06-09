<?php
session_start();

include_once('class/autoload.php'); // pour inclure nos classes
$id = $_SESSION['id'];
$site = new page_base('accueil');
include('../DB/connexion_base.php');
$reponse = $bdd->query("Select * from enfants where parent_id = $id");
$retour = "<a href='index.php'>Retour</a>
<h2>Liste de vos enfants :</h2><ul>";
while ($donnees = $reponse->fetch())
{
$nom = $donnees['nom'];
$prenom = $donnees['prenom'];
$retour .= "<li>$nom $prenom</li>";
}
$retour .= "</ul>
<h2>Vos informations :";
$reponse = $bdd->query("Select * from responsable where id = $id");
$donnees = $reponse->fetch();
$email = $donnees['email'];
$nom = $donnees['nom'];
$prenom = $donnees['prenom'];
$adresse = $donnees['adresse'];
$ville = $donnees['ville'];
$cp = $donnees['cp'];
$tel = $donnees['telephone'];
$port = $donnees['tel_portable'];
$mdp = $donnees['mdp'];

$retour .="<form id='inscription' action='action/action_modifinfo.php' method='post'> 
						<fieldset>
							<label for='name'>Nom :</label>
							<input type='text' id='name' name='nom' value='$nom' required /><br/>
							<label for='name'>Prénom :</label>
							<input type='text' id='name' name='prenom' value='$prenom' required /><br/>
							<label for='name'>Adresse :</label>
							<input type='text' id='name' name='adresse' value='$adresse' required /><br/>
							<label for='name'>Ville :</label>
							<input type='text' id='name' name='ville' value='$ville' required /><br/>
							<label for='name'>Code postal :</label>
							<input type='text' id='name' name='cp' maxlength='5' value='$cp' required /><br/>
							<label for='name'>Téléphone :</label>
							<input type='text' id='name' name='tel' maxlength='10' value='$tel'/><br/>
							<label for='name'>Téléphone portable :</label>
							<input type='text' id='name' name='telport' maxlength='10' value='$port' a/><br/>
							<label for='email'>Email :</label>
							<input type='email' id='email' name='email' value='$email' required /><br/>
							<label for ='mdp'>Mot de passe :</label>
							<input type='password' id='mdp' name='mdp' id='name' value='$mdp' required/><br/>
							<label for ='mdp'>Confirmer mot de passe :</label>
							<input type='password' name='mdp2' id='mdp2' id='name' value='$mdp' required  onkeyup='checkMdp()'/>
							<label id='mdpbox'></label>
							<br/>
							<input type='submit' value='Modifier' />
						</fieldset> 
						</form>";

$site->corps = $retour;
$site->affiche();
?>
