<?php

/**
 * Classe d'accès aux données. 

 * Utilise les services de la classe PDO
 * pour l'application AllforTrash
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoaft qui contiendra l'unique instance de la classe

 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoAft {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=allfortrash';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoAft = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        PdoAft::$monPdo = new PDO(PdoAft::$serveur . ';' . PdoAft::$bdd, PdoAft::$user, PdoAft::$mdp);
        PdoAft::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function __destruct() {
        PdoAft::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe

     * Appel : $instancePdoAft = PdoAft::getPdoAft();

     * @return l'unique objet de la classe PdoAft
     */
    public static function getPdoAft() {
        if (PdoAft::$monPdoAft == null) {
            PdoAft::$monPdoAft = new PdoAft();
        }
        return PdoAft::$monPdoAft;
    }

    public function getToutLesUser() {
        $req = "select * from user_log";
        $res = PdoAft::$monPdo->query($req);
        $lesUsers = $res->fetchAll();
        return $lesUsers;
    }

   

}
