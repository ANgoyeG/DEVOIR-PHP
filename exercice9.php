<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 - Tableau associatif multidimensionnel avec valeurs associées</title>
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
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 9 : Tableau associatif multidimensionnel avec valeurs associées</h1>
        <p>Voici un tableau associatif multidimensionnel avec des informations sur des personnes et des valeurs associées.</p>
    </header>

    <section>
        <?php
        $personnes = array(
            'Alice' => array('prénom' => 'Alice', 'ville' => 'Paris', 'âge' => 30),
            'Bob' => array('prénom' => 'Bob', 'ville' => 'Lyon', 'âge' => 25),
            'Charlie' => array('prénom' => 'Charlie', 'ville' => 'Marseille', 'âge' => 35)
        );
        ?>

        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville de résidence</th>
                <th>Âge</th>
            </tr>
            <?php
            foreach ($personnes as $nom => $info) {
                echo '<tr>';
                echo '<td>' . $nom . '</td>';
                echo '<td>' . $info['prénom'] . '</td>';
                echo '<td>' . $info['ville'] . '</td>';
                echo '<td>' . $info['âge'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </section>

</body>

</html>
