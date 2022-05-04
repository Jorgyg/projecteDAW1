<?php
	require("AlumneModel.php");
	

	function getBambes()
	{
		return modQuery();
	}
	function getBambes2($id)
	{
		return modQuery2($id);
	}
	function addBamba($nom, $preu, $descripcio)
	{
		return modAdd($nom, $preu, $descripcio);
	}	

	
	function upBamba($id, $nom, $preu, $descripcio)
	{
		return modUpdate($id, $nom, $preu, $descripcio);
	}
	
	function getBamba($id)
	{
		return modQuery($id);
	}
	
	function deleteBamba($id)
	{
		
		modDelete($id);

	}

	
	
	/**** FUNCIONS PER CARREGAR LES VISTES ***/

	
	function loadMainView()
	{
		$result = getBambes();
		require_once("MainView.php");
	}
	
	function loadNewAlumneView()
	{

		require_once("NewView.php");
	}
	
	function loadEditBambaView($id)
	{
		$result = getBamba($id);
		require_once("EditView.php");
	}
	
	function loadShowAlumneView()
	{
		$result = getBambes();
		require_once("ShowView.php");
	}

	function loadTalla($id)
	{
		$result = getBambes2($id);

		require_once("ShowTalla.php");
	}

	function loadNewAccount()
	{	
		require_once("NewAccount.php");
	}


?>