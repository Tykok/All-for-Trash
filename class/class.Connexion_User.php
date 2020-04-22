<?php

/**
 * 
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */

class Connexion_User
{

	/**
	 * La date de connexion de l'utilisateur à ce module
	 * @var date
	 * @access private
	 */
	private  $date_Connexion;

	/**
	 * Objet Module correspondant à une fonctionnalités sur lequel l'utilisateur est venu
	 * @var Module
	 * @access private
	 */
	private  $leModule;


	/**
	 * Simple constructeur de la classe Connexion User
	 *
	 * @param date $date qui correspond à la date de connexion au module
	 * @param module $module correspond à un objet module X
	 */
	public function __construct($date, $module)
	{
		$date_Connexion = $date;
		$leModule = $module;
	}

	/**
	DEBUT Fonction GET et SET
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ************************************************************************************************************************************
	 */

	public function get_date_Connexion()
	{
		return $this->date_Connexion;
	}
	public function get_leModule()
	{
		return $this->leModule;
	}


	public function set_date_Connexion($value)
	{
		$this->date_Connexion = $value;
	}
	public function set_leModule($value)
	{
		$this->leModule = $value;
	}

	/**
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ************************************************************************************************************************************
	 FIN fonction GET et SET
	 */
}
