<!--Maquette de la page Fantasy Fight par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
	    <meta charset = "utf-8"/>
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Fantasy Fight</title>
    </head>
	
    <body>
	
	<header>
	     <?php include("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php include("menu.php"); ?>
	</nav>
	
	<section>
	    <article>
	        <h1>Présentation du projet <br />Fantasy Fight</h1>
			    <p><em>Fantasy Fight</em> est mon <mark>premier projet</mark> autonome. Il s'agit d'un jeu de combat
				old-school développé avec Python 3 et Pygame entre mars et mai 2019. On y incarne un héros de fantasy devant gagner gloire 
				et fortune en combattant de multiples ennemis.</p>
				<p>Le jeu propose une interface graphique en 2D accompagnée de musique et de sons. 
				J'ai créé l'ensemble des éléments graphiques avec Gimp et ma tablette graphique.</p>
				<p>Le jeu se joue via le clavier pour entrer des informations telles que le nom du personnage, 
				le nom des équipements à utiliser, etc, et à la souris pour appuyer sur des boutons permettant
				de continuer ou d'arrêter.</p>
				<p>Ce projet est important pour moi car il m'a permis de mettre en place mes connaissances en 
				développement informatique, acquises entièrement en autonomie.</p>
				<p> J'ai ainsi pratiqué la programmation orientée objet, le <em>test-driven 
				development</em> ainsi que la méthode <em>Scrum</em> pour la gestion du projet.</p>
				<p>J'ai réalisé seule la totalité des étapes du projet : définition des besoins et usages, rédaction 
				du cahier des charges, planification des tâches, codage des classes, fonctions et coeur de programme, 
				tests et gestion des versions via Git.</p>
				<h2>Comment jouer ?</h2>
		        <p>Il vous suffit de télécharger <a href="https://github.com/Aphios/Fantasy_fight/blob/master/Fantasy_fight_fr.7z" target="blank">
				ce fichier</a> et de l'exécuter en double-cliquant dessus.</p>
			    <p>Une version anglaise est aussi disponible <a href="https://github.com/Aphios/Fantasy_fight/blob/master/fantasy_fight_en.zip" target="blank">
				ici.</a></p>
	    </article>
	
	    <aside>
		    <h2>Autres informations</h2>
		        <p>Ce jeu est diffusé librement, sous licence Creative Commons CC-BY-NC.<br />Cela signifie
			    que vous pouvez le réutiliser, le diffuser, le développer, en créditant l'auteur, sans usage commercial
			    et en respectant les droits moraux de l'oeuvre originale.</p>
			    <p>Pour retrouver le projet sur Github, <a href="https://github.com/Aphios/Fantasy_fight" 
			    title="Pour voir le code source du projet" target="blank">rendez-vous ici</a></p>
	    </aside>
	
	</section>

	<section id="galerie">
	    <figure class="miniature">
            <img src="Images/ce_ff_002.png" alt="Image du jeu Fantasy Fight" />
            <figcaption>Screenshots du jeu Fantasy Fight</figcaption>
        </figure>

	</section>

	<div id="lightbox">
		<span id="quit">&times;</span>
	    <div id="diaporama">
			<img src="Images/ce_ff_002.png" alt="Image du jeu Fantasy Fight" />
			<img src="Images/ce_ff_003.png" alt="Image du jeu Fantasy Fight" />
			<img src="Images/ce_ff_004.png" alt="Image du jeu Fantasy Fight" />
		</div>
		<div id="controls">
			<span id="previous">&#10094;</span>
			<span id="next">&#10095;</span>
		</div>
	</div>
			
	<footer>
		<?php include("bas_page.php"); ?>
	</footer>
	
	<script src="ff_lightbox.js"></script>
				    
    </body>
</html>