<?php 
include 'config/connect.php';
// echo($_GET['id']);
if (isset($_GET['id'])) {
	$req=$db->prepare('DELETE FROM fonction1 WHERE id=:id');

	$req->execute(array(
	'id'=> $_GET['id'] ));

	if ($req) {
		header('location:fonction.php');  
		//echo "valide";
	}else{
		echo "err";
	}
}

