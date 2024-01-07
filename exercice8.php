<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Tableau Multidimensionnel Associatif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
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
        <h1>Exercice 8 : Tableau Multidimensionnel Associatif</h1>
        <p>Voici un tableau associatif multidimensionnel contenant des informations sur les personnes.</p>
    </header>

    <section>
        <?php
        $personnes = array(
            'John Doe' => array('Prénom' => 'John', 'Ville' => 'Paris', 'Âge' => 30),
            'Jane Smith' => array('Prénom' => 'Jane', 'Ville' => 'Lyon', 'Âge' => 25),
            'Bob Johnson' => array('Prénom' => 'Bob', 'Ville' => 'Marseille', 'Âge' => 35),
        );

        echo '<table>';
        echo '<tr><th>Nom</th><th>Prénom</th><th>Ville de résidence</th><th>Âge</th></tr>';
        foreach ($personnes as $nom => $info) {
            echo '<tr>';
            echo '<td>' . $nom . '</td>';
            echo '<td>' . $info['Prénom'] . '</td>';
            echo '<td>' . $info['Ville'] . '</td>';
            echo '<td>' . $info['Âge'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </section>

</body>

</html>
