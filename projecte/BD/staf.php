<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		<h1 align="center">STAFF</h1>
	</div>
	<table>
		
		<tr>
			<th>ID</th>
			<th>NOM</th>
			<th>COGNOM</th>
			<th>DATA DE NAIXAMENT</th>
			<th>FEINA</th>
			<th class="align-middle text-right"><a class="btn btn-primary" role="button" href="?action=new"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
		</tr>
		<?php
		require("conectarBD.php");
						
							foreach($result as $row) {
								echo "<tr>";
								echo "<td class='align-middle'>" . $row['id'] . "</td>";
								echo "<td class='align-middle'>" . $row['Nom'] . "</td>";
								echo "<td class='align-middle'>" . $row['Cognoms'] . "</td>";
								echo "<td class='align-middle'>" . date('d/m/Y', strtotime($row['Data_naixement'])) . "</td>";
								echo "<td class='align-middle'>" . $row['Curs'] . "</td>";
								echo "<td class='align-middle'>";
		?>


	</table>
</body>
</html>

<?php 
 ?>