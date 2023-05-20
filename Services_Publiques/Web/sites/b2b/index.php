<!-- Page html de l'intranet -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>WoodyToys</title>
</head>
<body>
<div>
    <h3>Articles en ventes</h3>
<?php
$servername = "db";
$username = "admin";
$password = "root";
$dbname = "woodytoys_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SQL query
$sql = "SELECT * FROM articles";
$result = $conn->query($sql);

// Print results
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nom</th><th>Prix</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prix"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 résultats";
}


$conn->close();
?>
</div>


</body>
</html>