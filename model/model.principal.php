<?php

/**
 * Cette fonction retourne un tableau dans l'ordre des 3 utilisateurs du mois
 *
 * @return void
 */
function createTop3Users()
{

    $resultReq = Connexion_select::get_UsersTopOfMonth(); // On récupére les 3 Users du mois

    $theTop = new ArrayObject;

    // pour les 3 utilisateurs qu'on a récupérer (dans l'ordre) on crée notre objet UserLog
    foreach ($resultReq as $uneLigne) {

        $theUser = Connexion_select::getTheUserLog($uneLigne['id_user']);
        $theUser = new User_log(
            $theUser['id_user'],
            $theUser['save_action'],
            $theUser['photo'],
            $theUser['nom'],
            $theUser['prenom'],
            $theUser['mail'],
            $theUser['adresse'],
            $theUser['tel']
        );

        $theTop->append([$uneLigne['nbSignal'], $theUser]); // On ajoute notre objet à l'array
    }
    return $theTop; // Retourne l'ArrayObject Structurer
}




/**
 * Cette fonction renvoit le top 3 des déchets les plus signalés ce mois-ci
 *
 * @return void
 */
function createTop3Trash()
{

    $resultReq = Connexion_select::get_TrashTopOfMonth(); // On récupére les 3 Trash les plus signalés du mois

    $theTop = new ArrayObject;

    // pour les 3 trash qu'on a récupérer (dans l'ordre) on crée notre objet Trash
    foreach ($resultReq as $uneLigne) {

        $theTrash = Connexion_select::getTheTrash($uneLigne['trash_id']); // ici on récupére le trash en lien avec cet id

        // On instancie notre objet
        $theTrash = new Trash(
            $theTrash['id_trash'],
            $theTrash['name'],
            $theTrash['photo'],
            $theTrash['description'],
            $theTrash['origin'],
            $theTrash['kind'],
            $theTrash['created_at']
        );

        $theTop->append([$uneLigne['nbTrash'], $theTrash]); // On ajoute notre objet à l'array
    }
    return $theTop; // Retourne l'ArrayObject Structurer
}


/**
 * Retourne tout simplement le nombre d'utilisateurs du site
 *
 * @return void
 */
function theNbUser()
{
    $nbUser = Connexion_select::get_countUser();

    return $nbUser['nbUser'];
}
