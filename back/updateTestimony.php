<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location: /');
    exit();
}

$read = $db->prepare('SELECT * FROM testimony WHERE id = :id');

$read->execute([
	':id' => $_GET['id']
]);

$modif = $read->fetch();

?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="css/backoffice.css">
    <?php include('../include/head.php'); ?>
	<title>Modifier un témoignage</title>
</head>
<body>
    <main>
        <div class="testimony-form-container">
            <?php include('../include/navAdmin-testimony.php'); ?> 
            <section class="item new-posts-form">
                <form method="POST" action="core/updateTestimony.php" enctype="multipart/form-data">
                    <h1>Modifier un témoignage</h1>  
                    <p>
                        <input type="hidden" name="id" value="<?= $modif['id'] ?>">
                    </p>
                    <p class="addFile">
                        <label for="more">Ajout de l'image
                            <span class="iconify" data-icon="bx:bx-image-add"></span>
                            <div id="display-image"></div>
                        </label>
                        <input type="file" name="fichier" id="more" onchange="getImage(this.value);" required>
                    </p>
                    <p class="addContent">
                        <label>Contenu</label>
                        <textarea type="text" name="body" placeholder="Votre contenu" required><?= $modif['body'] ?></textarea>
                    </p>
                    <p class="input-name">
                        <label>Prénom</label>
                        <input type="text" name="name" placeholder="Prénom" value="<?= $modif['name'] ?>" required>
                    </p>
                    <p class="button-bo">
                        <button type="submit">Valider</button>
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