<?php

/*

FICHIER REGROUPANT L'ENSEMBLE DES FONCTIONS QUI RETOURNE UNE COLELCTION DES OBJETS 

Chacune des fonction prennent en entrée le résultat d'une requête pour ensuite en retourner une collection d'objet structuré et ordonné 
*/


/**
 * Fonction qui retourne une collection des dépôts grâce aux résulats d'une requête
 *
 * @param array $resultReq Resultat de la requête
 * @param boolean $chargerTout Si l'on souhaite charger l'ensemble des collection de l'objet Dépôt ou non
 * @return void
 */
function createCollectionDepot($resultReq, $chargerTout = false)
{
    $collectionDepot = array();

    foreach ($resultReq as $uneLigne) {

        // Instance de Dépot
        $unDepot = new Depot(
            $uneLigne['id_depot'],
            $uneLigne['name'],
            $uneLigne['longitude'],
            $uneLigne['latitude'],
            $uneLigne['description'],
            $uneLigne['reported_at'],
            $uneLigne['nettoyer'],
            $chargerTout
        );

        array_push($collectionDepot, $unDepot); // On ajoute notre objet à l'array
    }
    return $collectionDepot; // Retourne l'ArrayObject Structurer
}
