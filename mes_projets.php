<!--Maquette de la page Fantasy Fight par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Mes projets</title>
    </head>
	
    <body>
	
	<header>
	     <?php require("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php require("menu.php"); ?>
	</nav>

	<div id="inner">
	
		<h1>Mes projets</h1>
		<h3><a href="fantasy_fight_presentation.php">Fantasy Fight</a>, un mini-jeu PC développé en Python.</h3>
		<h3><a href="kidz_presentation.php">Kidz Fastplay</a>, un site web proposant des mini-jeux pour enfants.</h3>
		<h3>Et bien sûr <a href="aphios_website_presentation.php">ce site</a>, développé avec HTML5, CSS3, Javascript, MySQL et PHP.</h3>
	
    </div>

	<footer>
	    <?php require("bas_page.php"); ?>
	</footer>

	<script src="aria_dropdown_menu.js"></script>
	
	</body>
	
</html>