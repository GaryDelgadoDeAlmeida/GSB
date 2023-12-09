<?php 
session_start();
require_once("../Modele/c_bd.php");

$num = $_REQUEST['num'];
$mois = $_REQUEST['mois'];
$annee = $_REQUEST['annee'];

if (isset($num) && isset($mois) && isset($annee)) {
	# code...
	if (!empty($num) && !empty($mois) && !empty($annee)) {
		# code...
		try {
			echo "Votre numéro de visiteur : ".$num."<br><li><a href='../index.php?uc=voirForm&action=voirForm'>Retour Formulaire</a></li><hr>";
			$AnMois = $annee.$mois;
			$connexion = connecterServeurBD();
			echo obtenirLignes($connexion, $num);
			deconnecterServeurBD($connexion);
		}
		catch(Exception $e) {
			echo $e->message;
		}
	}
	else
	{
		echo "Please, don't forget the forgotten input.";
	}
}

?>