<?php

include('../config/settings.php');

/*if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../../public/index.php');
    exit();
}*/

?><!DOCTYPE html>
<html>
<head>
	<?php include('../include/head.php'); ?>

	<title>Créer un compte</title>
</head>
<body>
	<?php include('../include/header.php'); ?>

	<form method="POST" action="core/adduser.php">
		<h1>Créer un compte</h1>

		<p>
			<label for="pseudo">Votre identifiant</label>
			<input type="text" name="name" placeholder="Votre identifiant" id="pseudo" required>
		</p>

		<p>
			<label for="pass">Votre mot de passe</label>
			<input type="password" name="password" placeholder="Votre mot de passe" id="pass" required>
		</p>

		<p>
			<label for="confirm">Confirmer votre mot de passe</label>
			<input type="password" name="confirmation" placeholder="Confirmer votre mot de passe" id="confirm" required>
		</p>

		<p>
			<button type="submit">Créer le compte</button>
		</p>
	</form>
</body>
</html>