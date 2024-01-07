<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Test de nombre parfait</title>
</head>

<body>

    <header>
        <h1>Exercice 7 : Test de nombre parfait</h1>
        <p>Entrez un nombre, le programme teste s'il est parfait.</p>
    </header>

    <section>
        <?php
        if (isset($_POST['nombre'])) {
            $nombre = (int) $_POST['nombre'];

            $sommeDiviseurs = 0;
            for ($i = 1; $i < $nombre; $i++) {
                if ($nombre % $i == 0) {
                    $sommeDiviseurs += $i;
                }
            }

            if ($sommeDiviseurs == $nombre) {
                echo "<p>Le nombre $nombre est parfait.</p>";
            } else {
                echo "<p>Le nombre $nombre n'est pas parfait.</p>";
            }
        }
        ?>

        <form method="post">
            <label for="nombre">Entrez un nombre :</label>
            <input type="number" name="nombre" required>
            <button type="submit">Tester</button>
        </form>
    </section>

</body>

</html>
