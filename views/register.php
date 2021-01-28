<div class="container d-flex">
	<div class="row mx-auto">
		<div class="col-md-12 align-self-center">

			<?php
			if (isset($_COOKIE["gender"]) || isset($_POST["sexe"])) {
				if (isset($_COOKIE["firstname"]) || isset($_POST["name"])) {
					if (isset($_COOKIE["interest"])) {
						header("Location: views/lovers.php");
						exit;
					}
			?>


					<div class="Card_register card card-outline-secondary">

						<div class="Card_register_header card-header">
							<h3 class="mb-0">Inscription : étape 3/3</h3>
						</div>

						<div class="card-body">
							<form action="views/lovers.php" method="post">
								<div class="mb-3">
									<label for="age" class="form-label">Age</label>
									<input type="textarea" class="input_register form-control" name="age" placeholder="ex : 22" required>
								</div>

								<div class="text-left py-3">
								Pour la :
								</div>
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

								<div class="text-left py-3">
								vous voulez recontrer :
								</div>
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

								<div class="form-check mb-3">
									<input class="form-check-input" type="radio" name="interest" value="tout" required>
									<label class="form-check-label" for="Femme">
										les deux
									</label>
								</div>

								<div class="text-center">
									<button class="btn_register btn btn-primary" type="submit">continuer</button>
								</div>
							</form>
						</div>
					</div>
					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>

				<?php
				} else {
				?>

					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>

					<div class="Card_register card card-outline-secondary">

						<div class="Card_register_header card-header">
							<h3 class="mb-0">Inscription : étape 2/3</h3>
						</div>

						<div class="card-body">
							<form action="index.php" method="post">
								<div class="mb-3">
									<label for="name" class="form-label">Nom</label>
									<input type="textarea" class="input_register form-control" placeholder="ex : Dupond" name="name" id="name" required>
								</div>

								<div class="mb-3">
									<label for="lastname" class="form-label">Prenom</label>
									<input id="lastname" type="textarea" class="input_register form-control" placeholder="ex : Jean" name="lastname" required>
								</div>

								<div class="mb-3">
									<label for="Password" class="form-label">Mail</label>
									<input id="mail" type="email" class="input_register form-control" placeholder="ex : jeandupond@gmail.com" name="mail" required>
								</div>

								<div class="mb-3">
									<label for="zip" class="form-label">Code Postal</label>
									<input id="cp" type="textarea" class="input_register form-control" placeholder="ex : 76620" name="zipcode" required>
								</div>
								<div class="text-center">
									<button id="btn1" type="submit" class="btn_register text-center btn btn-primary">continuer</button>
								</div>

							</form>
						</div>
					</div>



					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>
					<!------------------------------------------------------------------------------------------------------------------------------>

				<?php
				}
			} else {
				?>

				<!------------------------------------------------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------------------------------------------------>

				<div class="Card_register card card-outline-secondary">

					<div class="Card_register_header card-header">
						<h3 class="mb-0">Inscription : étape 1/3</h3>
					</div>

					<div class="card-body">
						<form action="index.php" method="post">

							<div class="text-left mb-3">
								<b>Genre</b>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input" type="radio" name="sexe" value="Homme" required>
								<label class="form-check-label" for="Homme">
									Homme
								</label>
							</div>

							<div class="form-check mb-3">
								<input class="form-check-input" type="radio" name="sexe" value="Femme" required>
								<label class="form-check-label" for="Femme">
									Femme
								</label>
							</div>

							<div class="text-center">
								<button class="btn_register btn btn-primary" type="submit">continuer</button>
							</div>
						</form>
					</div>
				</div>



				<!------------------------------------------------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------------------------------------------------>
				<!------------------------------------------------------------------------------------------------------------------------------>

			<?php
			}
			?>
		</div>
	</div>
</div>