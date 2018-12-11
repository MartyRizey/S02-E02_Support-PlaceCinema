<?php 

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
    
?>