<?php

// Notre menu
require_once(include_component . 'menu.include.php');



/*
// On vérifie que l'utilisateur s'est déjà connecté ou non
if (!isset($_COOKIE['user'])) {
    require_once(modal . 'bienvenue.html');
}
*/


/**
 * PARTIE CONCERNANT LA CARTE DE LA VIEWPRINCIPAL
 */
// Instance pour les requêtes SELECT
$select = new Connexion_select;
$month_depot = $select->get_depotOfMonth(); // On récupére les dépôts du mois
require_once(model . 'createObject.php'); // on récupére notre modèle
$month_depot = createCollectionDepot($month_depot); // On récpére la collection des dépôts de manière structurer



// Appel de notre vue
require_once(view . 'principal.php');
