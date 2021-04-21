<!--Maquette de la page Présentation du projet KidzFastplay par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Sur les ailes de Léonard</title>
    </head>
	
    <body>
	
	<header>
	     <?php require("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php require("menu.php"); ?>
	</nav>

	<div id="inner">
		<h1>Sur les ailes de Léonard</h1>
        <p><a href="https://sur-les-ailes-de-leonard.fr" alt="lien vers le site Sur les ailes de Léonard">Sur les ailes de Léonard</a> est un site internet conçu pour les enfants de 6 à 11 ans. Il propose différents mini-jeux à réaliser en ligne, d'une durée maximale de 5 minutes.</p>
        <p>Le site a été réalisé avec lHTML5, CSS3, Sass, PHP et Javascript. Je me suis basée sur la méthode BEM et le modèle 7-1 pour organiser mon code.</p>
		<h2>Retrouver le code source</h2>
		<p>L'ensemble des étapes du projet et le code source des pages du site est consultable sur <a href="https://github.com/Aphios/KidzFastplay" target="blank">ma page Github.</a></p>

	</div>
	
	<footer>
		<?php require("bas_page.php"); ?>
    </footer>

	<script src="aria_dropdown_menu.js"></script>
				    
    </body>
</html>