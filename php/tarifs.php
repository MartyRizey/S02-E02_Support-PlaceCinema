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

  <?php include '../templates/header.php'; ?>
  
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

        // J'initialise par défaut mon montant au tarif plein
        $montant = $tarifPlein;

        // http://php.net/manual/fr/language.operators.logical.php
        // SI l'âge est infèrieur à 14 il a un tarif réduit
        if($ageCapitaine < 14){

          $montant = $tarifEnfant;
        
        // Si l'âge du capitaine est supèrieur à 60 ou si l'âge du capitaine est infèrieur à 16
        // alors il a un tarif réduit
        } elseif($ageCapitaine > 60 || $ageCapitaine < 16) {

          $montant = $tarifReduit;

        }
        
      ?>

      <p>Tarif du Capitaine : <?php echo $montant . " €uro"; ?></p>
      <!-- 
        syntaxe raccourci : <p>Tarif du Capitaine : <?= $montant; ?> €uro</p>
      -->

      <!-- Tableau qui affiche l'age et le tarif de la place -->
      <table>
        <thead>
          <tr>
            <th>Age</th>
            <th>Tarif place</th>
          </tr>
        </thead>
        <tbody>

        <!-- syntaxe alternative PHP -> http://php.net/manual/fr/control-structures.alternative-syntax.php -->

        <?php for($age = 1; $age <= 99; $age++):  ?>

          <tr>  
            <!-- dans le <td> on affiche en PHP l'age via la variable $age qui en fait 
                 compte le nombre d'itération de la boucle for </td> -->      
            <td><?= $age ?> ans</td>
            <td> €</td>
          </tr>

        <?php endfor; ?>          
          
        </tbody>
      </table>
      <!-- fin du tableau -->

    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
