<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Plan du site</title>
    </head>
    
	<body>
	    <header>
	        <?php require("en_tete.php"); ?>
	    </header>
	
	    <nav>
	        <?php require("menu.php"); ?>
		</nav>
		
		<div id="inner">
			<h1>Plan du site</h1>
			<h2><a href="mainpage.php">Accueil</a></h2>
			<h2><a href="mes_projets.php">Mes projets</a></h2>
			<h3><a href="fantasy_fight_presentation.php">Projet Fantasy Fight</a></h3>
			<h3><a href="aphios_website_presentation.php">Aphios website</a></h3>
			<h3><a href="leonard_presentation.php">Sur les ailes de Léonard</a></h3>
			<h2><a href="cv.php">CV</a></h2>
			<h2><a href="contact.php">Contact</a></h2>
			<h2><a href="mentions_legales.php">Mentions légales</a></h2>
       </div>
		
		<footer>
	        <?php require("bas_page.php"); ?>
	    </footer>

		<script src="aria_dropdown_menu.js"></script>
		
	</body>
</html>