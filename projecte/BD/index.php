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
				deleteAlumne($_GET['id']);
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
				loadEditAlumneView($_GET['id']);
			}
		}
		else if ($_GET['action'] == 'show')
		{
			if (isset($_GET['id'])) {
				loadShowAlumneView($_GET['id']);
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
			if (isset($_POST['nom']) && isset($_POST['cognom']) && isset($_POST['data_naixement'])  && isset($_POST['feina'])) {

				addAlumne($_POST['nom'], $_POST['cognom'], $_POST['data_naixement'], $_POST['feina']);
			}
			loadNewAccount($_POST['nom'], $_POST['cognom'],);
		}
		else if ($_POST['action'] == 'up')
		{
			if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['cognom']) && isset($_POST['data_naixement']) && isset($_POST['feina'])) {
				upAlumne($_POST['id'], $_POST['nom'], $_POST['cognom'], $_POST['data_naixement'], $_POST['feina']);
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