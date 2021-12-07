<?php

include('../../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location: ../../index.php');
    exit();
} else {
    $read = $db->prepare('SELECT * FROM post');
    $read->execute([]);
    $modif = $read->fetch();
    $delet = $modif['file'];
    if(!empty($delet)){
        unlink('../data/'.$delet);
    }

    $del = $db->prepare('DELETE FROM post LIMIT 1');
    $del->execute([
        ':id' => $_GET['id']    
    ]);
}

$_POST = array_map('trim', $_POST);

if(empty($_POST['name'])){	
	flash_in('error', 'Le contenu ne peut pas être vide.');
	header('Location: ../addPost.php');
	exit();
}
if(empty($_POST['body'])){	
	flash_in('error', 'Le contenu ne peut pas être vide.');
	header('Location: ../addPost.php');
	exit();
}
if(empty($_POST['social'])){	
	flash_in('error', 'Le contenu ne peut pas être vide.');
	header('Location: ../addPost.php');
	exit();
}

$error = false;
if($_FILES['fichier']['error'] != 0){
    $error = true;
}
$tExtOk = ['png','jpg','jpeg','JPG'];
$tFilename = explode('.', $_FILES['fichier']['name']);
$extFile = array_pop($tFilename);

if(!in_array($extFile, $tExtOk)){
    $error = true;
}

if($error){
    header('Location: ../addPost.php?error');
    exit();
}else{

    $newName = 'pic-'.time().'.'.$extFile;
    move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);

    $add = $db->prepare('INSERT INTO post (file, name, body, social) VALUES (:file, :name, :body, :social)');
    $add->execute([
        ':file' => $newName,
        ':name' => $_POST['name'],
        ':body' => $_POST['body'],
        ':social' => $_POST['social']
    ]);
    header('Location: ../addPost.php?success');
    exit();
}