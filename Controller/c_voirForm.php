<?php

$action = $_REQUEST['action'];

switch($action)
{
	case 'voirForm':
		{ include("Vue/v_accueil.php"); break; }
}

?>