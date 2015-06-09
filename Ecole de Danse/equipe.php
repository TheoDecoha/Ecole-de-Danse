<?php
include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
include('DB/connexion_base.php');
$reponse = $bdd->query('Select * from equipe');
$i=0;
$retour='';
while ($donnees = $reponse->fetch())
{
$nom = $donnees['nom'];
$prenom = $donnees['prenom'];
$statut = $donnees['statut'];
$retour .="<div class='nom'>$nom $prenom   $statut</div><br/>";

}

$site->corps = $retour;
$site->affiche();
?>
