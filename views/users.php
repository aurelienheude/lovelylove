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

	<div class="parent-container py-4 px-0 h-50 d-flex">
		<section class="container w-25 ps-0 pe-4">
			<div class="row h-100 m-0 p-0">
				<div class="col-md-12 h-25 bg-light">
					<img class="Profil_pic_circle rounded-circle" src="../assets/img/300.png" width="100px" height="100px" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="list-group" id="list-tab" role="tablist">
						<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
						<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
					</div>
				</div>
			</div>


		</section>

		<section class="container ps-2 w-75 bg-light">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<form method="POST" action="../controllers/user_controller.php">
							<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Quel est ton mood aujourd'hui ?"></textarea>
							<input class="btn btn-dark" type="submit" value="Envoyez" name="description_users" />
						</form>
					</div>
				</div>
				<div class="col-md-12 p-5 text-center">
					<?php if(isset($_COOKIE["description"])){echo $_COOKIE["description"];}else{ echo "Pas encore de description :("; } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group">
						<li class="">Nom : <?php echo $_COOKIE["lastname"]; ?></li>
						<li class="">Prénom : <?php echo $_COOKIE["firstname"]; ?></li>
						<li class="">age : <?php echo $_COOKIE["age"]; ?></li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						<li class="">Genre : <?php echo $_COOKIE["gender"]; ?></li>
						<li class="">email : <?php echo $_COOKIE["mail"]; ?></li>
						<li class="">Code postal : <?php echo $_COOKIE["zipcode"]; ?></li>
					</ul>
				</div>

			</div>
		</section>
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
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6">
					a
			</div>
			<div class="col-md-6">
				a
			</div>
		</div>
	</section>
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