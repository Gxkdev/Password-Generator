<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$length = $_POST["length"];
	$level = $_POST["level"];

	$lowercase = "abcdefghijklmnopqrstuvwxyz";
	$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$numbers = "0123456789";
	$symbols = "!@#$%^&*()_+-={}[]|\\:;\"'<>,.?/";

	if ($level == 1) {
		$chars = $lowercase;
	} else if ($level == 2) {
		$chars = $lowercase . $uppercase . $numbers;
	} else {
		$chars = $lowercase . $uppercase . $numbers . $symbols;
	}

	$password = "";
	for ($i = 0; $i < $length; $i++) {
		$password .= substr($chars, rand(0, strlen($chars) - 1), 1);
	}

	// Connexion à la base de données
	$servername = "localhost";
	$username = "root";
	$password_db = "";
	$dbname = "projet4";
	$conn = mysqli_connect($servername, $username, $password_db, $dbname);

	// Vérification de la connexion
	if (!$conn) {
	    die("Connexion échouée : " . mysqli_connect_error());
	}

	// Insertion du mot de passe dans la base de données
	$sql = "INSERT INTO passwords (password) VALUES ('" . $password . "')";

	if (mysqli_query($conn, $sql)) {
	    echo "Votre mot de passe aléatoire est : " . $password;
	} else {
	    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

