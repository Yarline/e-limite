<?php 

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location: /');
    exit();
}

$testimony = $db->prepare('SELECT * FROM testimony');
$testimony->execute();

$tTestimony = $testimony->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
    <?php include('../include/head.php'); ?>
    <title>Témoignages</title>
    <link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="css/backoffice.css">
</head>
<body>
    <?php include('../includes/header.php'); ?> 
    <main>
        <div class="login-form-container">
        <?php include('../include/navAdmin.php'); ?> 
            <section class="item new-posts-form">
                <div class='heading'>
                    <h1>Témoignages</h1>
                    <a href="addTestimony.php" class="btn filled-btn">Poster</a>
                </div>
                <?php foreach ($tTestimony as $value) { ?>
                <figure class="show_testimony">
                    <img src="data/<?= $value['file']?>" alt="">
                    <figcaption><?= $value['name'] ?></figcaption>
                    <figcaption><?= $value['entreprise'] ?></figcaption>
                    <figcaption><?= $value['body'] ?></figcaption>
                    <div class='icon'>
                        <a href="updateTestimony.php?id=<?= $value['id']?>">Modifier</a>
                        <a href="core/deletTestimony.php?id=<?= $value['id']?>">Supprimer</a>
                    </div>
                </figure>
                <?php } ?>
            </section>
        </div>
    </main>
</body>
</html>