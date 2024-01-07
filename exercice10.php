<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - Boucle foreach</title>
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
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
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
        <h1>Exercice 10 : Boucle foreach</h1>
        <p>Utilisation de la boucle foreach pour lire les tableaux associatifs multidimensionnels des exercices 8 et 9.</p>
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
        ?>

        <h2>Exercice 8 - Tableau associatif multidimensionnel</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville</th>
                <th>Âge</th>
            </tr>
            <?php
            foreach ($personnesExercice8 as $nom => $infos) {
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>{$infos['prénom']}</td>";
                echo "<td>{$infos['ville']}</td>";
                echo "<td>{$infos['âge']}</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Exercice 9 - Tableau associatif multidimensionnel avec valeurs associées</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville</th>
                <th>Âge</th>
            </tr>
            <?php
            foreach ($personnesExercice9 as $nom => $infos) {
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>{$infos['prénom']}</td>";
                echo "<td>{$infos['ville']}</td>";
                echo "<td>{$infos['âge']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>

</body>

</html>
