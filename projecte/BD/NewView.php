<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Treballadors</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Treballadors</h1>
			</div>
			<div class="alert alert-primary text-center" role="alert">

			</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nom" id="nom" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="cognoms" class="col-sm-2 col-form-label font-weight-bold">Cognom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cognom" id="cognom" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="data_naixement" class="col-sm-2 col-form-label font-weight-bold">Data naixement</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" name="data_naixement" id="data_naixement" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="curs" class="col-sm-2 col-form-label font-weight-bold">Feina</label>
						<div class="col-sm-10">
							<select type="text" class="form-control" id="feina" name="feina">
								<option value="Admin">Admin</option>
								<option value="Edit">Edit</option>
				
							</select>
						</div>
					</div>
					<input type="hidden" name="action" value="add">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>