<?php
  @$password=$_POST["password"];
    include("connexion.php");
    include("generate_password.php");
    include("export.php");
    $req=$pdo->prepare("insert into mot_de_passe (password) values(?)");
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
    
      echo "Votre mot de passe aléatoire est : " . $password;
    }
  
  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Générateur de mots de passe aléatoires</title>
</head>
<body>
    <!--CheckBox-->

    <h1>Générateur de mots de passe aléatoires</h1>
	<form method="post" action="generate_password.php">
		<label for="length">Longueur du mot de passe :</label>
		<input type="number" name="length" id="length" value="8" min="4" max="20">
		<label for="level">Niveau de puissance :</label>
		<select name="level" id="level">
			<option value="1">Faible</option>
			<option value="2">Moyen</option>
			<option value="3">Fort</option>
		</select>
		<input type="submit" value="Générer">
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

	echo "Votre mot de passe aléatoire est : " . $password;
}
?>
	</form>



</body>
</html>