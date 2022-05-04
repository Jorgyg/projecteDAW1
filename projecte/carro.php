<?php 
session_start();

if (isset($_GET["accio"])) {
	unset($_SESSION["roba"], $_SESSION["arr"], $_SESSION["tall"]);
	
	if ($_GET["compra"] == "realitzada") {
		header("Location:index.php?compra=realitzada");
	} else {
		header("Location:index.php");
	}
}

if (!isset($_SESSION["roba"])) {
	$_SESSION["roba"] = 0;
}

$cantitat = $_GET["Cantitat"];
$_SESSION["roba"] = $_SESSION["roba"] + $_GET["Cantitat"];

	if (!isset($_SESSION["arr"])) {
		$_SESSION["arr"] = array();
	}

	if (!isset($_SESSION["tall"])) {
		$_SESSION["tall"] = array();
	}
	

	for ($i=$_SESSION["roba"] - $cantitat; $i < $_SESSION["roba"]; $i++) { 

		if (!isset($_SESSION["arr"][$i])) {
			$_SESSION["arr"][$i] = $_GET["bambas"];
		}
		
	}
	for ($i=$_SESSION["roba"] - $cantitat; $i < $_SESSION["roba"]; $i++) { 

		if (!isset($_SESSION["tall"][$i])) {
			$_SESSION["tall"][$i] = $_SESSION["talla"];
		}
		
	}
	header("Location:index.php");


	?>