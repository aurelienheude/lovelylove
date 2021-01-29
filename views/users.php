<?php include("../controllers/cookies.php"); ?>
<?php include("../controllers/index_controller.php"); ?>
<?php include("../controllers/redirect.php"); ?>
<!-- DEBUT DE PAGE -->

<?php include("core_views/head.php"); ?>

<div class="container p-0 vh-100">

	<?php include("nav.php") ?>
	<?php include("banner_user.php") ?>

			<div class="row d-flex m-0 p-0">				
					<div class="col-md-12 p-0 m-0 text-center">
						<form method="POST" action="../controllers/user_controller.php">
						<input type="textarea" class="p-4 form-control" name="description" placeholder="Quel est ton mood aujourd'hui ?">
						<input class="input_button_user mt-4 mx-auto btn" type="submit" value="Envoyez" name="description_users" />			
					</div>
				</form>
			</div>

			<div class="row d-flex m-0 p-0">
				<div class="col-md-12 p-5 mx-0 mt-4 text-center description_user_bloc">
					<i><?php if (isset($_COOKIE["description"])) { echo $_COOKIE["description"]; } else { echo "Pas encore de description :("; } ?></i>
				</div>
			</div>

			<div class="Bio_user row d-flex m-0 px-4 py-4">
				<div class="col-md-12 mb-3 text-left">
					<h2 class="h2">Bio</h2>
				</div>
				<div class="col-md-6">
					<p>Nom : <?php echo $_COOKIE["firstname"]; ?></p>
					<p>Prénom : <?php echo $_COOKIE["lastname"]; ?></p>
					<p>age : <?php echo $_COOKIE["age"]; ?></p>
				</div>
				<div class="col-md-6">
					<p>Genre : <?php echo $_COOKIE["gender"]; ?></p>
					<p>email : <?php echo $_COOKIE["mail"]; ?></p>
					<p>Code postal : <?php echo $_COOKIE["zipcode"]; ?></p>
				</div>

				<div class="col-md-6">
					<form action="deconnexion.php" method="POST">
						<input type="submit" class="input_button_user mt-4 mx-auto btn" value="EFFACER TOUTES TRACES" />
					</form>
				</div>
				<div class="col-md-6">
					<form action="https://www.meetic.fr/" method="">
						<input type="submit" class="input_button_user mt-4 mx-auto btn" value="TAKE MY MONEY" />
					</form>
				</div>
			</div>		

</div>

<!-- FIN DE PAGE -->
<?php include("core_views/end.php"); ?>