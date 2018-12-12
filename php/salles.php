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
            'film 5'
        );

        // permet de visualiser le contenu de la variable $movies dans la page du navigateur.
        echo '<pre>';
        var_dump($movies);
        echo '</pre>';

        ?>      
        <p>TODO</p>
    </section>

  </main>

  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>