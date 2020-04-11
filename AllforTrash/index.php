
<?php

require_once("modele/class.pdoaft.inc.php");
$pdo = new Connexion_aft;
$uc = 'acceuil';

switch ($uc) {
	case 'acceuil': {
			require_once("controleurs/c_user.php");
			break;
		}
}
