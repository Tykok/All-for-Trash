<?php

/**
 * Classe peremttant d'instancier un déchets
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */

class Trash
{

	/**
	 * 
	 * @var int
	 * @access private
	 */
	private  $id_trash;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $name;

	/**
	 * Contient ici le nom de la photo, ensuite une constante vient spécifier le chemin mennt aux différentes photos de l'objet trash
	 * @var string
	 * @access private
	 */
	private  $photo;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $description;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $origin;

	/**
	 * 
	 * @var string
	 * @access private
	 */
	private  $kind;

	/**
	 * 
	 * @var date
	 * @access private
	 */
	private  $created_at;


	/**
	 * Simple constructeur de notre classe Trash
	 *
	 * @param int $id_trash
	 * @param string $name
	 * @param string $photo
	 * @param string $description
	 * @param string $origin
	 * @param string $kind
	 * @param date $created_at
	 */
	public function __construct($id_trash, $name, $photo, $description, $origin, $kind, $created_at)
	{
		$this->id_trash = $id_trash;
		$this->name = $name;
		$this->photo = $photo;
		$this->description = $description;
		$this->origin = $origin;
		$this->kind = $kind;
		$this->created_at = $created_at;
	}



	/**
	DEBUT Fonction GET et SET
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ************************************************************************************************************************************
	 */

	public function get_id_trash()
	{
		return $this->id_trash;
	}
	public function get_name()
	{
		return $this->name;
	}
	public function get_photo()
	{
		return $this->photo;
	}
	public function get_description()
	{
		return $this->description;
	}
	public function get_origin()
	{
		return $this->origin;
	}
	public function get_kind()
	{
		return $this->kind;
	}
	public function get_created_at()
	{
		return $this->created_at;
	}



	public function set_id_trash($value)
	{
		$this->id_trash = $value;
	}
	public function set_name($value)
	{
		$this->name = $value;
	}
	public function set_photo($value)
	{
		$this->photo = $value;
	}
	public function set_description($value)
	{
		$this->description = $value;
	}
	public function set_origin($value)
	{
		$this->origin = $value;
	}
	public function set_kind($value)
	{
		$this->kind = $value;
	}
	public function set_created_at($value)
	{
		$this->created_at = $value;
	}

	/**
	 ****************************************************************************************************************************************
	 ********************************************************************************************************************************
	 ************************************************************************************************************************************
	 	FIN Fonction GET et SET
	 */
}
