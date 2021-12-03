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
	<link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="css/backoffice.css">
	<?php include('../include/head.php'); ?>
</head>
<body>
	<main>
		<div class="login-form-container">
			<?php include('../include/navAdmin.php'); ?>
			<section class="item new-posts-form">
				<h1>Nouveau post</h1>
				<form method="POST" action="core/addPost.php" enctype="multipart/form-data">
					<p class="addFile">
						<label for="more">Image</label>
						<input type="file" name="fichier" id="more" required>
						<div id="display-image"></div>
					</p>
					<p class="addContent">
						<label>Contenu</label>
						<textarea type="text" name="body" placeholder="Votre contenu" required></textarea>
					</p>
					<p>
						<button type="submit">Valider</button>
					</p>
				</form>
			</section>
		</div>
	</main>
</body>
</html>