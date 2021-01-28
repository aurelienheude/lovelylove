<?php include("../controllers/cookies.php"); ?>
<?php include("../controllers/index_controller.php"); ?>
<?php include("../controllers/redirect.php"); ?>
<!-- DEBUT DE PAGE -->

<?php include("core_views/head.php"); ?>

<div class="container vh-100">

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

	<?php include("nav.php") ?>

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

	<?php include("banner_user.php") ?>

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

	<div class="parent-container d-flex bg-success">
		<div class="container w-25">
			<div class="row h-100">
				<div class="col-md-12">

				</div>
			</div>
		</div>

		<div class="container p-5 w-75">
			<div class="row h-100">
				<div class="col-md-12 text-center">
					<?php
					if (isset($_COOKIE["description"])) {
						echo $_COOKIE["description"];
					} else {
						echo "Pas encore de description.";
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

	<div class="parent-container d-flex bg-success">
		<div class="container w-25">
			<div class="row h-100">
				<div class="col-md-12 h-25">
					<img class="Profil_pic_circle" src="../assets/img/logo.png" />
				</div>
				<div class="col-md-12">
					<div class="list-group" id="list-tab" role="tablist">
						<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
						<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container w-75 bg-primary">
			<div class="row">

					<ul class="list-group">
						<li class="list-group-item">Nom : <?php echo $_COOKIE["lastname"]; ?></li>
						<li class="list-group-item">Prénom : <?php echo $_COOKIE["firstname"]; ?></li>
						<li class="list-group-item">age : <?php echo $_COOKIE["age"]; ?></li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item">Genre : <?php echo $_COOKIE["gender"]; ?></li>
						<li class="list-group-item">email : <?php echo $_COOKIE["mail"]; ?></li>
						<li class="list-group-item">Code postal : <?php echo $_COOKIE["zipcode"]; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="container d-flex">
		<div class="row mx-auto">
			<div class="col-md-6 align-self-center">
				<form action="deconnexion.php" method="POST">
					<input type="submit" value="EFFACER TOUTES TRACES" />
				</form>
			</div>
			<div class="col-md-6 align-self-center">
				<form action="https://www.meetic.fr/" method="">
					<input type="submit" value="TAKE MY MONEY" />
				</form>
			</div>

		</div>
	</section>

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

	<?php //include("footer.php"); 
	?>

	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------->

</div>

<!-- FIN DE PAGE -->
<?php include("core_views/end.php"); ?>