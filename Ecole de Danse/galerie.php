<?php
include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
$bdd = new PDO('mysql:host=localhost;dbname=ecolededanse', 'root', '');
$bdd->exec("SET CHARACTER SET utf8");
$reponse = $bdd->query('Select * from albums');
$retour='';
if(!isset($_GET['id']))
{
	while ($donnees = $reponse->fetch())
	{
		$album = $donnees['chemin']; // chemin de l'album
		$thumbail = $donnees['thumbail']; //miniature de l'album
		$legende = $donnees['description'];
		$id = $donnees['id'];
		$retour .="<div id='galerieimg'><figure><a href='galerie.php?id=$id' ><img src='$album$thumbail' alt='' style='max-width:160px; max-height:160px;'/>
		<figcaption>$legende</figcaption></a></figure></div>";
	}
}
else
{
	$id = $_GET['id'];
	$reponse = $bdd->query("Select * from albums where id = $id");
	$donnees = $reponse->fetch();
	$album = $donnees['chemin']; // chemin de l'album
	$dirname = $album;
	$dir = opendir($dirname); 

	while($file = readdir($dir)) {
		if($file != '.' && $file != '..' && !is_dir($dirname.$file))
		{
			// $retour.= '<a href="'.$dirname.$file.'">'.$file.'</a>';
			$retour .="<div id='galerieimg'><figure><a href='$dirname$file' ><img src='$dirname$file' alt='' style='max-width:160px; height:max-160px;'/></a></figure></div>";
		}
	}

	closedir($dir);
}
$site->corps = $retour;
$site->affiche();
?>
