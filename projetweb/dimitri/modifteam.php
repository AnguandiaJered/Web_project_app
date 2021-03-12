<?php


if(isset($_POST['id'])){

    function imgup()
   {
     
     $url_img=basename($_FILES['PHOTO']['name']);
     if($url_img!=""){
      $verif_img=getimagesize($_FILES['PHOTO']['tmp_name']);
    
     if (isset($_FILES['PHOTO']) AND $_FILES['PHOTO']['error']== 0){
   if ($_FILES['PHOTO']['size'] <= 2000000){
   
   
   $infosfichier = pathinfo($_FILES['PHOTO']['name']);
   $extension_upload = $infosfichier['extension'];
   $extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
   // if (in_array($extension_upload,$extensions_autorisees)){
     if ($verif_img AND $verif_img[2] < 4){
   if(move_uploaded_file($_FILES['PHOTO']['tmp_name'],'images/'.$url_img)){
      require 'config/connect.php';
     
               $req=$db->prepare("UPDATE team SET nom=:nom,titre=:titre,description=:description,photo=:photo,facebook=:facebook,twitter=:twitter,instagram=:instagram WHERE id=:id");
               $req->execute(array(
                'id' => $_POST['id_t'],
               'nom' => $_POST['nom'],
               'titre' => $_POST['Titre'],
               'description' =>$_POST['Description'],
               'photo' => $_FILES['PHOTO']['name'],
               'facebook' =>$_POST['fb'],
               'twitter' =>$_POST['tw'],
             'instagram' =>$_POST['in']));
  
   header('location:ajout-Membre.php');  
//echo "valider";
return true;
   }
   
   }
   
         }
   
         else{
   
             unlink($_FILES['PHOTO']['tmp_name']);
             unset($_FILES['PHOTO']);
   
         }
       }
   
   }
   else{
         require 'config/connect.php';
         $req=$db->prepare("UPDATE team SET nom=:nom,titre=:titre,description=:description,facebook=:facebook,twitter=:twitter,instagram=:instagram WHERE id=:id");
               $req->execute(array(
                'id' => $_POST['id_t'],
               'nom' => $_POST['nom'],
               'titre' => $_POST['Titre'],
               'description' =>$_POST['Description'],
                'facebook' =>$_POST['fb'],
               'twitter' =>$_POST['tw'],
              'instagram' =>$_POST['in']));
   
   header('location:ajout-Membre.php');
   return true;
   }
   }
   
   
   
   if(imgup()){
   
   
   
   }
   // var_dump($_FILES);
   
    
    
    
  }
?>





	