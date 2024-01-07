<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 : Fonction - Sinus d'un angle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
            margin: 10px;
        }

        header {
            background-color: wheat;
            color: black;
            padding: 10px;
            text-align: center;
        }

        p {
            margin-top: 5px;
        }

        form {
            margin-top: 20px;
            padding: 10px;
            background-color: wheat;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: wheat;
            color: black;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>
        <h1>Exercice 16 : Fonction - Sinus d'un angle</h1>
        <p>Calcul du sinus en différentes unités :</p>
    </header>

    <form id="angleForm">
        <label for="angle">Entrez l'angle :</label>
        <input type="number" id="angle" name="angle" step="0.01" required>

        <label for="unite">Choisissez l'unité :</label>
        <select id="unite" name="unite">
            <option value="radian">Radian</option>
            <option value="degre">Degré</option>
            <option value="grade">Grade</option>
        </select>

        <input type="submit" value="Calculer">
    </form>

    <table id="resultatTable" style="display: none;">
        <thead>
            <tr>
                <th>Unité</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        document.getElementById('angleForm').addEventListener('submit', function (event) {
            event.preventDefault(); 

            const angle = parseFloat(document.getElementById('angle').value);
            const unite = document.getElementById('unite').value;

            const resultat = sinusAngle(angle, unite);
            afficherResultat(unite, resultat);
        });

        function sinusAngle(angle, unite = "radian") {
            switch (unite.toLowerCase()) {
                case "degre":
                    angle = deg2rad(angle); 
                    break;
                case "grade":
                    angle = deg2rad(angle * 0.9); 
                    break;
            }

            return Math.sin(angle);
        }

        function afficherResultat(unite, resultat) {
            const tableau = document.getElementById('resultatTable');
            const tbody = tableau.getElementsByTagName('tbody')[0];
            
            const newRow = tbody.insertRow();
            
            const cellUnite = newRow.insertCell(0);
            const cellResultat = newRow.insertCell(1);

            cellUnite.textContent = unite;
            cellResultat.textContent = resultat.toFixed(4);

            tableau.style.display = 'table';
        }
    </script>

</body>

</html>
