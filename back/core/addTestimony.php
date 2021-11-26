<?php

include('../../config/settings.php');

if (!isset($_SESSION['user'])) {
    flash_in('error', 'Tu n\'as pas le droit d\'ête là');
    header('location:' . URL . '../../public/index.php');
    exit();
}

$_POST = array_map('trim', $_POST);

if(empty($_POST['body'])){	
	flash_in('error', 'Le titre ne peut pas être vide.');
	header('Location: ../addPost.php');
	exit();
}
if(empty($_POST['name'])){	
	flash_in('error', 'La date ne peut pas être vide.');
	header('Location: ../addPost.php');
	exit();
}
if(empty($_POST['entreprise'])){	
	flash_in('error', 'La date ne peut pas être vide.');
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
    header('Location: ../addTestimony.php?error');
    exit();
}else{

    $newName = 'pic-'.time().'.'.$extFile;
    move_uploaded_file($_FILES['fichier']['tmp_name'],'../data/'.$newName);

    $add = $db->prepare('INSERT INTO testimony (file, body, name, entreprise) VALUES (:file, :body, :name, :entreprise)');
    $add->execute([
        ':file' => $newName,
        ':body' => $_POST['body'],
        ':name' => $_POST['name'],
        ':entreprise' => $_POST['entreprise']
    ]);
    header('Location: ../addTestimony.php?success');
    exit();
}