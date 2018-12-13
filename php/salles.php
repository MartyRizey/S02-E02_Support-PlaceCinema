<!-- Ce fichier correspond à la page web 'En Salle' affichée dans la fenêtre du navigateur --> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

 <?php include '../templates/header.php'; ?>

  <main>
    <p style="color: olive; font-weight: bold;">je suis la page salles.php</p>
    <h2 style="text-align: center;"> Liste des films et horaires</h2>

    <section>
      <?php

        // syntaxe récente pour concevoir un tableau en PHP 
        $movies = [
            'film 1',
            'film 2',
            'film 3',
            'film 4',
            'film 5'
        ];
        
        // le même tableau avec une syntaxe plus ancienne
        $movies = array(
            'film 1',
            'film 2',
            'film 3',
            'film 4',
            'film 5',
            // si j'ajoute un 6iè film, avec la fonction count($movies), il sera ajouté automatiquement
            // à la liste à afficher dans ma boucle, car count() permet de compter le nombre d'élément 
            // dans un tableau.
            'FILM 6'
        );

        // permet de visualiser le contenu de la variable $movies dans la page du navigateur.
          // echo '</br>';
          // echo '<pre>';
          // var_dump($movies);
          // echo '</pre>';
          // echo '</br>';

        // un echo avec des guillemets double renverra comme résultat "Array".
        // c'est à dire qu'il interprétera ce qu'il y a entre les guillemets.
          // echo "<h3>$movies</h3></br>";

        // un echo avec des guillemets simple m'affichera la chaîne de caractères $movies.
          // echo '<h3>$movies</h3></br>';

        // et si l'on fait comme ci-dessous, on aura une erreur de type Notice selon la configuration de php
        // ou un retour sous la forme d'une chaîne de caractères "Array"
          // echo $movies . '</br>';
       
        // ici je demande que l'on m'afffiche le film à l'indexe 0, contenu dans le tableau $movies
          // echo $movies[0] . '<br>';

        for($movieIndex = 0; $movieIndex < count($movies); $movieIndex++) {

          // $movieIndex me renvoie le numéro d'indexe puisque j'initialise la variable à 0, et
          // qu'ensuite je lui dis d'incrémenter de 1 à chaque itération, qui est égal à 
          // la longeur du tableau. C'est à dire au nombre d'index dans le tableau, donc 5.
            // echo $movieIndex . '</br>';

          // donc en appelant le tableau avec la variable $movieIdex entre crochets. C'est comme
          // ci je faisais $movies[0], puis $movies[1], $movies[2] ... jusqu'à 5.  A chaque
          // fois il me renverrait la valeur de l'index, donc 'film 1', film 2, 'film 3' ....
          echo $movies[$movieIndex] . '</br>';

        }

      ?>      
        
    </section>

  </main>

  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>




         