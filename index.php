<!doctype html>
<html lang="fr">

<head>
	<title>Lovely Love</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/ico" href="assets/img/favicon.ico">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<!-- CDN FONT AWESOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body class="container">

<?php include("views/nav.php"); ?>


	<form action="index.php" method="post">
		<?php
		if (isset($_POST['sexe'])) { ?>
			<form>

				else{ ?>
				<div class="mb-3">
					<label for="name" class="form-label">Nom</label>
					<input type="textarea" class="form-control" name="name">
				</div>

				<div class="mb-3">
					<label for="lastname" class="form-label">Prenom</label>
					<input type="password" class="form-control" name="lastname">
				</div>

				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Mail</label>
					<input type="email" class="form-control" name="mail">
				</div>


				<button type="submit" class="btn btn-primary">continuer</button>
			</form>
		<?php } else { ?>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="sexe" value="Homme">
				<label class="form-check-label" for="Homme">
					Homme
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="sexe" value="Femme" checked>
				<label class="form-check-label" for="Femme">
					Femme
				</label>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">continuer</button>
				</div>
			<?php } ?>
			</div>
	</form>
	
	<?php include("views/footer.php"); ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>