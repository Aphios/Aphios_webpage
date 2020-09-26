<!--Maquette du site APHIOS WEBSITE par Sophie Blanchard-->
<!DOCTYPE html>
<html>
    <head>
	    <meta charset = "utf-8"/>
	    <link rel="stylesheet" type="text/css" href="main_css.css" />
	    <title>Aphios website</title>
    </head>
	
	<body>
	<div id="page">
	
	<header>
	    <?php include("en_tete.php"); ?>
	</header>
	
	<nav>
	    <?php include("menu.php"); ?>
	</nav>
	
	<section>
	
	    <article>
	        <!-- Présentation -->
			<h1>Présentation</h1>
			<p>Ce site est actuellement en construction.</p>
			<p>Il s'agit d'un site personnel regroupant la présentation de mes projets informatiques et web.</p>
			<p>Vous y trouverez également un espace à destination des employeurs, présentant mon curriculum vitae.</p>
	    </article>
	
	    <aside>
	        <!-- A propos -->
			<h2>A propos de l'autrice</h2>
			<p>Passionnée par les technologies du numérique, je me suis reconvertie dans le développement web après
			une carrière de cheffe de projets culturels.</p>
			<p>Après avoir longtemps blogué sur la littérature, les voyages et l'histoire de l'art, ma curiosité m'a portée
			vers l'apprentissage des langages informatiques et de leur écosystème.</p>
			<p>Ce site est donc clairement une vitrine, que j'espère la plus agréable et intéressante possible !</p>
	    </aside>
	
	    <aside>
	        <!-- Me retrouver -->
			<h2>Me retrouver</h2>
			<ul>
			    <li><a href="https://labyrintheque.wordpress.com">La Labyrinthèque, mon blog culturel</a></li>
				<li><a href="https://www.senscritique.com/Labyrinth%C3%A8que/critiques">Mes critiques littéraires sur Sens Critique</a></li>
				<li><a href="https://github.com/Aphios">Mes projets sur Github</a></li>
				<li><a href="https://www.linkedin.com/in/sophie-blanchard-b214a4192/">Mon profil Linkedin</a></li>
				<li><a href="http://instagram.com/sophiefradiere">Mes photographies de voyage sur Instagram</a></li>
			</ul>
	    </aside>
	
	</section>
	
	<footer>
	    <?php include("bas_page.php"); ?>
	</footer>
	
	</div>
	</body>
	
</html>