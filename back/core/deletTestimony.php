<?php

include('../../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location: /');
    exit();
}else{

    $read = $db->prepare('SELECT * FROM testimony WHERE id = :id');
    $read->execute([
        ':id' => $_GET['id']    
    ]);
    $modif = $read->fetch();
    $delet = $modif['file'];
    if(!empty($delet)){
        unlink('../data/'.$delet);
    }

    $del = $db->prepare('DELETE FROM testimony WHERE id = :id LIMIT 1');

    $del->execute([
        ':id' => $_GET['id']    
    ]);

    header('Location: ../testimony.php?success');
    exit();
}