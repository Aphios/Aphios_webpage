<!DOCTYPE HTML>
<html lang="fr">
<head>
	    <meta charset = "utf-8"/>
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Demande de contact</title>
    </head>
<body>
    <header>
	    <?php include("en_tete.php"); ?>
    </header>
	
	<nav>
	    <?php include("menu.php"); ?>
	</nav>

	<div id="inner">
	
<!-- TODO Base de données :
- Créer  le lien vers la bdd locale aphios_web_contacts
- Récupérer et vérifier les données du formulaire (créer une fonction estPrésente et une fonction estValide)
- Si les données [nom, prenom,] mail existent et sont valides mais ne sont pas dans la base, insérer nouvelle ligne dans Personnes
- Si dans Personnes le mail existe déjà, faire un simple update du nom et du prénom (s'ils ont été renseignés)
- Si les données [nature demande], message existent et sont valides, insérer une nouvelle ligne dans Messages
- Afficher le message déjà écrit ci-dessous + "votre message n°{messages.id} a bien été enregistré"
-->

<?php
    if (isset($_POST['prenom']) and (strlen($_POST['prenom'])>0)){
		echo "<p class='msg_form'>Bonjour ".htmlspecialchars($_POST['prenom']).", votre message a bien été transmis 
		et sera traité dans les plus brefs délais.</p>";
	} else {
		echo "<p class='msg_form'>Bonjour, votre message a bien été transmis et sera traité dans les plus brefs délais.</p>";
	}
?>
    </div>

    <footer>
		<?php include("bas_page.php"); ?>
    </footer>
</body>
</html>