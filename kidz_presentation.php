<!--Maquette de la page Présentation du projet KidzFastplay par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Kidz Fastplay</title>
    </head>
	
    <body>
	
	<header>
	     <?php require("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php require("menu.php"); ?>
	</nav>

	<div id="inner">
		<h1>Kidz Fastplay</h1>
        <p>Kidz Fastplay est un site internet conçu pour les enfants de 6 à 11 ans. Il propose différents mini-jeux à réaliser en ligne, d'une durée maximale de 5 minutes.</p>
        <p>Ce site est en cours de construction et comporte actuellement un jeu de mémory.</p>
        <p>Il est réalisé avec les technologies HTML5, CSS3, Sass et Javascript. Je me suis basée sur la méthode BEM et le modèle 7-1 pour organiser mon code.</p>
		<h2>Retrouver le code source</h2>
		<p>L'ensemble des étapes du projet et le code source des pages du site est consultable sur <a href="https://github.com/Aphios/KidzFastplay" target="blank">ma page Github.</a></p>

	</div>
	
	<footer>
		<?php require("bas_page.php"); ?>
    </footer>
				    
    </body>
</html>