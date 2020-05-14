<?php
/**
 * Classe connexion permettant tout simplement d'instancier un objet connexion qui permettra d'avoir un lien avec la Base De Données extérieure pour ensuite pouvoir effectuer ses requêtes si besoin
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */

class Connexion {

	protected static function get_conexion()
    {

		$serveur = 'localhost';
			$bdd = 'allfortrash';
			$user = 'root';
			$mdp = '';
	
			try {
				// Teste pour se co à la BDD 
				return new PDO("mysql:host=$serveur;dbname=$bdd;charset=utf8", $user, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch (Exception $e) {
				// Sinon, affiche un message d'erreur
				header('Location: index.php?page=bdd_error');
			}
	}
	

}
