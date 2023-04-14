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
    while($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["nom"] . " - Prix: " . $row["prix"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>


</body>
</html>