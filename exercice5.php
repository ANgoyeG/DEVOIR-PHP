<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Calculs sur un cercle</title>
</head>

<body>

    <header>
        <h1>Exercice 5 : Calculs sur un cercle</h1>
        <p>Entrez le rayon d'un cercle, le programme calculera le diamètre, le périmètre et la surface de ce cercle.</p>
    </header>

    <section>
        <?php
        if (isset($_POST['rayon'])) {
            $rayon = (float) $_POST['rayon'];

            $diametre = 2 * $rayon;
            $perimetre = 2 * M_PI * $rayon;
            $surface = M_PI * pow($rayon, 2);

            echo "<p>Rayon du cercle : $rayon</p>";
            echo "<p>Diamètre du cercle : $diametre</p>";
            echo "<p>Périmètre du cercle : $perimetre</p>";
            echo "<p>Surface du cercle : $surface</p>";
        }
        ?>

        <form method="post">
            <label for="rayon">Rayon du cercle :</label>
            <input type="number" step="any" name="rayon" required>
            <button type="submit">Calculer</button>
        </form>
    </section>

</body>

</html>
