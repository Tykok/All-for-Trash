<?php

require_once(model . 'createObject.php'); // on récupére notre modèle qui ce charge de créer les différentes colelctions d'objets
require_once(model . 'principal.php'); // Modèle qui permet de récupérer les différents 'Top 3' du mois et d'en faire des collections

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
// On récupére la collection des dépôts de manière structurer
$month_depot = createCollectionDepot();



/**
 * PARTIE SUR LE TOP 3 DES DECHETS LES PLUS SIGNALER DU MOIS
 */
$topTrash = createTop3Trash();


/**
 * PARTIE CONCERNANT LE TOP 3 DES USERS
 */
$topUser = createTop3Users(); // On récupére nos 3 utilisateurs du mois



// Appel de notre vue
require_once(view . 'principal.php');
