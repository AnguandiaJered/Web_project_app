<?php
 include 'config/connect.php';
 if (isset($_POST['liste']) && ! empty($_POST['liste'])) {
    $liste=htmlspecialchars($_POST['liste']);

    $req=$db->prepare('INSERT INTO `about1`(`paragraphe`) VALUES(:paragraphe)');
    $req->execute(array(
        'paragraphe'=>$liste
    ));

    if ($req) {
        header('location:liste.php');
    }
 }
?>