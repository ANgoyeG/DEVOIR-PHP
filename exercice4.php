<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Calcul du PPCM</title>
</head>

<body>

    <header>
        <h1>Exercice 4 : Calcul du PPCM</h1>
        <p>Entrez deux entiers, le programme calculera le Plus Petit Commun Multiple (PPCM) de ces deux nombres.</p>
    </header>

    <section>
        <?php
        if (isset($_POST['entier1']) && isset($_POST['entier2'])) {
            $entier1 = (int) $_POST['entier1'];
            $entier2 = (int) $_POST['entier2'];

            function pgcd($a, $b)
            {
                while ($b != 0) {
                    $temp = $b;
                    $b = $a % $b;
                    $a = $temp;
                }
                return $a;
            }

            $ppcm = ($entier1 * $entier2) / pgcd($entier1, $entier2);

            echo "<p>Entier 1 : $entier1</p>";
            echo "<p>Entier 2 : $entier2</p>";
            echo "<p>Le PPCM de $entier1 et $entier2 est : $ppcm</p>";
        }
        ?>

        <form method="post">
            <label for="entier1">Entier 1 :</label>
            <input type="number" name="entier1" required>

            <label for="entier2">Entier 2 :</label>
            <input type="number" name="entier2" required>

            <button type="submit">Calculer PPCM</button>
        </form>
    </section>

</body>

</html>
