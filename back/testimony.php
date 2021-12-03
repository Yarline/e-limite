<?php 

include('../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../../index.php');
    exit();
}

$testimony = $db->prepare('SELECT * FROM testimony');
$testimony->execute();

$tTestimony = $testimony->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
    <?php include('../includes/head.php'); ?>
    <title>Témoignages</title>
</head>
<body>
    <?php include('../includes/header.php'); ?> 
    <main>
        <?php include('../includes/navAdmin.php'); ?>
            
            <section class='item'>
                
                <div class='heading'>
                    <h1>Témoignages</h1>
                    <a href="addTestimony.php">Poster</a>
                </div>
                <?php foreach ($tTestimony as $value) { ?>
                <figure>
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
        
    </main>
</body>
</html>