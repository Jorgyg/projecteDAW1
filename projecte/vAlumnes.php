<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	<title></title>
</head>
<body>

	<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th class="align-middle">ID</th>
							<th class="align-middle">NOM</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							foreach ($result as $key) {
								echo "<tr>";
								echo "<td class='align-middle'>" . $key['idAlumne'] . "</td>";
								echo "<td class='align-middle'>" . $key['nom'] . "</td></tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>