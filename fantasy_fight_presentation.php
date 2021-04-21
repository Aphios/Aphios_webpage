<!--Maquette de la page Fantasy Fight par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Fantasy Fight</title>
    </head>
	
    <body>
	
	<header>
	     <?php require("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php require("menu.php"); ?>
	</nav>

	<div id="inner">
	
		<section>
			<article>
				<h1>Présentation du projet Fantasy Fight</h1>
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
				<p>Il vous suffit de télécharger la version française ou anglaise en cliquant ci-dessous et d'exécuter le fichier en double-cliquant dessus.</p>
				<div class="flex-line">
					<button type="button" class="download"><a href="Files/Fantasy_fight_fr.7z" download="Fantasy Fight_français">Jeu en français</a></button>
					<button type="button" class="download"><a href="Files/fantasy_fight_en.zip" download="Fantasy Fight_english">Jeu en anglais</a></button>
				</div>

				<section id="galerie">
					<figure class="miniature">
							<img src="Images/ce_ff_002.png" alt="Image du jeu Fantasy Fight" />
							<figcaption>Screenshots du jeu Fantasy Fight</figcaption>
					</figure>

				</section>

				<div id="lightbox" aria-hidden="true">
					<div id="diaporama">
						<span id="quit">&times;</span>
						<img src="Images/ce_ff_002.png" alt="Image du jeu Fantasy Fight" />
						<img src="Images/ce_ff_003.png" alt="Image du jeu Fantasy Fight" />
						<img src="Images/ce_ff_004.png" alt="Image du jeu Fantasy Fight" />
						<div id="controls">
							<span id="previous">&#10094;</span>
							<span id="next">&#10095;</span>
						</div>
					</div>	
				</div>
				
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

    </div>
			
	<footer>
		<?php require("bas_page.php"); ?>
	</footer>
	
	<script src="app.js"></script>
	<script src="aria_dropdown_menu.js"></script>
				    
    </body>
</html>