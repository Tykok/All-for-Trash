<?php
// Fichir regroupant tout les appels de classes
const classF = '../../../class/class.';
require_once(classF . 'include.php');

extract($_POST);

// Vérification 1 (Tout les champs sont présents)
if (isset($name) && isset($surname) && isset($email) && isset($login) && isset($password) && isset($confirm_password) && isset($save_action)) {

    // si tout les champs n'ont pas été remplis on prévient l'utilisateur
    if (strlen($name) <= 0 || strlen($surname) <= 0 || strlen($email) <= 0 || strlen($login) <= 0) {
        echo 'Renseigner tout les champs';
        exit;
    }

    // vérification 2 (Les mots de passes correspondent)
    if ($password === $confirm_password) {

        // Vérification 3 (L'adresse mail est valide)
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
            Connexion_insert::insert_UserLog(boolval($save_action), $name, $surname, $email, $login, $password); // appel de la méthode d'insertion
            echo 'insert_ok ;)';
        } else {
            echo 'Adresse mail invalide';
        }
    } else {
        echo 'Les mots de passes ne correspondent pas';
    }
} else {
    echo 'Renseigner tout les champs';
}
