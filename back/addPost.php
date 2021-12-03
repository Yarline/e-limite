<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../index.php');
    exit();
}

?>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<!DOCTYPE html>
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
						<label for="more">Ajout de l'mage
							<span class="iconify" data-icon="bx:bx-image-add"></span>
							<div id="display-image"></div>
						</label>
						<input type="file" name="fichier" id="more" onchange="getImage(this.value);" required>			
					</p>
					<p class="addContent">
						<label>Contenu</label>
						<textarea type="text" name="body" placeholder="Votre contenu" required></textarea>
					</p>
					<p class="button-bo">
						<button class="btn-bo" type="submit">Valider</button>
					</p>
				</form>
			</section>
		</div>
	</main>
<script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous">
</script>
<script type="text/javascript">
	function getImage(imageName){
		var newimg=imageName.replace(/^.*\\/,"");
		$('#display-image').html(newimg);
	}
</script>
</body>
</html>