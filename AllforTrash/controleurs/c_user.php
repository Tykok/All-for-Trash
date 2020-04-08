<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'AfficheAllUsers';
}
$action = $_REQUEST['action'];
switch($action){
	case 'AfficheAllUsers':{
		include("vues/v_accueil.php");
		
	}
}