<?php
session_start();
require_once("Modele/c_bd.php");
include("Vue/v_entete.php") ;
include("Vue/v_bandeau.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

switch($uc)
{
	case 'accueil':
		{ include("Vue/v_bienvenue.php"); break; }
	case 'voirForm':
		{ include("Controller/c_voirForm.php"); break; }
	case 'Autre1':
		{ include("Vue/v_page1.php"); break; }
	case 'Autre2':
		{ include("Vue/v_page2.php"); break; }
}
include("Vue/v_pied.php") ;
?>