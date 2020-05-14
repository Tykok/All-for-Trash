<?php

/**
 * Classe Connexion Select, elle hérite de notre classe mère connexion et permet grâce à son instance de ce connecter à la BDD
 * et d'y effectuer différentes opérations basé sur un SELECT
 */

class Connexion_select extends Connexion
{

    /**
     * Simple fonction qui retourne l'ensemble des utilisateurs qui ce sont créer un compte 
     *
     * @return void
     */
    public static function getToutLesUserLog()
    {
        $req = "select * from user_log";
        $res = Connexion::get_conexion()->query($req);
        $lesUsers = $res->fetchAll();
        return $lesUsers;
    }


    /**
     * Cette fonction permet de selectionner le userLog avec l'id correspondant
     *
     * @param int $idUser
     * @return void
     */
    public static function getTheUserLog($idUser)
    {
        $req = "select * 
        from user_log L INNER JOIN user U
        ON L.id_user = U.id_user
        where L.id_user = :theId;";

        $res = Connexion::get_conexion()->prepare($req); // prépapre la requête
        $res->execute(array('theId' => $idUser)); // On exécute notre requête 
        $theUser = $res->fetch(); // on récupére la ligne
        return $theUser;
    }



    /**
     * Permet de récupérer le trash correspondant à l'id trash
     *
     * @param int $idTrash
     * @return void
     */
    public static function getTheTrash($idTrash)
    {
        $req = "select * 
        from trash
        where id_trash = :theId;";

        $res = Connexion::get_conexion()->prepare($req); // prépapre la requête
        $res->execute(array('theId' => $idTrash)); // On exécute notre requête 
        $theTrash = $res->fetch(); // on récupére la ligne
        return $theTrash;
    }



    /**
     * Cette fonction récupére l'ensemble des dépôts signaler ce mois-ci
     *
     * @return void
     */
    public static function get_depotOfMonth()
    {
        // Requête = Récupére l'ensemble des dépôts signaler (reported_at) ce mois-ci
        $req = "SELECT *
    FROM depot
    WHERE MONTH(reported_at) = MONTH(CURRENT_DATE);";
        $res = Connexion::get_conexion()->query($req);
        $lesDepots = $res->fetchAll();
        return $lesDepots;
    }



    /**
     * Retourne les identifiants des  users les plus actifs ce mois-ci 
     * dans un tableau clé valeur (clé = id_user, value = nbSignalement)
     *
     * @param boolean $limit permet de spécifier si on ne veut que les 3 premiers ou l'ensemble des users
     * @return void
     */
    public static function get_UsersTopOfMonth($limit = true)
    {
        $req = "SELECT COUNT(*) as nbSignal, id_user 
        FROM depot D 
        WHERE MONTH(reported_at) = MONTH(CURRENT_DATE)
        GROUP BY id_user 
        ORDER BY nbSignal DESC";

        // Si on ne souhaite qu'avoir les 3 premiers users ou le classement du mois
        if ($limit) {
            $req .= " LIMIT 0,3;";
        } else {
            $req .= ";";
        }

        $res = Connexion::get_conexion()->query($req);
        $lesUsers = $res->fetchAll();

        return $lesUsers;
    }



    /**
     * Permet de savoir combien d'utilisateurs ont été enregistrer sur ce site web
     *
     * @return void
     */
    public static function get_countUser()
    {
        $req = "SELECT COUNT(*) as nbUser 
        FROM user";

        $res = Connexion::get_conexion()->query($req);
        $count = $res->fetch();

        return $count;
    }



    /**
     * Cette fonction permet de retourner le classement des déchets les plus signalés 
     *
     * @param boolean $limit permet de spécifier à la requête qu'on ne veux QUE les 3 premiers ou l'ENSEMBLE du classement
     * @return void
     */
    public static function get_TrashTopOfMonth($limit = true)
    {
        $req = "select count(*) as nbTrash, trash_id
         from depot_trash 
         group by trash_id 
         order by nbTrash DESC";

        // Si on ne souhaite qu'avoir les 3 premiers users ou le classement du mois
        if ($limit) {
            $req .= " LIMIT 0,3;";
        } else {
            $req .= ";";
        }

        $res = Connexion::get_conexion()->query($req);
        $lesTrash = $res->fetchAll();

        return $lesTrash;
    }





    /**
     * Cette fonction permet de renvoyer VRAI ou FAUX si l'utilisateur entre des bons ou mauvais identifiants
     *
     * @param string $login
     * @param string $mdp
     * @return void
     */
    public static function verif_IdentifiantUser($login, $mdp)
    {
        $login = sha1($login);
        $mdp = sha1($mdp);

        $req = "SELECT * 
        FROM user_log"; // récupére les lignes

        $rs = Connexion::get_conexion()->query($req); //  get_conexion() à la base de données
        $ligne = $rs->fetchAll(); // Récupération des lignes

        $acces = false;

        // On parcourt chaque identifiant pour les tester
        foreach ($ligne as $uneligne) {

            if ($uneligne['login'] == $login && $uneligne['mdp'] == $mdp) {
                $acces = true; // variable à true
                break; // On sort donc de la boucle
            }
        }

        return $acces; // Retourne vrai ou faux
    }


    /**
     * Cette fonction permet de retourner les informations relatives à l'user qui vient d'envoyer
     * ses identifiants
     *
     * @param string $login
     * @param string $mdp
     * @return void
     */
    public static function get_InfoUser($login, $mdp)
    {

        // On hash les identifiants envoyés 
        $login = sha1($login);
        $mdp = sha1($mdp);

        // On récupére la ligne correspondante
        $req = "SELECT * 
        FROM user_log INNER JOIN user
        ON user_log.id_user = user.id_user
        WHERE login = :the_login
        AND mdp = :this_mdp;";

        // Préparation de la requête
        $rs = Connexion::get_conexion()->prepare($req);
        // Exécution de notre requête
        $rs->execute(array('the_login' => $login, 'this_mdp' => $mdp));

        return $rs->fetch(); // Récupération la ligne et return

    }
}
