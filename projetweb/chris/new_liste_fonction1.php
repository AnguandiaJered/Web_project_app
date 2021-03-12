<?php 
  include 'config/connect.php';

  if (isset($_POST['liste']) && ! empty($_POST['liste'])) {
  	
  				$liste=htmlspecialchars($_POST['liste']);

  				$req=$db->prepare('INSERT INTO listefonction1 (liste) VALUES(:liste)');
  				$req->execute(array(
                  ':liste' => $liste ));
  				if ($req) {
  					header('location:listefonction1.php');
  				}else{
  					echo "err";
  				}

  			}
  		 
 ?>