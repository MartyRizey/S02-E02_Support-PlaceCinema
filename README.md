# Exercice Places de cinéma

Une intégration assez simpliste a été faite pour un site du cinéma Rodia de la ville d'Haut-Cloques.

## Etape 1

### Objectif

Ne pas répéter le code et afficher le tarif pour l'âge du capitaine (43 ans).

### Comment faire ?

- reprendre les conditions écrites dans le challenge
- créer une variable `$age` avec la valeur 43
- afficher l'âge et le tarif dans le code HTML (`todo`)
- pour ne pas répéter le code source dans nos fichiers, il faut utiliser l'inclusion de fichiers

## Etape 2

### Objectif

Lister tous les âges (1 à 99) et afficher à côté le tarif correspondant

### Comment faire ?

- écrire une boucle de 1 à 99
- pour chaque âge, calculer le tarif
- générer le code HTML pour afficher l'âge et le tarif

## Etape 3

### Objectif

Afficher la liste des films en salle

### Comment faire ?

- créer un fichier pour la page `En salle`
- modifier la navigation pour faire le lien vers la page `En salle`
- créer un tableau (array) PHP contenant la liste de 5 films actuellement en salle (=> tableau de 5 titres de film)
- parcourir ce tableau avec la boucle `for` afin d'afficher ces 5 titres de films dans la page (HTML)

## Etape 4

### Objectif

Afficher le tarif de la carte d'abonnemnt 5 places pour tous les âges (1 à 99 ans)

### Comment faire ?

- écrire une boucle de 1 à 99
- pour chaque âge, calculer le tarif de la place, avec la réduction de l'abonnement
  - le pourcentage de réduction n'est pas le même selon l'âge
  - le pourcentage de réduction s'applique sur le tarif plein, réduit ou enfant, selon l'âge
- générer le code HTML pour afficher le tarif (à droite de l'étape 2, merci `flex` :wink:)
