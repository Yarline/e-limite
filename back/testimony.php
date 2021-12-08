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
    <main>
        <div class="testimony-form-container" style="height: fit-content;">
        <?php include('../include/navAdmin-testimony.php'); ?> 
            <section class="item new-posts-form">
                <div class='heading'>
                    <h1>Témoignages</h1>
                    <a href="addTestimony.php" class="btn filled-btn">Poster</a>
                </div>
                <div class="testimony_container">
                <?php foreach ($tTestimony as $value) { ?>
                <div class="cardTestimonyCrud">
                <figure class="show_testimony">
                    <img src="data/<?= $value['file']?>" alt="">
                </figure>
                <p class="name"><?= $value['name'] ?></p>
                    <div class='icon'>
                        <a href="updateTestimony.php?id=<?= $value['id']?>">Modifier</a>
                        <a href="core/deletTestimony.php?id=<?= $value['id']?>">Supprimer</a>
                    </div>
                </div>
                <?php } ?>
                </div>
            </section>
        </div>
    </main>
</body>
</html>