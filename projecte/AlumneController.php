<?php
	require("BD/AlumneModel.php");
	
	function getBambesU($b)
	{
		return bBambes($b);
	}

	function getBambes()
	{
		return bBambes();
	}
	function getAlumnes()
	{
		return modQuery();
	}
	



	
	function upAlumne($id, $nom, $cognom, $data_naixement, $feina)
	{
		return modUpdate($id, $nom, $cognom, $data_naixement, $feina);
	}
	
	function getAlumne($id)
	{
		return modQuery($id);
	}

	function createAcc($usuari, $contrasenya) {
		createAccount($usuari, $contrasenya);
	}


	function comprovarAcc($usuari, $contrasenya) {
		compAcc($usuari, $contrasenya);
	}

	function takeStock($id, $talla){

		return veureStock($id, $talla);
	}

	function comprar($id, $talla) {
		 
		 restarStock($id, $talla);
	}
	
	
	/**** FUNCIONS PER CARREGAR LES VISTES ***/

	function loadBambes($b){
		$result = getBambesU($b);

		if (isset($_GET["talla"])) {
		$talla = $_GET["talla"];
		}	
		require_once("main2.php");
	}
	function loadBambes2()
	{
		$result = getBambes();
		require_once("mostra.php");
	}
	

	function loadLogin(){
		require_once("login.php");
	}

	function loadTalla(){
		
	}

?>