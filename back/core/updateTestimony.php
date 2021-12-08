<?php

include('../../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location: /');
    exit();
}

$_POST['body'] = trim($_POST['body']);
$_POST['name'] = trim($_POST['name']);

if(isset($_FILES['fichier']) AND !empty($_FILES['fichier']['name'])){
    
    $read = $db->prepare('SELECT file FROM testimony WHERE id = :id');
    $read->execute([
        ':id' => $_POST['id']    
    ]);
    $modif = $read->fetch();
    $delet = $modif['file'];
    if(!empty($delet)){
        unlink('../data/'.$delet);
    }

    $tExtOk = ['png','jpg','jpeg','JPG'];
    $tFilename = explode('.', $_FILES['fichier']['name']);
    $extFile = array_pop($tFilename);
    if(in_array($extFile, $tExtOk)){
        $newName = 'pic-'.time().'.'.$extFile;
        $move = move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);
        if($move){
            $modFile = $db->prepare('UPDATE testimony SET file = :file WHERE id = :id');
            $modFile->execute([
                ':file' => $newName,
                ':id' => $_POST['id']    
            ]);
            header('Location: ../testimony.php?success'); 
        }else{
            flash_in('error', 'Erreur durant l\'importation');
            header('Location: ../updateTestimony.php');
            exit();
        }
    }else{
        header('Location: ../updateTestimony.php?error');
        exit();
    }
}

$error = false;

if($error){
    header('Location: ../updateTestimony.php?error');
    exit();
}else{

    $mod = $db->prepare('UPDATE testimony SET body = :body, name = :name WHERE id = :id');
    $mod->execute([
        ':id' => $_POST['id'],
        ':body' => $_POST['body'],
        ':name' => $_POST['name']
    ]);
    header('Location: ../testimony.php?success');
    exit();
}