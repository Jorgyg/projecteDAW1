<?php
	/**
	* Aquest arxiu espera 3 tipus de peticions:
	* - Peticions sense cap paràmetre: retornarà la vista principal (MainView.php)
	* - Peticions per GET: accions per mostrar les vistes de formulari de nou alumne, editar alumne i esborrar alumne. També la petició d'esborrar un alumne.
	* - Peticions per POST: accions que venen d'un formulari: afegir un nou alumne o modificar un alumne.
	*
	* En funció de la petició, farà unes crides o unes altres al controlador (AlumneController.php)
	*/
	
	require("AlumneController.php");
	
	if (isset($_GET['action']))
	{

		if ($_GET['action'] == 'delete')
		{
			if (isset($_GET['id'])) {
				deleteBamba($_GET['id']);
			}
			loadMainView();
		}
		else if ($_GET['action'] == 'new')
		{	
			loadNewAlumneView();
		}
		else if ($_GET['action'] == 'edit')
		{
			if (isset($_GET['id'])) {
				loadEditBambaView($_GET['id']);
			}
		}
		else if ($_GET['action'] == 'mStock')
		{
			if (isset($_GET['id'])) {
				loadEditBambaView($_GET['id']);
			}
		}
		else if ($_GET['action'] == 'show')
		{
			if (isset($_GET['id']) && isset($_GET['talla']) && isset($_GET['cantitat'])) {
				editStock($_GET['id'], $_GET['talla'], $_GET['cantitat']);
			}
		}
		else if ($_GET['action'] == 'talla')
		{
			if (isset($_GET['bamba'])) {
				loadTalla($_GET['bamba']);
			}
		}
		else 
		{
			loadMainView();
		}
	}
	else if (isset($_POST['action']))
	{
		if ($_POST['action'] == 'add')
		{
			if (isset($_POST['nom']) && isset($_POST['preu'])) {
				addBamba($_POST['nom'], $_POST['preu'], $_POST['descripcio']);
			}
			loadMainView();
		}
		else if ($_POST['action'] == 'up')
		{
			if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['preu']) && isset($_POST['descripcio'])) {
				upBamba($_POST['id'], $_POST['nom'], $_POST['preu'], $_POST['descripcio'], $_FILES['img']);
			}
			loadMainView();
		}
		else if ($_POST['action'] == 'compte')
		{
			if (isset($_POST['usuari']) && isset($_POST['contrasenya']) && isset($_POST['contrasenya2'])) {

				if ($_POST['contrasenya'] == $_POST['contrasenya2']) {

				addAccount($_POST['usuari'], $_POST['contrasenya']);

				} 
			}
			
			loadMainView();
		}
		else
		{
			loadMainView();
		}
	}
	else 
	{
		loadMainView();
	}
?>