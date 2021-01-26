<?php include 'controllers/index_controller.php' ?>
<!doctype html>
<html lang="fr">

<head>
	<title>Lovely Love</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/ico" href="assets/img/favicon.ico">
	<link href="assets/css/style.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- CDN FONT AWESOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
	

	<div class='container'>
		
		<div class='login row'>
			<div class='log '>


				<form action="index.php" method="post">
					<?php
					if (isset($_POST['sexe'])) { ?>
						<form>

							<?php
							if (isset($_COOKIE['gender']) || isset($_POST['sexe'])) {
								if (isset($_COOKIE['firstname']) || isset($_POST['name'])) {
									if (isset($_COOKIE['interest'])) {
										header('Location: views/lover.php');
										exit;
									}
							?>
									<h2> Etape 3/3 </h1>
										<form action="views/lover.php" method="post">
											<div class="mb-3">
												<label for="name" class="form-label">age</label>
												<input type="textarea" class="form-control" name="age" required>
											</div>

											<p> Pour la </p>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="search" value="Homme" required>
												<label class="form-check-label" for="vie">
													vie
												</label>
											</div>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="search" value="Femme" required>
												<label class="form-check-label" for="nuit">
													nuit
												</label>
											</div>

											<p> vous voulez recontrer </p>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="interest" value="Homme" required>
												<label class="form-check-label" for="Homme">
													des hommes
												</label>
											</div>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="interest" value="Femme" required>
												<label class="form-check-label" for="Femme">
													des femmes
												</label>
											</div>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="interest" value="tout" required>
												<label class="form-check-label" for="Femme">
													les deux
												</label>
											</div>

											<div class="col-12">
												<button class="btn btn-primary" type="submit">continuer</button>
											</div>
										<?php
									} else {
										?>
											<h2> Etape 2/3 </h1>
												<form action="index.php" method="post">
													<div class="mb-3">
														<label for="name" class="form-label">Nom</label>
														<input type="textarea" class="form-control" name="name" required>
													</div>

													<div class="mb-3">
														<label for="lastname" class="form-label">Prenom</label>
														<input type="password" class="form-control" name="lastname" required>
													</div>

													<div class="mb-3">
														<label for="Password" class="form-label">Mail</label>
														<input type="email" class="form-control" name="mail" required>
													</div>

													<div class="mb-3">
														<label for="zip" class="form-label">Code Postale</label>
														<input type="textarea" class="form-control" name="zipcode" required>
													</div>


													<button type="submit" class="btn btn-primary">continuer</button>
												</form>
											<?php }
									} else { ?>
											<h2> Etape 1/3 </h1>
												<form action="index.php" method="post">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="sexe" value="Homme" required>
														<label class="form-check-label" for="Homme">
															Homme
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="sexe" value="Femme" required>
														<label class="form-check-label" for="Femme">
															Femme
														</label>
														<div class="col-12">
															<button class="btn btn-primary" type="submit">continuer</button>
														</div>
													<?php } ?>
													</div>
												</form>
			</div>
		</div>
	</div>


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