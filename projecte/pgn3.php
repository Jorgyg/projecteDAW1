<?php
	session_start();

	session_unset();
	session_destroy();
	
	if (!isset($_SESSION['usuari'])) {
		header("Location:./index.php");
	}

?>