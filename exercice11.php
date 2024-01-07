<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 - Boucle while</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border: 1px solid #ddd;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #0066cc;
            color: white;
        }

        h2 {
            color: #0066cc;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 11 : Boucle while</h1>
        <p>Utilisation d'une boucle while pour lire les tableaux associatifs multidimensionnels des exercices 8 et 9.</p>
    </header>

    <section>
        <?php
        $personnesExercice8 = array(
            'Alice' => array('prénom' => 'Alice', 'ville' => 'Paris', 'âge' => 30),
            'Bob' => array('prénom' => 'Bob', 'ville' => 'Lyon', 'âge' => 25),
            'Charlie' => array('prénom' => 'Charlie', 'ville' => 'Marseille', 'âge' => 35)
        );

        $personnesExercice9 = array(
            'Alice' => array('prénom' => 'Alice', 'ville' => 'Paris', 'âge' => 30),
            'Bob' => array('prénom' => 'Bob', 'ville' => 'Lyon', 'âge' => 25),
            'Charlie' => array('prénom' => 'Charlie', 'ville' => 'Marseille', 'âge' => 35)
        );

        echo '<h2>Exercice 8 - Tableau associatif multidimensionnel</h2>';
        echo '<table>';
        echo '<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr>';
        $keysExercice8 = array_keys($personnesExercice8);
        $indexExercice8 = 0;
        while ($indexExercice8 < count($keysExercice8)) {
            $nom = $keysExercice8[$indexExercice8];
            $infos = $personnesExercice8[$nom];
            echo "<tr><td>$nom</td><td>{$infos['prénom']}</td><td>{$infos['ville']}</td><td>{$infos['âge']}</td></tr>";
            $indexExercice8++;
        }
        echo '</table>';

        echo '<h2>Exercice 9 - Tableau associatif multidimensionnel avec valeurs associées</h2>';
        echo '<table>';
        echo '<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr>';
        $keysExercice9 = array_keys($personnesExercice9);
        $indexExercice9 = 0;
        while ($indexExercice9 < count($keysExercice9)) {
            $nom = $keysExercice9[$indexExercice9];
            $infos = $personnesExercice9[$nom];
            echo "<tr><td>$nom</td><td>{$infos['prénom']}</td><td>{$infos['ville']}</td><td>{$infos['âge']}</td></tr>";
            $indexExercice9++;
        }
        echo '</table>';
        ?>
    </section>

</body>

</html>
