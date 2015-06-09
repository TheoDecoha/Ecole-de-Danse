<?php
session_start();

include_once('class/autoload.php'); // pour inclure nos classes
$site = new page_base('accueil');
include('DB/connexion_base.php');
echo 'Géolocalisation : note d’information adressée au personnel

………………………………… (indication de l’identité du responsable du traitement)

Nous avons installé, dans les véhicules, un système permettant de les localiser en temps réel. Ce nouveau service va nous servir (précisez ici la finalité, par exemple, repérer le véhicule le plus proche à la demande d’un client).

Nous aurons connaissance de l’itinéraire que vous suivez ainsi que des arrêts que vous effectuez.

Les données relatives à vos déplacements sont conservées au maximum (précisez).

Au-delà, toutes les données sont rendues anonymes et ont pour seul objet la réalisation de statistiques.

Seuls les services suivants sont destinataires de ces informations (précisez, par exemple direction des ressources humaines, responsables opérationnels…).

Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous pouvez avoir accès et rectifier les informations qui vous concernent en vous adressant à ……………………………… (préciser le service et l’adresse).
';

$site->corps = $retour;
$site->affiche('');
?>
