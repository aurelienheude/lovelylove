<?php include("../controllers/cookies.php"); ?>
<?php include("../controllers/index_controller.php"); ?>

<!-- DEBUT DE PAGE -->

<?php include ("core_views/head.php"); ?>

<div class="container vh-100">

	<?php include("nav.php") ?>

	<section class="bg-success container d-flex m-0 p-0">
		<div class="row mx-auto">
			<div class="col-md-12 py-5">
				<img class="Profil_pic_circle" src="../assets/img/logo.png" />
			</div>
		</div>
	</section>

	<section class="container m-0 pt-4">
		<div class="row text-center">
			<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			<div class="card-header">
				Featured
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
			</div>
			</div>
			<div class="col-md-3">
				a
			</div>
			<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			<div class="card-header">
				Featured
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
			</div>
			</div>
			<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			<div class="card-header">
				Featured
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
			</div>
			</div>
		</div>
	</section>
















	<?php // include("views/login.php") ?>

	<?php // include("views/register.php") ?>

	<?php include("footer.php"); ?>

</div>

<!-- FIN DE PAGE -->
<?php include ("core_views/end.php"); ?>