<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM listefonction1 WHERE id=:id');

	$req->execute(array(
	'id'=> $_GET['id'] ));

	if ($req) {
		header('location:listefonction1.php');  
		//echo "valide";
	}else{
		echo "err";
	}
}
