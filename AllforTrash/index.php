
<?php
require_once ("modele/class.pdoaft.inc.php");
$pdo = PdoAft::getPdoAft();	
$_REQUEST['uc'] = 'accueil'; 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'acceuil':{
		include("controleurs/c_user.php");
	}
	
}
