<?php

/**
 * Cette fonction retourne un tableau dans l'ordre des 3 utilisateurs du mois
 *
 * @return void
 */
function createTop3Users() 
{

    // on instancie notre objet SELECT
    $select = new Connexion_select;
    $resultReq = $select->get_UsersTopOfMonth(); // On récupére les 3 Users du mois

    $theTop = new ArrayObject;

    // pour les 3 utilisateurs qu'on a récupérer (dans l'ordre) on crée notre objet UserLog
    foreach ($resultReq as $uneLigne) {

        $theUser = $select->getTheUserLog($uneLigne['id_user']);
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

        $theTop->append([$uneLigne['nbSignal'],$theUser]); // On ajoute notre objet à l'array
    }
    return $theTop; // Retourne l'ArrayObject Structurer
}
