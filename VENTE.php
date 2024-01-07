<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence immobilière - VENTE</title>

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
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            background-color: #333;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <header>
        <h1>Agence immobilière - VENTE</h1>
        <p>Remplissez le formulaire pour vendre un bien immobilier.</p>
    </header>

    <form action="traitement_vendre.php" method="post">
        <label for="nom_bien">Nom du bien :</label>
        <input type="text" id="nom_bien" name="nom_bien" required>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>

        <input type="submit" value="Vendre">
    </form>

</body>

</html>
