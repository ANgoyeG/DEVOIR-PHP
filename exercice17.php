<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17 : Fonction - Lecture de tableaux multidimensionnels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 17 : Fonction - Lecture de tableaux multidimensionnels</h1>
        <p>Affichage d'un tableau multidimensionnel associatif :</p>
    </header>

    <?php
    function afficherTableauMultidimensionnel($tableau)
    {
        echo '<table>';
        echo '<tr>';
        
        foreach ($tableau as $cle => $valeurs) {
            echo '<th>' . htmlspecialchars($cle) . '</th>';
        }
        
        echo '</tr>';

        foreach ($tableau as $valeurs) {
            echo '<tr>';
            foreach ($valeurs as $valeur) {
                echo '<td>' . htmlspecialchars($valeur) . '</td>';
            }
            echo '</tr>';
        }
        
        echo '</table>';
    }

    $tableauAssociatif = array(
        'Personne 1' => array('Prénom' => 'John', 'Ville' => 'Paris', 'Âge' => 25),
        'Personne 2' => array('Prénom' => 'Jane', 'Ville' => 'Lyon', 'Âge' => 30),
        'Personne 3' => array('Prénom' => 'Bob', 'Ville' => 'Marseille', 'Âge' => 22)
    );

    afficherTableauMultidimensionnel($tableauAssociatif);
    ?>

</body>

</html>
