RESUME
------
Cloner le repository du projet de GitHub en local dans un dossier sur votre disque dur.
Créer une branche sur le repository distant, et se positionner dessus.
Sur dépôt local faire un _git checkout nomDeLaBranche_ et ouvrir ensuite Visual Studio Code ou Vs-Code.
Présentation du projet
	- Objectif et Etape 1 : A partir des renseignements de la page "tarif". Rapport age/prix. Faire en sorte d'afficher dynamiquement le tarif pour 	une personne de 43 ans.
Organiser les dossiers et fichiers :
Déroulé du cours : page tarifs.php
	- Création des variables pour stocker les valeurs dont nous aurons besoin.
	- Création d'une structure conditionnelle pour déterminer en fonction de l'age du capitaine et des conditions, le tarif à payer.
	- Afficher ensuite ce tarif dans la page tarif.php.
	
RESUME 
------
Déroulé du cours : page tarifs.php SUITE
	-Améliorer et optimiser le code de la structure conditionnelle dans tarifs.php
	
Video RED -2- Après midi avant pause 15h.mp4
Oragniser les fichiers Suite
	Ne pas répeter de code
  - création d'un template, header.php dans le dossier "templates" 
  - Include ou Require de fichier
  Une boucle for pour lister les ages de 1 à 99
  - Syntaxe alternative pour écrire une boucle
  -	Syntaxe raccourci pour faire un echo en php
  Pour chaque age, calculer le tarif et l'afficher	
  - Séparation du traitement de l'affichage et include ou require
  
  
Déroulé étape par étape - pense-bête
------------------------------------
	* Présentation du projet 
	  ----------------------
	  Intégration simple réalisée d'un site de cinéma. Développer en PHP le TODO de chaque page.
	  
	  Etape 1
	  -------
	  	Organisé les fichiers pour ne pas répeter de code.
	  		+ Création du dossier templates, header.php et footer.php
	  		+ Copier-coller les fichiers html dans le dossier php et les renommer en .php
	  			- couper-coller les parties communes dans le fichier header.php et footer.php
	  			- renommer les liens fichier.html de la barre de navigation dans le header.php en fichier.php
	  			
	  	Afficher le tarif pour l'age du Capitaine(43 ans), en fonction des critères de la page tarif du site. 
	  		+ Dans le fichier tarifs.php, après le <h2>Selon votre âge</h2> et après le TODO, afficher le tarif du Capitaine en PHP.
	  		  - variable : age du capitaine
	  		  - "  "  "  : tarif plein
	  		  - "  "  "  : tarif réduit
	  		  - "  "  "  : tarif enfant
	  		  - "  "  "  : prixPLace = tarif plein par défaut
	  		  - Conditionner le tarif en fonction de l'age
	  		  
	  	Séparation de la partie traitement de la partie affichage
	  		+ Créer un dossier "inc" à la racine du projet puis un fichier "prix_place.php"
	  		+ Couper-coller la partie traitement du tarif de tarifs.php dans le fichier "prix_place.php
	  		+ Remplacer les variables $ageCapitaine par $age
	  		
	  	
	  	Dans le dossier tarifs.php créez une variable $age et assignez lui $ageCapitaine
	  		+ Require du fichier de traitement du prix de la place
	  		  
	    		
	  Etape 2
	  -------
	  	Lister tous les âges (1 à 99).
	  		+ Dans le fichier tarifs.php créer une structure de tableau à l'aide de <table>
	  		+ A l'aide d'une boucle for afficher tous les âges dans le <tbody>
	  		+ Dans le 1er <td> faite un echo en syntaxe raccourci en php de $age
	  		
	  	Pour chaque âge, calculer le tarif.
	  		+ Dans le 2iè <td> faite un echo en syntaxe raccourci de $prixPlace
	  		+ PROBLEME tous les tarifs sont indentiques ... quand on exécute le code
	  			- Soluce : ne pas oublier dans la boucle for avant le <tr> d'inclure le fichier prix_place.php
	  			
	  	Faire un peu de CSS
	  	
	  	Générer le code HTML pour afficher le tarif correspondant à coté de l'age.
	  	
	  	
		
	
	
	
	
	
	

			
		
