<!--Maquette de la page Contact par Sophie Blanchard-->
<!DOCTYPE html>
<html>
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
	
	<h1>Contact</h1>
	<h2>Cette page est en construction, formulaire actuellement inopérant.</h2>
	
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
        <input type="email" name="mail" id="mail" required />
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
       <textarea name="message" id="message" required >Entrez votre message ici.</textarea>       
   </fieldset>
   <input type="submit" value="Envoyer" />
</form>

	
	<footer>
	    <?php include("bas_page.php"); ?>
	</footer>
	
	</body>
	
</html>