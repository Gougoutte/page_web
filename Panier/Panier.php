

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Votre Panier </title>
	<link rel="icon" href="../favicon.png">
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="Panier.css">
	<?php error_reporting(0); ?>
</head>



<header>
	<!--Navbar-->
	<?php if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'etudiant' || $_COOKIE['statut'] == 'personnel') {
		include "../Navbar_log.php";
	} else if ($_COOKIE['connecté'] == 1 && $_COOKIE['statut'] == 'membre') {
		include "../Navbar_admin_log.php";
	} else {
		include "../Navbar.php";
	} ?>

	<!-- Bandeau -->
	<img class="Bandeau" src="../img/boutique.png" alt="bandeau">
	<form method="POST">
		<button name="submit" class="btn btn-primary">Commander</button>
	</form>

</header>

<body>
	<section>
		<div class="container-fluid">
			<div class="row ox-image ox-align-center ox-margin-bottom-medium">


				<!-- Séparateur -->
				<div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2">
					<p style="text-align: right"> Vos articles ajoutés au panier : </p>
				</div>
				<!-- Fin séparateur -->



				<?php include 'Paniersend.php';
				include 'finir.php';
				?>

				<!-- Séparateur -->
				<div class="col-lg-1 col-xs-12 col-md-2 p-2 bloc my-2"> </div>
				<!-- Fin séparateur -->

				<p id="p1"></p>

			</div>
		</div>
	</section>




</body>


<!-- Footer -->
<div>
	<?php include "../Footer.php" ?>
</div>


<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</html>