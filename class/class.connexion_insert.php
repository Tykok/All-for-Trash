<?php

class Connexion_insert extends Connexion
{


    /**
     * Permet l'instance d'un objet de connexion permettant d'y effectuer des INSERT ...
     */
    public final  function __construct()
    {
        try {
            $conn = Connexion::__construct();
        } catch (Exception $e) {
            $info = $e->getMessage();
        }
    }


}