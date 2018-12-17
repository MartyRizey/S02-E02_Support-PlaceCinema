<!-- Ce fichier correspond à la page web 'Tarifs' affichée dans la fenêtre du navigateur --> 

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
        $ageCapitaine = 35;

        // J'assigne à ma variable $age la valeur de $ageCapitaine
        $age = $ageCapitaine;

        // en incluant le code du fichier qui conditionne le tarif par rapport à l'age
        // je peux tester la valeur de la variable $age qui contient l'age du capitaine,
        // puisque j'accède à la variable grâce à l'include de calcul_montant.php qui me 
        // renverra le tarif correspondant.  
        
        include '../inc/calcul_montant.php';

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
            <th>Tarif abonnement 5 places</th>
          </tr>
        </thead>
        <tbody>

        <!-- syntaxe alternative PHP -> http://php.net/manual/fr/control-structures.alternative-syntax.php -->

        <?php for($age = 1; $age <= 99; $age++):  ?>

          <?php // calcul du montant d'un seul ticket ?>
          <?php require '../inc/calcul_montant.php'; ?>
          <?php // calcul de l'abonnement de 5 tickets ?>
          <?php require '../inc/calcul_abonement.php'; ?>

          <tr>  
            <!-- dans le <td> on affiche en PHP l'age via la variable $age qui en fait 
                 compte le nombre d'itération de la boucle for </td> -->      
            <td><?= $age ?> ans</td>
            <td><?= $montant ?> €</td>
            <td><?= $montantAbonnement ?> €</td>
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
