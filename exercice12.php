<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 - Formulaire Adresse Client</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 12 : Formulaire Adresse Client</h1>
        <p>Remplissez le formulaire ci-dessous avec l'adresse du client.</p>
    </header>

    <form action="exercice12_traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="code_postal">Code postal :</label>
            <input type="number" id="code_postal" name="code_postal" required pattern="\d{5}">

            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

</body>

</html>
