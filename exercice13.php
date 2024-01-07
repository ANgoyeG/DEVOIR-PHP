<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 - Calcul TVA</title>

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
        <h1>Exercice 13 : Calcul TVA</h1>
        <p>Remplissez le formulaire ci-dessous pour calculer le montant de la TVA et le prix TTC.</p>
    </header>

    <form id="tvaForm">
        <label for="prixHT">Prix HT :</label>
        <input type="number" id="prixHT" name="prixHT" step="0.01" required><br>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="number" id="tauxTVA" name="tauxTVA" step="0.01" required><br>

        <label for="montantTVA">Montant TVA :</label>
        <input type="text" id="montantTVA" readonly><br>

        <label for="prixTTC">Prix TTC :</label>
        <input type="text" id="prixTTC" readonly><br>

        <input type="submit" value="Calculer">
    </form>

    <script>
        document.getElementById('tvaForm').addEventListener('submit', function (event) {
            event.preventDefault(); 

            const prixHT = parseFloat(document.getElementById('prixHT').value);
            const tauxTVA = parseFloat(document.getElementById('tauxTVA').value);

            if (isNaN(prixHT) || isNaN(tauxTVA)) {
                alert('Veuillez saisir des valeurs numériques valides.');
                return;
            }

            const montantTVA = (prixHT * tauxTVA) / 100;
            const prixTTC = prixHT + montantTVA;

            document.getElementById('montantTVA').value = montantTVA.toFixed(2);
            document.getElementById('prixTTC').value = prixTTC.toFixed(2);
        });
    </script>

</body>

</html>
