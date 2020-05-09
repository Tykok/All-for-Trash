<?php

/**
 * Classe Connexion Select, elle hérite de notre classe mère connexion et permet grâce à son instance de ce connecter à la BDD
 * et d'y effectuer différentes opérations basé sur un SELECT
 */

class Connexion_select extends Connexion
{


    /**
     * Permet l'instance d'un objet de connexion permettant d'y effectuer des SELECT ...
     */
    public final  function __construct()
    {
        try {
            $conn = Connexion::__construct();
        } catch (Exception $e) {
            $info = $e->getMessage();
        }
    }


    /**
     * Retourne l'instance de la connexion pour permettre d'effectuer différentes requêtes
     *
     * @return void
     */
    public function get_conexion()
    {
        return $this->connexion;
    }


    /**
     * Simple fonction qui retourne l'ensemble des utilisateurs qui ce sont créer un compte 
     *
     * @return void
     */
    public function getToutLesUserLog()
    {
        $req = "select * from user_log";
        $res = $this->connexion->query($req);
        $lesUsers = $res->fetchAll();
        return $lesUsers;
    }


    /**
     * Cette fonction permet de selectionner le userLog avec l'id correspondant
     *
     * @param int $idUser
     * @return void
     */
    public function getTheUserLog($idUser)
    {
        $req = "select * 
        from user_log L INNER JOIN user U
        ON L.id_user = U.id_user
        where L.id_user = :theId;";

        $res = $this->connexion->prepare($req); // prépapre la requête
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
    public function getTheTrash($idTrash)
    {
        $req = "select * 
        from trash
        where id_trash = :theId;";

        $res = $this->connexion->prepare($req); // prépapre la requête
        $res->execute(array('theId' => $idTrash)); // On exécute notre requête 
        $theTrash = $res->fetch(); // on récupére la ligne
        return $theTrash;
    }



    /**
     * Cette fonction récupére l'ensemble des dépôts signaler ce mois-ci
     *
     * @return void
     */
    public function get_depotOfMonth()
    {
        // Requête = Récupére l'ensemble des dépôts signaler (reported_at) ce mois-ci
        $req = "SELECT *
    FROM depot
    WHERE MONTH(reported_at) = MONTH(CURRENT_DATE)";
        $res = $this->connexion->query($req);
        $lesUsers = $res->fetchAll();
        return $lesUsers;
    }



    /**
     * Retourne les identifiants des  users les plus actifs ce mois-ci 
     * dans un tableau clé valeur (clé = id_user, value = nbSignalement)
     *
     * @param boolean $limit permet de spécifier si on ne veut que les 3 premiers ou l'ensemble des users
     * @return void
     */
    public function get_UsersTopOfMonth($limit = true)
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

        $res = $this->connexion->query($req);
        $lesUsers = $res->fetchAll();

        return $lesUsers;
    }



    /**
     * Permet de savoir combien d'utilisateurs ont été enregistrer sur ce site web
     *
     * @return void
     */
    public function get_countUser()
    {
        $req = "SELECT COUNT(*) as nbUser 
        FROM user";

        $res = $this->connexion->query($req);
        $count = $res->fetch();

        return $count;
    }



    /**
     * Cette fonction permet de retourner le classement des déchets les plus signalés 
     *
     * @param boolean $limit permet de spécifier à la requête qu'on ne veux QUE les 3 premiers ou l'ENSEMBLE du classement
     * @return void
     */
    public function get_TrashTopOfMonth($limit = true)
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

        $res = $this->connexion->query($req);
        $lesTrash = $res->fetchAll();

        return $lesTrash;
    }
}
