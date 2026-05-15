<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE PHP</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="accueil2.php">Exercices Pratiques</a></li>
        </ul>
    </nav> 
     <h1>Partie 2</h1>
    <h2>EXERCICE 1</h2>
   <h4>Tester si un nombre est à la fois un multiple de 3 et de 5.</h4>
   <P>
    <?php
     $nombre = 15; // Vous pouvez changer ce nombre pour tester d'autres valeurs
    
     if ($nombre % 3 == 0 && $nombre % 5 == 0) {
          echo "$nombre est un multiple de 3 et de 5.";
     } else {
          echo "$nombre n'est pas un multiple de 3 et de 5.";
     }
    ?>
    </P>
    <h2>EXERCICE 2</h2>
    <h4>Écrire une condition pour sélectionner une femme de 21 à 40 ans.</h4>
 <p>
    <?php
     $age = 25; 
     $genre = "femme"; 
    
     if ($genre == "femme" && $age >= 21 && $age <= 40) {
          echo "La personne est une femme âgée de 21 à 40 ans.";
     } else {
          echo "La personne ne correspond pas aux critères.";
     }
    ?>
    </p>

    <h2>EXERCICE 3</h2>
    <h4>Effectuer des tirages aléatoires jusqu'à obtenir : pair suivi de deux impairs.</h4>
<p>
    <?php
     $pairTrouve = false;
     $impairsTrouves = 0;

     while (!$pairTrouve || $impairsTrouves < 2) {
          $tirage = rand(1, 100); // Tirage aléatoire entre 1 et 100

          if ($tirage % 2 == 0) {
               $pairTrouve = true;
               echo "Tirage pair trouvé : $tirage<br>";
          } else {
               if ($pairTrouve) {
                    $impairsTrouves++;
                    echo "Tirage impair trouvé : $tirage<br>";
               }
          }
     }

     echo "Condition atteinte : un pair suivi de deux impairs.";
    ?>
</p>

   <h2>EXERCICE 4</h2>
   <h4>Choisir un nombre 3 chiffres et compter les essais pour le retrouver.</h4>
<p>
    <?php
     $nombreADeviner = rand(100, 999); // Génère un nombre aléatoire à 3 chiffres
     $essais = 0;
     $trouve = false;

     while (!$trouve) {
          $essais++;
          $tentative = rand(100, 999); // Simule une tentative de deviner le nombre

          if ($tentative == $nombreADeviner) {
               $trouve = true;
               echo "Nombre trouvé : $tentative en $essais essais.";
          }
     }
    ?>
</p>
//Exercice 4 : 
 //Choisir un nombre 3 chiffres et compter les essais pour le retrouver avec une boucle for.
<p>                                             
    <?php
     $nombreADeviner = rand(100, 999); // Génère un nombre aléatoire à 3 chiffres
     $essais = 0;
     $trouve = false;

     for ($i = 0; !$trouve; $i++) {
          $essais++;
          $tentative = rand(100, 999); // Simule une tentative de deviner le nombre

          if ($tentative == $nombreADeviner) {
               $trouve = true;
               echo "Nombre trouvé : $tentative en $essais essais.";
          }
     }
    ?>
</p>
//Exercice 5 
Créer un tableau avec indices 11-36 et valeurs A-Z. Afficher avec for et foreach.
<p>
    <?php
     $tableau = [];
     $lettre = 'A';

     for ($i = 11; $i <= 36; $i++) {
          $tableau[$i] = $lettre;
          $lettre++;
     }

     // Affichage avec for
     echo "Affichage avec for :<br>";
     for ($i = 11; $i <= 36; $i++) {
          echo "Indice: $i, Valeur: " . $tableau[$i] . "<br>";
     }

     // Affichage avec foreach
     echo "<br>Affichage avec foreach :<br>";
     foreach ($tableau as $indice => $valeur) {
          echo "Indice: $indice, Valeur: $valeur<br>";
     }
    ?>
</p>

//Exercice 6
//Trouver le premier multiple d'un nombre donné par tirage aléatoire.
<p>
    <?php
     $nombre = rand(1, 10); // Nombre donné aléatoire entre 1 et 10
     $multipleTrouve = false;
     $multiple = 0;

     while (!$multipleTrouve) {
          $multiple++;
          if ($multiple % $nombre == 0) {
               $multipleTrouve = true;
               echo "Le premier multiple de $nombre est : $multiple.";
          }
     }
    ?>      
</p>
//Exercice 6
Trouver le premier multiple d'un nombre donné par tirage aléatoire avec une boucle do while.
<p>
    <?php
     $nombre = rand(1, 10); // Nombre donné aléatoire entre 1 et 10
     $multiple = 0;

     do {
          $multiple++;
     } while ($multiple % $nombre != 0);

     echo "Le premier multiple de $nombre est : $multiple.";
    
    ?>
</p>

Exercice 7 
Calculer le PGCD de deux nombres avec gestion d'exception.
<p>
    <?php
     function pgcd($a, $b) {
          if ($b == 0) {
               return $a;
          }
          return pgcd($b, $a % $b);
     }

     try {
          $nombre1 = rand(1, 100);
          $nombre2 = rand(1, 100);

          if ($nombre1 <= 0 || $nombre2 <= 0) {
               throw new Exception("Les nombres doivent être positifs.");
          }

          $resultat = pgcd($nombre1, $nombre2);
          echo "Le PGCD de $nombre1 et $nombre2 est : $resultat.";
     } catch (Exception $e) {
          echo "Erreur : " . $e->getMessage();
     }
    ?>
</p>








</body>
</html>