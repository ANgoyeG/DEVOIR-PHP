<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Affichage des diviseurs</title>
</head>

<body>

    <header>
        <h1>Exercice 6 : Affichage des diviseurs</h1>
        <p>Entrez un nombre, le programme affichera l'ensemble de ses diviseurs.</p>
    </header>

    <section>
        <?php
        if (isset($_POST['nombre'])) {
            $nombre = (int) $_POST['nombre'];

            echo "<p>Les diviseurs de $nombre sont :</p>";
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i == 0) {
                    echo "$i<br>";
                }
            }
        }
        ?>

        <form method="post">
            <label for="nombre">Entrez un nombre :</label>
            <input type="number" name="nombre" required>
            <button type="submit">Afficher les diviseurs</button>
        </form>
    </section>

</body>

</html>
