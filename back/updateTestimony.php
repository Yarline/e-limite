<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../../index.php');
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
	<?php include('../includes/head.php'); ?>
    <link rel="stylesheet" href="back/css/backoffice.css">
	<title>Modifier un témoignage</title>
</head>
<body>
	<?php include('../includes/header.php'); ?>
    <main>
        <?php include('../includes/nav.php'); ?>
        <section class="item">
            <form method="POST" action="core/updateTestimony.php" enctype="multipart/form-data">
                <h1>Modifier un témoignage</h1>  
                <p>
                    <input type="hidden" name="id" value="<?= $modif['id'] ?>">
                </p>
				<p class="addFile">
                    <label for="more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg></label>
                    <input type="file" name="fichier" id="more" required>
                </p>
                <p>
					<textarea type="text" name="body" placeholder="Votre contenu" required><?= $modif['body'] ?></textarea>
				</p>
				<p>
					<input type="text" name="name" placeholder="Prénom" value="<?= $modif['name'] ?>" required>
				</p>
				<p>
					<input type="text" name="entreprise" placeholder="Votre entreprise" value="<?= $modif['entreprise'] ?>" required>
				</p>
				<p>
					<button type="submit">Valider</button>
				</p>
            </form>
        </section>
    </main>
</body>
</html>