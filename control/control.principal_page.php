<?php

// Notre menu
require_once(include_component . 'menu.include.php');
// Notre bouton flottant
require_once(include_component . 'floating_button.include.php');

// On vérifie que l'utilisateur s'est déjà connecté ou non
if (!isset($_COOKIE['user'])) {
    require_once(modal . 'bienvenue.html');
}

// Appel de notre vue
require_once(view . 'principal.php');
