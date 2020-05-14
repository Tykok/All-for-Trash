<?php

/**
 * Simple aiguilleur qui permet de rediriger vers des pages simples qui ne nécessite pas une grosse 
 * intervention
 */


// Notre menu qui est insérer dans tout les cas
require_once(include_component . 'menu.include.php');


switch ($view) {
    case 'create_account':
        require_once(view . 'create_Account.php');
        break;

    case 'bdd_error':
        $_GET['error'] = 'bdd';
        require_once('other/error.php');
        break;
}



// ainsi que notre pied de page sur la fin
require_once(include_component . 'footer.include.php');
