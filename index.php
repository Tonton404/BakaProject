<?php
	require_once("data.php");
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>	<?php echo $title ?> </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js";></script>
		<script src="script.js"></script>
		<span id="description-victor"> <?php echo $description ?> </span>
		<script src="/particles/particles.js"></script>
		<script src="app.js"></script>
	</head>

	<body class="content">
		<header>
				<h2> <?php echo $h2header ?> </h2>
		</header>


		<main>
			<div id="bloc">
				<div id="liste">
					<ul>
						<a href="#"><li id="accueil"> <?php echo $accueil ?> </li></a>
						<a href="#"><li id="formation"> <?php echo $formation ?> </li></a>
						<a href="#"><li id="contact"> <?php echo $contact ?> </li></a>
					</ul>
				</div>
				<div id="texte">
					<p id="accueil_p" > <?php echo $accueil_p ?> </p>
					<p id="contact_p" > <?php echo $contact_p ?> </p>
					<p id="formation_p" > <?php echo $formation_p ?> </p>
				</div>
			</div>
		</main>

		<div class="background" id='particles-js'></div>

	<footer>
			<p> <?php echo $footer ?> </p>
	</footer>

	</body>


</html>
