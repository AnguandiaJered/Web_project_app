<?php  


if(isset($_POST['id'])){

    function imgup()
   {
     
     $url_img=basename($_FILES['ICON']['name']);
     if($url_img!=""){
      $verif_img=getimagesize($_FILES['ICON']['tmp_name']);
    
     if (isset($_FILES['ICON']) AND $_FILES['ICON']['error']== 0){
   if ($_FILES['ICON']['size'] <= 2000000){
   
   
   $infosfichier = pathinfo($_FILES['ICON']['name']);
   $extension_upload = $infosfichier['extension'];
   $extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
   // if (in_array($extension_upload,$extensions_autorisees)){
     if ($verif_img AND $verif_img[2] < 4){
   if(move_uploaded_file($_FILES['ICON']['tmp_name'],'images/'.$url_img)){
      require 'config/connect.php';
     
               $req=$db->prepare("UPDATE BOX1 SET TITRE=:TITRE, DESCRIPTION=:DESCRIPTION, ICON=:ICON WHERE ID=:ID");
               $req->execute(array(
               'ID'=>$_POST['id_b'],
            'TITRE' =>$_POST['Titre'],
            'DESCRIPTION' =>$_POST['Description'],  
            'ICON' =>$_FILES['ICON']['name']));
  
  header('location:ajout-box.php');
     
// if ($req) {
//     echo ('valid');
//   }else{
//      echo "err";
//   }
return true;
   }
   
   }
   
         }
   
         else{
   
             unlink($_FILES['ICON']['tmp_name']);
             unset($_FILES['ICON']);
   
         }
       }
   
   }
   else{
         require 'config/connect.php';
         $req=$db->prepare("UPDATE BOX1 SET TITRE=:TITRE, DESCRIPTION=:DESCRIPTION WHERE ID=:ID");
               $req->execute(array(
                'ID'=>$_POST['id_b'],
            'TITRE' =>$_POST['Titre'],
            'DESCRIPTION' =>$_POST['Description']));
   
   header('location:ajout-box.php');
   return true;
   }
   }
   
   
   
   if(imgup()){
   
   
   
   }
   // var_dump($_FILES);
   
    
    
    
  } 

?>