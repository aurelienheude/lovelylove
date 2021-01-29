<?php include("../controllers/cookies.php"); ?>
<?php include("../controllers/index_controller.php"); ?>
<?php include("../controllers/redirect.php"); ?>
<!-- DEBUT DE PAGE -->

<?php include("core_views/head.php"); ?>

<div class="Container_body container p-0 vh-100">

	<?php include("nav.php") ?>
	<?php include("banner_user.php") ?>

			<div class="row d-flex m-0 p-0">
				<div class="col-md-12 p-0 m-0 text-center">
					<form method="POST" action="../controllers/user_controller.php">
						<input type="textarea" class="p-4 form-control" name="description" placeholder="Quel est ton mood aujourd'hui ?">
						<input class="input_button_user form-control btn" type="submit" value="Envoyez" name="description_users" />	
					</form>
				</div>

				<div class="col-md-12 p-5 mx-0 mt-4 text-center description_user_bloc">
					<i><?php if (isset($_COOKIE["description"])) {
							echo $_COOKIE["description"];
						} else {
							echo "Pas encore de description :(";
						} ?></i>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-left">
					<h2 class="h2">Bio</h2>
				</div>
				<div class="col-md-3">
					Nom : <?php echo $_COOKIE["firstname"]; ?>
				</div>
				<div class="col-md-3">
					Prénom : <?php echo $_COOKIE["lastname"]; ?>
				</div>
				<div class="col-md-3">
					age : <?php echo $_COOKIE["age"]; ?>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						<li class="">Genre : <?php echo $_COOKIE["gender"]; ?></li>
						<li class="">email : <?php echo $_COOKIE["mail"]; ?></li>
						<li class="">Code postal : <?php echo $_COOKIE["zipcode"]; ?></li>
					</ul>
				</div>
			</div>		

<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

			<div class="row text-center">
				<div class="col-md-6">
					<form action="deconnexion.php" method="POST">
						<input type="submit" value="EFFACER TOUTES TRACES" />
					</form>
				</div>
				<div class="col-md-6">
					<form action="https://www.meetic.fr/" method="">
						<input type="submit" value="TAKE MY MONEY" />
					</form>
				</div>
			</div>

<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->



<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

<?php include("footer.php");
?>

<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

</div>

<!-- FIN DE PAGE -->
<?php include("core_views/end.php"); ?>