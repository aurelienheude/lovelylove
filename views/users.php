<?php include("../controllers/cookies.php"); ?>
<?php include("../controllers/index_controller.php"); ?>

<!-- DEBUT DE PAGE -->

<?php include("core_views/head.php"); ?>

<div class="container vh-100">

	<?php include("nav.php") ?>

	<section class="bg-success container d-flex m-0 p-0">
		<div class="row mx-auto">
			<div class="col-md-12 py-5">
				<img class="Profil_pic_circle" src="../assets/img/logo.png" />
			</div>
		</div>
	</section>

	<div class="parent-container d-flex bg-success">
    <div class="container w-25">
        <div class="row">
            <div class="col-md-12">
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
            <div class="col-md-12 text-center ">
                <ul>
				<li>Nom</li>
				<li>Prénom</li>
				<li>age</li>
				</ul>
				<ul>
					<li>Genre</li>
					<li>email</li>
					<li>Code postal</li>
				</ul>
            </div>
			<div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>
















	<?php // include("views/login.php") ?>

	<?php // include("views/register.php") ?>

	<?php //include("footer.php"); ?>

</div>

<!-- FIN DE PAGE -->
<?php include ("core_views/end.php"); ?>