<?php

$action ='toutLesUsers';

switch($action){
	case 'toutLesUsers':{
		$lesUsers=$pdo->getToutLesUser();
		include("vues/v_accueil.php");
		break;
    }
}