<?php
 include 'database.php';
 extract($_POST);
$req=$db->prepare("INSERT INTO user(name,prenom,mail,password) values(:name,:prenom,:mail,:password)");
$req->execute(array(
    'name'=>$name,
    'prenom'=>$prenom,
    'mail'=>$mail,
    'password'=>$password
));
?>
