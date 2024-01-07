<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 : Agence immobilière</title>

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

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px;
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
        <h1>Exercice 14 : Agence immobilière</h1>
        <p>Choisissez une action à effectuer :</p>
    </header>

    <form>
        <input type="submit" name="action" value="Vendre" formaction="VENTE.php">
        <input type="submit" name="action" value="Acheter" formaction="COURSE.php">
        <input type="submit" name="action" value="Louer" formaction="LOUER.php">
    </form>

</body>

</html>
