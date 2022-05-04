<?php
	require("AlumneModel.php");
	function getAlumness()
	{
		return modQuery();
	}

	function addAlumne($nom, $cognom, $data_naixement, $feina)
	{
		return modAdd($nom, $cognom, $data_naixement, $feina);
	}

	function addAccount($usuari, $contrasenya)
	{
		return accountAdd($usuari, $contrasenya);
	}

	function loadMainView()
	{
		$result = getAlumness();
		require_once("MainView.php");
	}

	function loadNewAlumneView()
	{

		require_once("NewView.php");
	}
	
	function loadEditAlumneView()
	{
		$result = getAlumness();
		require_once("EditView.php");
	}
	
	function loadShowAlumneView()
	{
		$result = getAlumness();
		require_once("ShowView.php");
	}

	function loadNewAccount()
	{	
		require_once("NewAccount.php");
	}
	function deleteAlumne($id)
	{	
		modDelete($id);
	}
?>