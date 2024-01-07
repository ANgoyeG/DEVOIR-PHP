<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Variables en PHP</title>
</head>

<body>

    <header>
        <h1>Exercice 1 : Variables en PHP</h1>
        <p>Parmi les variables suivantes, lesquelles ont un nom valide : mavar, $mavar, $var5, $mavar, $_5var, $_élément1, $hotel4* ?</p>
    </header>

    <section>
        <h2>Votre réponse</h2>
        <?php
        if (isset($_POST['reponse'])) {
            $reponseUtilisateur = htmlspecialchars($_POST['reponse']);

            $reponsesCorrectes = ["mavar", "\$mavar", "\$var5", "\$_5var"];

            if (in_array($reponseUtilisateur, $reponsesCorrectes)) {
                echo "<p>Bravo! Votre réponse est correcte.</p>";
            } else {
                echo "<p>Désolé, votre réponse est incorrecte.</p>";
            }
        }
        ?>

        <form method="post">
            <label for="reponse">Votre réponse :</label>
            <input type="text" name="reponse" required>
            <button type="submit">Vérifier</button>
        </form>
    </section>

</body>

</html>
