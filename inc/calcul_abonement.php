<?php 

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

 




