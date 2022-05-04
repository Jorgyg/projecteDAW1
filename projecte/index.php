<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/f13f12ccea/UntitledProject/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
</body>
</html>
<?php 
session_start();
require("AlumneController.php");
$roba = 0;
$valor = 0;
$con = 0;

$result = getBambes();
foreach ($result as $key ) {

	if (isset($_GET[$con])) {
		$valor = $con + 1;
	loadBambes($key['bamba_id']);
	} 
	$con++;
} if (isset($_GET["talla"])) {
	
	if (!isset($_GET["comp"])) {
	$bamba = $_GET["bambas"];
	loadBambes($bamba);
	} 

	
} else if(isset($_GET["comp"])) {
		$cantitat = $_GET["Cantitat"];
		$bamba = $_GET["bambas"];
		$talla = $_GET["talla"];
		header("Location: carro.php?Cantitat=$cantitat&bambas=$bamba&talla=$talla");
} elseif (isset($_GET["action"])) {

	if ($_GET["action"] == "log") {
		header("Location:login.php");
	}

	if ($_GET["action"] == "Login") {

		comprovarAcc($_GET["nom"], $_GET["cont"]);

	}

	if ($_GET["action"] == "destroy") {
		
		header("Location:pgn3.php");
	}

	if ($_GET["action"] == "comprar") {

		for ($i= 0; $i < $_SESSION["roba"]; $i++) { 	
			comprar($_SESSION["arr"][$i], $_SESSION["tall"][$i]);
		}
		header("Location:carro.php?accio=borrar&compra=realitzada");
	}

} elseif(isset($_GET["conta"])) {

		if($_SESSION["feina"] == "Admin") {
			header("Location: BD/index.php");
		} elseif ($_SESSION["feina"] == "Edit"){
			header("Location: bambes/index.php");
		}
} else if (isset($_GET["compra"])){

	
} else if($valor == 0) {
	loadBambes2();
}





?>