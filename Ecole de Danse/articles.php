<?php


include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
include('DB/connexion_base.php');
$reponse = $bdd->query('Select * from article order by date_article desc');
$i=0;
$retour='';
while ($donnees = $reponse->fetch())
{
$titre = $donnees['titre'];
$article = $donnees['article'];
$retour .="<div class='titre'><h1>$titre</h1></div>
<div class='article'>$article</div>";

}

$site->corps = $retour;
$site->affiche();
?>
