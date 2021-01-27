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

    <section class="container m-0 pt-4">
        <div class="row">
            <?php include("../controllers/lovers_controller.php"); ?>
        </div>
    </section>

    <?php // include("views/login.php") 
    ?>

    <?php // include("views/register.php") 
    ?>

    <?php //include("footer.php"); ?>

</div>

<!-- FIN DE PAGE -->
<?php include("core_views/end.php"); ?>