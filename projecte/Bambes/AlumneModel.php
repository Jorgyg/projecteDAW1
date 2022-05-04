<?php

	$conn;
	$id;

	function modConnect()
	{
		$servername = "hl938.dinaserver.com";
		$username = "insbc_gras";
		$password = "gras1234";
		$dbname = "insbc_jordigras";

		try {
			$GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
			
			$GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return ["Connection" => "Success"];
		}
		catch(PDOException $e) {
			return ["Connection failed" => $e->getMessage()];
		}
	}

	function modQuery($id = null)
	{
		modConnect();
		
		try {
			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM bambas WHERE bamba_id=" . $id); 
			}
			else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM bambas ORDER BY bamba_id ASC"); 
			}
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}

	function modQuery2($id)
	{
		modConnect();
		
		try {
			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM talles WHERE bamba_id=" . $id); 
			}

			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
		function modAdd($nom, $preu,  $descripcio)
	{
		modConnect();
		
		try {
			$sql = "INSERT INTO bambas (nom, preu, descripcio) VALUES ('" . $nom . "', '" . $preu . "', '" . $descripcio . "')";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari afegit correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha afegit"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	
	
	function modUpdate($id, $nom, $preu, $descripcio)
	{
		modConnect();
		
		try {
			$sql = "UPDATE bambas SET nom='" . $nom . "', preu='" . $preu . "', descripcio='" . $descripcio . "' WHERE bamba_id='" . $id . "'";

			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari modificat correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha modificat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	function modDelete($id)
	{
		modConnect();
		
		try {
			$sql = "DELETE FROM bambas WHERE bamba_id=".$id;
			if ($GLOBALS['conn']->exec($sql)){
				return ["Success" => "Usuari eliminat correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha eliminat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}


?>

