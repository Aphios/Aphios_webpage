<!--Maquette de la page Contact par Sophie Blanchard-->
<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width initial-scale=1" />
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Aphios website</title>
    </head>
	
	<body>
	
	<header>
	    <?php require("en_tete.php"); ?>
	</header>
	
	<nav>
	    <?php require("menu.php"); ?>
	</nav>

	<div id="inner">
	
		<h1>Contact</h1>
		
		<form method="post" action="traitement_contact.php">
			<fieldset>
				<legend>Vos coordonnées</legend>
				<p>
				<label for="nom">Votre nom :</label>
				<input type="text" name="nom" id="nom" maxlength="50" />
				</p>
				<p>
				<label for="prenom">Votre prénom :</label>
				<input type="text" name="prenom" id="prenom" maxlength="50" />
				</p>
				<p>
				<label for="mail">Votre email :</label>
				<input type="email" name="mail" id="mail" required maxlength="80" />
				</p>
			</fieldset>
			<fieldset>
				<legend>Nature de votre demande</legend>
				<input type="radio" name="demande" value="site" id="site" />
				<label for="site">Question relative au site</label><br />
				<input type="radio" name="demande" value="projets" id="projets" /> 
				<label for="projets">Question relative à l'un des projets</label><br />
				<input type="radio" name="demande" value="pro" id="pro" /> 
				<label for="pro">Contact dans le cadre professionnel</label><br />
			</fieldset>
			<fieldset>
				<legend>Votre message</legend>
				<textarea name="message" id="message" required maxlength="3000">Entrez votre message ici (3000 caractères max).</textarea>       
			</fieldset>
			<input type="submit" value="Envoyer" />
		</form>

	</div>
	
	<footer>
	    <?php require("bas_page.php"); ?>
	</footer>

	<script src="aria_dropdown_menu.js"></script>
	
	</body>
	
</html>