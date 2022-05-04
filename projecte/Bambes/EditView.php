<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Bambes</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Bambes</h1>			
			</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $result[0]['bamba_id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $result[0]['nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="cognoms" class="col-sm-2 col-form-label font-weight-bold">Preu</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="cognoms" name="preu" value="<?php echo $result[0]['preu']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripció</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="descripcio" name="descripcio" value="<?php echo $result[0]['descripcio']; ?>">
						</div>
					</div>
	

					</div>
					<input type="hidden" name="action" value="up">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>