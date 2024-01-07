<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 : Fonction - Majuscules et minuscules</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: wheat;
            color: #333;
            margin: 20px;
        }

        header {
            background-color: white;
            color: black;
            padding: 10px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color:green;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 15 : Fonction - Majuscules et minuscules</h1>
        <p>Transformation des chaînes de caractères :</p>
    </header>

    <?php
    function transformerTableau(&$tableau)
    {
        foreach ($tableau as &$chaine) {
            $chaine = ucfirst(strtolower($chaine));
        }
        unset($chaine); 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputValues = isset($_POST['inputValues']) ? $_POST['inputValues'] : '';

        $chaines = explode(',', $inputValues);

        transformerTableau($chaines);

        echo "<p>Résultat transformé : " . implode(", ", $chaines) . "</p>";
    }
    ?>

    <form method="post">
        <label for="inputValues">Entrez les valeurs séparées par des virgules :</label>
        <input type="text" id="inputValues" name="inputValues" required>
        <input type="submit" value="Transformer">
    </form>

</body>

</html>
