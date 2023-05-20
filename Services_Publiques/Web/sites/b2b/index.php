<!-- formulaire.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="traitement_formulaire.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Envoyer">
    </form>
    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
        </tr>
        
        <?php
        $servername = '172.16.0.9';
        $username = "admin";
        $password = "root";
        $dbname = "woodytoys_db";
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion à la base de données
        if ($conn->connect_error) {
            die("Échec de la connexion à la base de données : " . $conn->connect_error);
        }
        
        // Récupérer les utilisateurs depuis la base de données
        $sql = "SELECT * FROM utilisateurs";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Parcourir les résultats de la requête et afficher les utilisateurs
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Aucun utilisateur inscrit.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<!-- traitement_formulaire.php -->