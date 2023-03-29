<?php
// Connexion à la base de données
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "projet4";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Exécute une requête SQL pour extraire les données
$sql = "SELECT * FROM passwords";
$result = $conn->query($sql);

// Boucle à travers les résultats et stocke-les dans une variable
if ($result->num_rows > 0) {
  $data = "";
  while($row = $result->fetch_assoc()) {
    $data .= implode(",", $row) . "\n";
  }

  // Écrit les données dans un fichier texte
  $filename = "export_" . date("Y-m-d_H-i-s") . ".txt";
  $file = fopen($filename, "w") or die("Impossible de créer le fichier !");
  fwrite($file, $data);
  fclose($file);

  echo "Exportation réussie.";
} else {
  echo "Aucun résultat trouvé.";
}

$conn->close();
?>