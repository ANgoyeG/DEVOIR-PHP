<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Tirages Aléatoires</title>
</head>

<body>

    <header>
        <h1>Exercice 3 : Tirages Aléatoires</h1>
        <p>Choisissez un nombre de trois chiffres. Le programme effectuera des tirages aléatoires et comptera le nombre de coups nécessaires pour obtenir le nombre initial.</p>
    </header>

    <section>
        <?php
        if (isset($_POST['nombreInitial'])) {
            $nombreInitial = (int) $_POST['nombreInitial'];

            $coups = 0;

            $nombreTire = 0;
            while ($nombreTire !== $nombreInitial) {
                $nombreTire = rand(100, 999);
                $coups++;
            }

            echo "<p>Nombre initial : $nombreInitial</p>";
            echo "<p>Nombre de coups nécessaires (boucle while) : $coups</p>";

            $coups = 0;

            for ($nombreTire = 0; $nombreTire !== $nombreInitial; $nombreTire = rand(100, 999)) {
                $coups++;
            }

            echo "<p>Nombre de coups nécessaires (boucle for) : $coups</p>";
        }
        ?>

        <form method="post">
            <label for="nombreInitial">Choisissez un nombre de trois chiffres :</label>
            <input type="number" name="nombreInitial" min="100" max="999" required>
            <button type="submit">Lancer</button>
        </form>
    </section>

</body>

</html>
