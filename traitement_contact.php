<!DOCTYPE HTML>
<html lang="fr">
<head>
	    <meta charset = "utf-8"/>
	    <link rel="stylesheet" type="text/css" href="styles.css" />
	    <title>Demande de contact</title>
    </head>
<body>
    <header>
	    <?php require("en_tete.php"); ?>
    </header>
	
	<nav>
	    <?php require("menu.php"); ?>
	</nav>

	<div id="inner">
	

<?php

	// Connexion BDD
	try{
    	$bdd = new PDO('mysql:host=localhost;dbname=aphios_website_contacts;charset=utf8', '****', '****', 
        	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
    	die('Erreur : ' . $e->getMessage());
	}

	// Fonctions
	function getData($data, $maxlen){
		if(isset($data) and !empty($data) and strlen($data) <= $maxlen){
			return $data;
		}else{
			return null;
		}
	}

	// Récupération et vérification des données
	$nom = getData($_POST['nom'], 50);
	$prenom = getData($_POST['prenom'], 50);
	$mail = getData($_POST['mail'], 80);
	if(!preg_match("#^[\w_.-]+@[\w_-]+\.[a-z]{1,10}$#iU", $mail)){
	// same as if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
		$mail = null;
	}
	$msg = getData($_POST['message'], 3000);
	$demande = null;
	if(isset($_POST['demande']) and !empty($_POST['demande'])){
		if($_POST['demande'] === "site" or $_POST['demande'] === "projets" or $_POST['demande'] === "pro"){
			$demande = $_POST['demande'];
		}
	}

	// Requêtes
	$getUserInfoFromMail = $bdd->prepare('SELECT Id, Nom, Prenom FROM personnes WHERE Mail = ?');
	$updateName = $bdd->prepare('UPDATE personnes SET Nom=:nom WHERE Id=:idUser');
	$updateSurname = $bdd->prepare('UPDATE personnes SET Prenom=:prenom WHERE Id=:idUser');
	$addUser = $bdd->prepare('INSERT INTO personnes(Nom, Prenom, Mail) VALUES(:nom, :prenom, :mail)');
	$addMsg = $bdd->prepare('INSERT INTO messages(Id_personne, Nature_demande, Message, Date) VALUES(:idUser, :demande, :msg, now())');
	$getMsgId = $bdd->prepare('SELECT Id FROM messages WHERE Id_personne =:idUser AND Message=:msg');

	// Envoi à la bdd
	// Si on a le $mail :
	if($mail){
		// Enregistrement des données sur la personne
		$getUserInfoFromMail->execute(array($mail));
		$userInfo = $getUserInfoFromMail->fetch();
		$getUserInfoFromMail->closeCursor();
		if(!$userInfo){
			$addUser->execute(array('nom'=>$nom, 'prenom'=>$prenom, 'mail'=>$mail));
			$addUser->closeCursor();
			$getUserInfoFromMail->execute(array($mail));
			$userInfo = $getUserInfoFromMail->fetch();
			$getUserInfoFromMail->closeCursor();
		}
		$idUser = $userInfo['Id'];
		// Mise à jour des données de la personne
		if($nom and $userInfo['Nom'] != $nom){
			$updateName->execute(array('nom'=>$nom, 'idUser'=>$idUser));
			$updateName->closeCursor();
		}
		if ($prenom and $userInfo['Prenom'] != $prenom){
			$updateSurname->execute(array('prenom'=>$prenom, 'idUser'=>$idUser));
			$updateSurname->closeCursor();	
		}
		if($msg){
			//Enregistrement du message
			$addMsg->execute(array('idUser'=>$idUser, 'demande'=>$demande, 'msg'=>$msg));
			$addMsg->closeCursor();
			$getMsgId->execute(array('idUser'=>$idUser, 'msg'=>$msg));
			$noMsg = $getMsgId->fetch();
			$noMsg = $noMsg['Id'];
			$getMsgId->closeCursor();
		} 
	}

	// Affichage du message à l'utilisateur
    if($mail and $msg and $noMsg){
		if($prenom){
			echo "<p class='msg_form'>Bonjour" . htmlspecialchars($prenom) . "</p>";
		}else{
			echo "<p class='msg_form'>Bonjour</p>";
		}
		echo "<p class='msg_form'>Votre message a bien été enregistré sous le numéro " . htmlspecialchars($noMsg) . " et sera traité dans les plus brefs délais. Une copie de votre message vient également de vous être adressée par mail.</p>";
		$autoMail = wordwrap($msg, 70, "\r\n");
		$mailHeaders = "From: aphios.web@gmail.com\r\nReply-To: aphios.web@gmail.com\r\nX-Mailer: PHP".phpversion();
		$headers = array(
			'From' => 'aphios.web@gmail.com',
			'Reply-To' => 'aphios.web@gmail.com',
			'Content-Type' => 'text/plain; charset=utf-8',
			'X-Mailer' => 'PHP/' . phpversion()
		);
		// Décommenter quand le site sera hébergé :
		//mail($mail, 'Message envoyé à Aphios Web', $autoMail, $headers);
		//mail('aphios.web@gmail.com', 'Mail automatique Aphios Website', 'Un nouveau contenu a été enregistré dans la base de données.', $headers);
	}else{
		echo "<p class='msg_form'>Bonjour, votre message n'a pu être transmis. Vérifiez que vous avez bien renseigné un email et un message corrects.</p>";
	}

?>
    </div>

    <footer>
		<?php require("bas_page.php"); ?>
    </footer>

	<script src="aria_dropdown_menu.js"></script>
</body>
</html>