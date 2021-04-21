<?php
include 'database.php';
extract($_POST);
$req=$db->prepare("INSERT  into ajax(name,email,subject,feedback) values
(:name,:email,:subject,:feedback)");
$req->execute(array(
    'name'=>$name,
    'email'=>$email,
    'subject'=>$subject,
    'feedback'=>$feedback
));
?>