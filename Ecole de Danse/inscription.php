<?php
session_start();
include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
if(!isset($_GET['succes']))
{
$retour = '';
if(isset($_SESSION['inscrmail']) && $_SESSION['inscrmail'] == 'errorexist')
{
$retour .= "<div id='mailexist'>L'email saisit éxiste déjà !</div> ";
$_SESSION['inscrmail']='';
}
$retour .="<form id='inscription' action='action/action_inscription.php' method='post'> 
						<fieldset>
							<label for='name'>Nom :</label>
							<input type='text' id='name' name='nom' placeholder='Saisissez votre nom' required autofocus /><br/>
							<label for='name'>Prénom :</label>
							<input type='text' id='name' name='prenom' placeholder='Saisissez votre prénom' required /><br/>
							<label for='name'>Adresse :</label>
							<input type='text' id='name' name='adresse' placeholder='Saisissez votre adresse' required /><br/>
							<label for='name'>Ville :</label>
							<input type='text' id='name' name='ville' placeholder='Saisissez votre ville' required /><br/>
							<label for='name'>Code postal :</label>
							<input type='text' id='name' name='cp' maxlength='5' placeholder='Saisissez votre code postal' required /><br/>
							<label for='name'>Téléphone :</label>
							<input type='text' id='name' name='tel' maxlength='10' placeholder='Saisissez votre numéro de téléphone'/><br/>
							<label for='name'>Téléphone portable :</label>
							<input type='text' id='name' name='telport' maxlength='10' placeholder='Saisissez votre numéro de portable' a/><br/>
							<label for='email'>Email :</label>
							<input type='email' id='email' name='email' placeholder='Saisissez votre email' required /><br/>
							<label for ='mdp'>Mot de passe :</label>
							<input type='password' id='mdp' name='mdp' id='name' placeholder='Saisisser votre mot de passe' required/><br/>
							<label for ='mdp'>Confirmer mot de passe :</label>
							<input type='password' name='mdp2' id='mdp2' id='name' placeholder='Confirmer votre mot de passe' required  onkeyup='checkMdp()'/>
							<label id='mdpbox'></label>
							<br/>
							<input type='submit' value='Valider' />
						</fieldset> 
						</form>";
						}
						else
						{
						$retour = "<h1>Inscritption réussie</h1>Vous pouvez maintenant vous connecter.";
						}
$site->corps = $retour;
$site->affiche();							
?>
