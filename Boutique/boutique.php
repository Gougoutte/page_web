<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Boutique du BDE </title>
	<link rel="icon" href="../favicon.png">
	<link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./boutique.css">
</head>


<header>
	<!--Navbar-->
	<?php include "../Navbar.php" ?>
</header>

<body>
	<!-- Caroussel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="caroussel_img carouf" src="../img/carouf1.png" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="caroussel_img carouf" src="../img/carouf2.png" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="caroussel_img carouf" src="../img/carouf3.png" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<!-- Articles en vente -->
	<?php include "Articles.php"?>
</body>




<!-- Footer -->
<div>
	<?php include "../Footer.php" ?>
</div>

<!-- Scripts / JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</html>
