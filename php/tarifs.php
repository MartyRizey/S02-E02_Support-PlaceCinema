<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Tarifs</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Cinéma Rodia</h1>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">En salle</a></li>
        <li><a href="tarifs.php">Tarifs</a></li>
        <li><a href="#">Nous contacter</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
          <ul>
            <li>Tarif Plein : 8,30 &euro;</li>
            <li>Tarif Réduit : 6,80 &euro;</li>
            <li>Tarif Enfant : 4,50 &euro;</li>
            <li>Supplément 3D : 1 &euro;</li>
          </ul>
          <ul>
            <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge</h2>

      <?php 

        // Etape 1 : Je créé une variable pour l'âge du capitaine
        $ageCapitaine = 68;
        // Je créé des variables pour mes tarifs
        $tarifPlein = 8.30;
        $tarifReduit = 6.80;
        $tarifEnfant = 4.50;

        $montant = 0;

        // http://php.net/manual/fr/language.operators.logical.php
        // SI l'âge est infèrieur à 14 il a un tarif réduit
        if($ageCapitaine < 14){

          $montant = $tarifEnfant;
        
        // Si l'âge du capitaine est supèrieur à 60 ou si l'âge du capitaine est infèrieur à 16
        // alors il a un tarif réduit
        } elseif($ageCapitaine > 60 || $ageCapitaine < 16) {

          $montant = $tarifReduit;
        
        // Si aucune des conditions n'est remplie, alors c'est tarif plein
        } else {

          $montant = $tarifPlein; 

        }
          
      ?>

      <p>Tarif du Capitaine : <?php echo $montant . " €uro"; ?></p>

      <!-- <p>Tarif du Capitaine : <?= $montant . " €uro"; ?></p> -->

      <!-- <?php
        echo '<pre>';
        var_dump($montant);
        echo '</pre>';
      ?> -->

    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
