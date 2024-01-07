<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Test de multiples</title>
</head>

<body>

    <h1>Exercice 2 : Test de multiples</h1>

    <form method="post" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Tester</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];

        if (is_numeric($nombre)) {
            if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                echo "$nombre est un multiple de 3 et de 5.";
            } else {
                echo "$nombre n'est pas un multiple de 3 et de 5.";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
    ?>

</body>

</html>
