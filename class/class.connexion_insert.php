<?php

class Connexion_insert extends Connexion
{


    /**
     * Cette méthode privé permet à d'autre méthode de cette classe concernant les users, d'insérer tout d'abord le user dans la classe 
     * parente
     *
     * @param boolean $save_action si l'utilisateur nous laisse effectuer des statistiques ou non
     * @return void qui permet de savoir quel est le dernier id insérer
     */
    private static function insert_User($save_action)
    {
        // On forme notre INSERT
        $req = "INSERT INTO user ( save_action ) VALUES ( ? );";



        // Préparation de la requête
        $rs = Connexion::get_conexion()->prepare($req);
        // Exécution de notre requête d'insertion
        $rs->execute(array($save_action));


        // on récupére le dernier id
        $req = 'SELECT MAX(id_user) as maxid FROM user;';
        $rs = Connexion::get_conexion()->query($req);
        $rs = $rs->fetch();
        $rs = $rs['maxid'];

        return $rs; // On retourne le dernier id
    }


    /**
     * Cette fonction permet d'insérer un user dans la table user_log, elle permet de luic réer un compte
     *
     * @param boolean $save_action
     * @param string $nom
     * @param string $prenom
     * @param string $mail
     * @param string $login
     * @param string $mdp
     * @return void
     */
    public static function insert_UserLog($save_action, $nom, $prenom, $mail, $login, $mdp)
    {
        $last_id = Connexion_insert::insert_User($save_action); // on insére tou d'abord dans la table mère et on récupére l'id

        // On forme notre INSERT
        $req = "INSERT INTO user_log(id_user, nom, prenom, mail, login, mdp) 
                VALUES (:this_last_id, :name_of, :prenom, :mail, :login, :this_mdp);";

        // Préparation de la requête
        $rs = Connexion::get_conexion()->prepare($req);
        // Exécution de notre requête d'insertion
        $rs->execute(array(
            'this_last_id' => $last_id,
            'name_of' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'login' => sha1($login),
            'this_mdp' => sha1($mdp)
        ));
    }
}
