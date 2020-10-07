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

<?php
    if (isset($_POST['prenom']) and (strlen($_POST['prenom'])>0)){
		echo "<p class='msg_form'>Bonjour ".htmlspecialchars($_POST['prenom']).", votre message a bien été transmis 
		et sera traité dans les plus brefs délais.</p>";
	} else {
		echo "<p class='msg_form'>Bonjour, votre message a bien été transmis et sera traité dans les plus brefs délais.</p>";
	}
?>
<footer>
		<?php include("bas_page.php"); ?>
    </footer>
</body>
</html>