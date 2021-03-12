<?php 

$liste=htmlspecialchars($_POST['liste']);
  $id=htmlspecialchars($_POST['id']);
  
   require 'config/connect.php';
       $req = $db->prepare('UPDATE listefonction1 SET liste=:liste WHERE id=:id ');
            $req->execute(array(
            
            'liste' => $liste,           
              'id' => $id ));
            
header('location:listefonction1.php');  
//echo "valider";
return true;
?>

