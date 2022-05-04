<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
		<title>TALLES</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>TALLES</h1>
			</div>
			<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead class="thead-dark">
						<h2 align="center">ID BAMBA: <?php echo $id;?></h2>
						<tr>
							<th class="align-middle">TALLA</th>
							<th class="align-middle">STOCK</th>
			
							<th class="align-middle text-right"><a class="btn btn-primary" role="button" href="?action=new"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></a></th>
						</tr>
					</thead>
					<tbody>
						
						<?php

						
							foreach($result as $row) {
								echo "<form method='GET' action='./index.php?'><tr>";
								echo "<td class='align-middle'>" . $row['talla'] . "</td>";
								echo '<input name="action" type="hidden" value="mStock">
									  <input name="id" type="hidden" value="'.$id.'">
									  <input name="talla" type="hidden" value="'.$row['talla'].'">';
									  
								echo "<td class='align-middle'><input type='text' class='form-control' id='cantitat' name='cantitat' value='" .  $result[0]['cantitat'] . "''></td>";
								echo "<td class='align-middle'> <button type='submit' class='btn btn-primary'>Desar</button>";

								echo "</td>";
								echo "</tr>
										</form>";
							}
						?>
			
					</tbody>
				</table>
			</div>
			<div class="text-right">
						<a class="btn btn-primary" role="button" href="../index.php">Tornar a la pàgina principal</a>
			</div>
		</div>
			
	</body>
</html>
