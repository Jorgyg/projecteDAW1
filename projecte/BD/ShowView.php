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
			<div class="alert alert-success text-center" role="alert">

			</div>
			<div class="text-left">
				<form>
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" value="<?php echo $result[0]['id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="nom" value="<?php echo $result[0]['Nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="cognoms" class="col-sm-2 col-form-label font-weight-bold">Cognom</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="cognoms" value="<?php echo $result[0]['Cognom']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="data_naixement" class="col-sm-2 col-form-label font-weight-bold">Data naixement</label>
						<div class="col-sm-10">
							<input type="date" readonly class="form-control-plaintext" id="data_naixement" value="<?php echo $result[0]['Data_naixement']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="curs" class="col-sm-2 col-form-label font-weight-bold">Feina</label>
						<div class="col-sm-10">		
							<input type="text" readonly class="form-control-plaintext" id="curs" value="<?php echo $result[0]['Feina']; ?>">
						</div>
					</div>
					<div class="text-right">
						<a class="btn btn-primary" role="button" href="./index.php">Tornar a la pàgina principal</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>