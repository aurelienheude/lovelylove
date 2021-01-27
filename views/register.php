<?php
	if (isset($_COOKIE["gender"]) || isset($_POST["sexe"] )) 
	{
		if (isset($_COOKIE["firstname"]) || isset($_POST["name"])) 
			{ 
				if (isset($_COOKIE["interest"])) 
				{ 
					header("Location: views/lovers.php");
					exit;
				}
?>

	<div class="container">
		<div class="login row">
			<div class="log col-lg-6 col-md-8 col-sm-12 " >
				<h2> Etape 3/3 </h1>
				<form action="views/lover.php" method="post">
					<div class="mb-3">
						<label for="age" class="form-label">age</label>
						<input type="textarea" class="form-control" name="age" required>
					</div>

					<p> Pour la  </p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="search" value="Homme" required>
						<label class="form-check-label" for="vie" >
							vie
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="search"value="Femme" required >
						<label class="form-check-label" for="nuit">
						nuit
						</label>
					</div>

					<p> vous voulez recontrer </p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="interest" value="Homme" required>
						<label class="form-check-label" for="Homme" >
							des hommes
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="interest"value="Femme" required >
						<label class="form-check-label" for="Femme">
							des femmes
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="interest"value="tout" required >
						<label class="form-check-label" for="Femme">
							les deux
						</label>
					</div>

					<div class="col-12">
						<button class="btn btn-primary" type="submit">continuer</button>
					</div>
				</form>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

	<?php 
		}
		else { 
	?>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

				<h2> Etape 2/3 </h1>
			<form action="index.php" method="post">
				<div class="mb-3">
					<label  for="name" class="form-label">Nom</label>
					<input type="textarea" class="form-control" name="name" id="name" required>
				</div>

				<div class="mb-3">
					<label for="lastname" class="form-label">Prenom</label>
					<input id="lastname" type="textarea" class="form-control" name="lastname" required>
				</div>

				<div class="mb-3">
					<label for="Password" class="form-label">Mail</label>
					<input id="mail" type="email" class="form-control" name="mail" required>
				</div>

				<div class="mb-3">
					<label for="zip" class="form-label">Code Postale</label>
					<input id="cp" type="textarea" class="form-control" name="zipcode" required>
				</div>

				<button id="btn1" type="submit" class="btn btn-primary">continuer</button>

			</form>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

	<?php 
		}
	}
	else{ 			
	?>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

			<div class="row text-center">
				<h2> Etape 1/3 </h1>
				<form action="index.php" method="post">
					
					<div class="form-check mb-3">
						<input class="form-check-input" type="radio" name="sexe" value="Homme" required>
						<label class="form-check-label" for="Homme" >
							Homme
						</label>
					</div>

					<div class="form-check mb-3">
						<input class="form-check-input" type="radio" name="sexe"value="Femme" required>
						<label class="form-check-label" for="Femme">
							Femme
						</label>
					</div>
				
					<div class="col-12">
						<button class="btn btn-primary" type="submit">continuer</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

<?php 
}
?>