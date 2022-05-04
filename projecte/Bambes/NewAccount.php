<?php echo'
<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Crear compte</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Crear compte</h1>
			</div>
			<div class="alert alert-primary text-center" role="alert">

			</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom Usuari</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="usuari" id="nom" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="cognoms" class="col-sm-2 col-form-label font-weight-bold">Contrasenya</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="contrasenya" id="cognom" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="data_naixement" class="col-sm-2 col-form-label font-weight-bold">Repetir Contrasenya</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="contrasenya2" id="data_naixement" required>
						</div>
					</div>
					<input type="hidden" name="action" value="compte">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>';

?>