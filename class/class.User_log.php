<?php

/**
 * Classe qui permet d'instancier l'utilisateur qui a souhaité ce créer un compte
Un utilisateur peut avoir PLUSIEURS grades par ailleur
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 * @see        User
 */

class User_log extends User
{

	/**
	 * On retient juste le chemin de la photo
	 * @var string
	 * @access private
	 */
	private  $photo;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $nom;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $prenom;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $email;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $adresse;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $tel;

	/**
	 * Collection des différents grades, de l'utilisateur
	 * @var array
	 * @access private
	 */
	private  $collection_grade;

	
	/**
	 * Simple constructeur de notre classe dérivé user log
	 *
	 * @param int $id_user
	 * @param boolean $charge_connexion
	 * @param boolean $charge_grade
	 */
	public function __construct($id_user, $charge_connexion = false, $charge_grade = false)
	{

		// REQ SQL POUR RECUPERE
		// APPEL DU CONSTRUCTEUR POUR CREATION OBJET
		// AJOUT A CHACUN DES ATTRIBUTS LEURS VALEURS 

		$photo = null;
		$nom = null;
		$prenom = null;
		$email = null;
		$adresse = null;
		$tel = null;

		if ($charge_grade) {
			$collection_grade = null;
		} else {
			$collection_grade = array();
		}
	}


	/**
	DEBUT Fonction GET et SET
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ******
	 */


	public function get_photo()
	{
		return $this->photo;
	}
	public function get_nom()
	{
		return $this->nom;
	}
	public function get_prenom()
	{
		return $this->prenom;
	}
	public function get_email()
	{
		return $this->email;
	}
	public function get_adresse()
	{
		return $this->adresse;
	}
	public function get_tel()
	{
		return $this->tel;
	}



	public function set_photo($value)
	{
		$this->photo = $value;
	}
	public function set_nom($value)
	{
		$this->nom = $value;
	}
	public function set_prenom($value)
	{
		$this->prenom = $value;
	}
	public function set_email($value)
	{
		$this->email = $value;
	}
	public function set_adresse($value)
	{
		$this->adresse = $value;
	}
	public function set_tel($value)
	{
		$this->tel = $value;
	}


	/**
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ************************************************************************************************************************************
	 	FIN Fonction GET et SET
	 */
}
