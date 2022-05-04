<?php
	// Variable global perquè totes les funcions tinguin accés a aquest objecte.
	// S'instancia en modConnect() i per cridar-lo es farà amb $GLOBALS['conn']
	$conn;
	$id;
	/**
	* Funció bàsica per connectar-nos a la base de dades.
	* Inicialització de l'objecte global $conn.
	* Qualsevol variació dels paràmetres d'accés a la BD es canvia aquí.
	*
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modConnect()
	{
		$servername = "hl938.dinaserver.com";
		$username = "insbc_gras";
		$password = "gras1234";
		$dbname = "insbc_jordigras";

		try {
			$GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
			// set the PDO error mode to exception
			$GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return ["Connection" => "Success"];
		}
		catch(PDOException $e) {
			return ["Connection failed" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que retorna l'usuari o usuaris de la BD
	*
	* @param (Integer) $id - opcional
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modQuery($id = null)
	{
		modConnect();
		
		try {
			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM staff WHERE id=" . $id); 
			}
			else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM staff ORDER BY id ASC"); 
			}
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	function bBambes($id = null)
	{
		modConnect();
		try {

			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM bambas WHERE bamba_id = $id"); 
			} else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM bambas"); 
			}

			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}

	function modId() {

		modConnect();
	
		$ida = $GLOBALS['conn']->prepare("SELECT id FROM staff WHERE Nom = " . $nom);
			$ida->execute();
			$id = $ida->fetchAll(PDO::FETCH_ASSOC);
			return $id;

	}
	
	/**
	* Funció que afegeix un usuari a la BD
	*
	* @param (String) $nom
	* @param (String) $cognom
	* @param (Date) $data_naixement
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modAdd($nom, $cognom, $data_naixement, $feina)
	{
		modConnect();
		
		try {
			$sql = "INSERT INTO staff (Nom, Cognom, Data_naixement, Feina) VALUES ('" . $nom . "', '" . $cognom . "', '" . $data_naixement . "', '" . $feina . "')";
			;
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
	
	/**
	* Funció que modifica l'usuari a la BD
	*
	* @param (Integer) $id
	* @param (String) $nom
	* @param (String) $cognom
	* @param (Date) $data_naixement
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modUpdate($id, $nom, $cognom, $data_naixement, $feina)
	{
		modConnect();
		
		try {
			$sql = "UPDATE staff SET Nom='" . $nom . "', Cognom='" . $cognom . "', Data_naixement='" . $data_naixement . "' . Curs . '" . $feina . "' WHERE id='" . $id . "'";
			// use exec() because no results are returned
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
	
	/**
	* Funció que elimina l'usuari a la BD
	*
	* @param (Integer) $id
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modDelete($id)
	{
		modConnect();
		
		try {
			$sql = "DELETE FROM staff  WHERE id=".$id.";DELETE FROM account WHERE id=".$id;
			// use exec() because no results are returned
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

	function accountAdd($usuari, $contrasenya)
	{
		modConnect();
		

		try {

			$sql = "INSERT INTO account (id, Usuari, Contrasenya) VALUES ((SELECT MAX(id) FROM staff),' " . $usuari . "', '" . $contrasenya . "')";

		
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


	function compAcc($usuari, $contrasenya)
	{
			modConnect();
			$stm = $GLOBALS['conn']->prepare("SELECT id FROM account WHERE Usuari = '$usuari' AND Contrasenya = '$contrasenya'");
			$stm->execute();
			$resultat = $stm->fetchAll(PDO::FETCH_ASSOC);	

			$cont = 0;

		foreach ($resultat as $key) {
			 $cont++;
		}
		if ($cont == 1) {
			
			$_SESSION["usuari"] = $usuari;	
			$_SESSION["contrasenya"] = $contrasenya;
			entrarAc($usuari, $contrasenya);
		} else {
			header("Location: login.php");
		}
	
	}

	function entrarAc($usuari, $contrasenya){
		$stm = $GLOBALS['conn']->prepare("SELECT feina FROM staff s JOIN account c ON (s.id = c.id) WHERE Usuari = '$usuari' AND Contrasenya = '$contrasenya'");
			$stm->execute();
			$resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

			foreach ($resultat as $key ) {

				if ($key['feina'] == 'Admin') {
					$_SESSION["feina"] = 'Admin';

					header("Location: index.php?conta=admin");
				} elseif ($key['feina'] == 'Edit'){
					$_SESSION["feina"] = 'Edit';
					header("Location: index.php?conta=editor");
				} else {
					header("Location: login.php");
				}
		}
	}

	function veureStock($id, $talla){
		$stm = $GLOBALS['conn']->prepare("SELECT cantitat FROM talles WHERE bamba_id = $id AND talla = $talla");
			$stm->execute();
			$resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

			foreach ($resultat as $key ) {

				$_SESSION["stock"] = $key["cantitat"];
			}
	}

	function restarStock($id, $talla){
		
		modConnect();
		try {	

			$sql = "UPDATE talles 
					SET cantitat = cantitat - 1
					WHERE bamba_id = $id AND talla = $talla";

		
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


?>

