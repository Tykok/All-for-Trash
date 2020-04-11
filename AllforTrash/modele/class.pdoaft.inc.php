<?php

class Connexion_aft
{

    private $connexion;


    /**
     * Constructeurs, (méthodes magiques)
     */
    public  function __construct()
    {
        $serveur = 'localhost';
        $bdd = 'allfortrash';
        $user = 'root';
        $mdp = '';

        try {
            // Teste pour se co à la BDD 
            $this->connexion = new PDO("mysql:host=$serveur;dbname=$bdd;charset=utf8", $user, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            // Sinon, affiche un message d'erreur
            throw new Exception("Aucun accès à la Base De Données");
        }
    }


    // Retourne l'instance de la connexion pour permettre d'effectuer différentes requêtes
    public function get_conexion()
    {
        return $this->connexion;
    }

    public function getToutLesUser() {
        $req = "select * from user_log";
        $res = $this->connexion->query($req);
        $lesUsers = $res->fetchAll();
        return $lesUsers;
    }

}
