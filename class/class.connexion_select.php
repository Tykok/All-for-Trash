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
}
