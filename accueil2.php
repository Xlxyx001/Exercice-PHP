<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITES PRATIQUES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      
    <nav>
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="accueil2.php">Exercices Pratiques</a></li>
        </ul>
    </nav> 
</body>
</html>
<h1>ACTIVITÉS PRATIQUES</h1>
<h4>Activité 1 : Calculatrice</h4>
Requis : Créer un script qui effectue opérations mathématiques et comparaison.
<p>
    <?php
     $a = 10;
     $b = 5;

     // Opérations mathématiques
     echo "Addition: " . ($a + $b) . "<br>";
     echo "Soustraction: " . ($a - $b) . "<br>";
     echo "Multiplication: " . ($a * $b) . "<br>";
     echo "Division: " . ($a / $b) . "<br>";

     // Comparaison
     if ($a > $b) {
          echo "$a est plus grand que $b.";
     } elseif ($a < $b) {
          echo "$a est plus petit que $b.";
     } else {
          echo "$a et $b sont égaux.";
     }
    ?>
</p>


<h1>Activité 2 : Générateur de Table de Multiplication</h1>
<h4>Requis : Créer un script qui affiche une table de multiplication dans un tableau HTML.</h4>
<p>
    <?php
     $nombre = 5; // Vous pouvez changer ce nombre pour générer une table différente

     echo "<table border='1'>";
     echo "<tr><th>Multiplicateur</th><th>Résultat</th></tr>";

     for ($i = 1; $i <= 10; $i++) {
          echo "<tr><td>$i</td><td>" . ($nombre * $i) . "</td></tr>";
     }

     echo "</table>";
    ?>
</p>
