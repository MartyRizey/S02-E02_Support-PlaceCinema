<?php

function calculMontant($age) {

    /**
     * Ce fichier sert maintenant à définir le tarif par rapport à l'age de façon générale
     * et non plus comme avant quand le calcul était dans le fichier tarifs.php, ou seulement 
     * l'age du capitaine était conditionné. 
     */

    // Je créé des variables pour mes tarifs
    $tarifPlein = 8.30;
    $tarifReduit = 6.80;
    $tarifEnfant = 4.50;

    // J'initialise par défaut mon montant au tarif plein
    $montant = $tarifPlein;

    // http://php.net/manual/fr/language.operators.logical.php
    // SI l'âge est infèrieur à 14 il a un tarif réduit
    if($age < 14){

        $montant = $tarifEnfant;
    
    // Si l'âge est supèrieur à 60 ou si l'âge est infèrieur à 16
    // alors il a un tarif réduit
    } elseif($age > 60 || $age < 16) {

        $montant = $tarifReduit;

    }

    return $montant;

}

function calculAbonnement($age, $montant) {

    /**
     * Un abonnement représente l'achat de 5 tickets.
     * 
     * Du coup le prix total d'un abonnement est la place multiplié 5 :
     * $montant (près calcul des réductions) multiplié par 5 * 
     */
    $prixCinqPlaces = $montant * 5;

    if ($age < 25){

    // pour remise de 20%
    $reduction = 20;

    } else {

    // pour remise de 10%
    $reduction = 10;

    }

    // montant de l'abonnement c'est : 
    //   - le prix des 5 places - (le prix des 5 places * (la reduction de 20 ou 10 / 100)) 
    // ex: ________50€_________ - (_________50€________ * (___________20___________ / 100)) 
    // ex: ________50€_________ - (__________________________10€__________________________) = 40€

    $montantAbonnement = $prixCinqPlaces - ($prixCinqPlaces * ($reduction / 100));

    return $montantAbonnement;

}

