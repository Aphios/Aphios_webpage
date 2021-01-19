<!--Maquette de la page Présentation du projet Aphios website par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>La réalisation de ce site</title>
    </head>
	
    <body>
	
	<header>
	     <?php include("en_tete.php"); ?>
	</header>
	
	<nav>
		<?php include("menu.php"); ?>
	</nav>

	<div id="inner">
		
		<section>
			<article>
				<h1>La réalisation de mon site</h1>
				<p>La réalisation de mon site personnel <strong>Aphios website</strong> m'a permis de mettre en pratique les technologies de développement web
				apprises dans le cadre de ma reconversion professionnelle en tant que développeuse web.</p>
				<p>Développé avec une méthodologie <em>Scrum</em>, ce site a connu plusieurs versions : site statique, site dynamique,
				site dynamique et responsive. Il utilise les technologies HTML5, CSS3, Javascript, PHP et MySQL.</p>
				<p>La maquette du site, la définition de la charte graphique et la réalisation des éléments graphiques, à l'exclusion
				des polices, sont de ma main.</p>
				<h2>Retrouver le code source</h2>
				<p>L'ensemble des étapes du projet et le code source des pages du site est consultable sur 
				<a href="https://github.com/Aphios/Aphios_website" target="blank">ma page Github.</a></p>	
			</article>
			
			<aside>
				<h2>Crédits</h2>
				<p>Polices :</p>
				<ul>
					<li><a href="https://www.fontsquirrel.com/fonts/Rothenburg-Decorative" target="blank">Rothenburg Decorative</a> par Alex Winterbottom</li>
					<li><a href="https://www.fontsquirrel.com/fonts/neris" target="blank">Neris</a> par Eimantas Paskonis</li>
				</ul>
			</aside>
		</section>

	</div>
	
	<footer>
		<?php include("bas_page.php"); ?>
    </footer>
				    
    </body>
</html>