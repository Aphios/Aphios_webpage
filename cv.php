<!--Maquette de la page CV par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
	    <meta charset = "utf-8"/>
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Aphios website</title>
    </head>
	
	<body>
	
	<header>
	    <?php include("en_tete.php"); ?>
	</header>
	
	<nav>
	    <?php include("menu.php"); ?>
	</nav>
	
	<section id="cv_top">
	    <section id="lettrine"><h1>CV</h1></section>
	    <section id="cv_intro">
	        <h2>Sophie Blanchard</h2>
		    <h3>Développeuse web</h3>
		    <p>Initialement cheffe de projets culturels, je suis passionnée par la programmation.
				<br />J'ai choisi de me réorienter dans le domaine digital afin de m'épanouir dans un métier technique, exigeant et évolutif.</p>
	    </section>
	</section>
	
	<hr>
	
    <section id="cv_body">
	
	    <section id="cv_left">
	        <article>
		        <h3>Contact</h3>
		    	<p><a href="mailto:aphios.web@gmail.com">aphios.web@gmail.com</a></p>
		    </article>
		
		    <article>
		        <h3>Points forts</h3>
			    <ul>
			        <li>Analyse</li>
				    <li>Curiosité</li>
				    <li>Gestion de projet</li>
				    <li>Rédaction</li>
				    <li>Relationnel</li>
				    <li>Rigueur</li>
			    </ul>
		    </article>
		
		    <article>
		        <h3>Langues</h3>
			    <p>Anglais : courant</p>
			    <p>Allemand : intermédiaire</p>
		    </article>
		
		    <article>
		        <h3>Réalisations personnelles</h3>
			    <p><a href="https://labyrintheque.wordpress.com">Blog La Labyrinthèque</a></p>
			    <p><a href="https://github.com/Aphios">Page Github</a></p>
		    </article>
	
	    </section>
	
	    <section id="cv_right">
	        <article>
		       <h3>Compétences professionnelles</h3>
		       <ul>
		           <li>HTML & CSS<span class="progress-bar-3">***</span></li>
			       <li>PHP<span class="progress-bar-3">***</span></li>
				   <li>MySQL<span class="progress-bar-2"><**/span></li>
				   <li>JavaScript<span class="progress-bar-3">***</span></li>
			       <li>Python<span class="progress-bar-3">***</span></li>
			       <li>Wordpress<span class="progress-bar-1">*</span></li>
			       <li>Java<span class="progress-bar-2">**</span></li>
				   <li>Git<span class="progress-bar-2">**</span></li>
			       <li>Photoshop<span class="progress-bar-3">***</span></li>
			       <li>Indesign<span class="progress-bar-3">***</span></li>
			       <li>Scrum<span class="progress-bar-1">*</span></li>
			    </ul>
		    </article>
			
			<article>
			    <h3>Expériences</h3>
				<h4>Responsable des projets éducatifs, Archives départementales des Yvelines, 2014-2020</h4>
				<p>Conception de projets culturels (analyse, cahier des charges, management d'équipe, suivi budgétaire,
				reporting, recherche et création des contenus) ; création de supports de communication (flyers, affiches, 
				vidéos, présentations animées) et administration des contenus des sites web des Archives ;
				gestion de la base de données de contacts du service ; animation de formations.</p>
				<h4>Responsable du service éducatif, Musée de la Nacre et de la Tabletterie, 2013-2014</h4>
				<p>Conception de projets culturels ; animation à destination des publics ; conception de supports de
				communication.</p>
				<h4>Chargée de communication, compagnie Naxos Théâtre, 2012-2013</h4>
				<p>Conception de supports de communication ; administration du site web de la compagnie ; relations avec
				les publics et professionnels de la culture.</p>
			</article>
			
			<article>
			   <h3>Formation</h3>
			   <p>Certificat professionnel Programmation de sites web, CNAM, 2020-2021</p>
			   <p>Cours en auditeur libre sur les technologies Python, Java, PHP et SQL 
			   (Openclassrooms, France Université Numérique...), 2019-2020</p>
			   <p>Master Conception de projets culturels, Université Sorbonne Nouvelle, Paris, 2012</p>
			   <p>Premier Cycle en histoire de l'art, Ecole du Louvre, Paris, 2010</p>
			   <p>Baccalauréat littéraire mention TB, L'Isle-Adam, 2007</p>
			</article>
	
	    </section>
	
	</section>
	
	<footer>
	    <?php include("bas_page.php"); ?>
	</footer>
	
	</body>
	
</html>