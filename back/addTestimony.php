<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../index.php');
    exit();
}

?><!DOCTYPE html>
<html>
<head>
	<?php include('../include/head.php'); ?>
	<link rel="stylesheet" href="">
	<title>Ajouter un Témoignage</title>
</head>
<body>
	<?php include('../include/header.php'); ?>
	<main>
		<section class="item">
			<h1>Ajouter un Témoignage</h1>
			<form method="POST" action="core/addTestimony.php" enctype="multipart/form-data">
				<p class="addFile">
                    <label for="more">Image</label>
                    <input type="file" name="fichier" id="more" required>
                    <div id="display-image"></div>
                </p>
				<p>
					<textarea type="text" name="body" placeholder="Votre contenu" required></textarea>
				</p>
				<p>
					<input type="text" name="name" placeholder="Prénom" required>
				</p>
				<p>
					<input type="text" name="entreprise" placeholder="Votre entreprise" required>
				</p>
				<p>
					<button type="submit">Valider</button>
				</p>
			</form>
		</section>
	</main>
</body>
</html>