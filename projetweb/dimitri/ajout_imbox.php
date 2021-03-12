<?php  

 function imgup()
{
 $url_img=basename($_FILES['IMAGE']['name']);

$verif_img=getimagesize($_FILES['IMAGE']['tmp_name']);

  if (isset($_FILES['IMAGE']) AND $_FILES['IMAGE']['error']== 0){
if ($_FILES['IMAGE']['size'] <= 2000000){


$infosfichier = pathinfo($_FILES['IMAGE']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['IMAGE']['tmp_name'],'images/'.$url_img)){
   require 'config/connect.php';
  
            $req = $db->prepare('INSERT INTO image_box(IMAGE) VALUES (:IMAGE)');
            $req->execute(array(
          'IMAGE' => $_FILES['IMAGE']['name']
           ));
        

header('location:image.php');
return true;

}

}


      }

      else{

          unlink($_FILES['IMAGE']['tmp_name']);
          unset($_FILES['IMAGE']);

      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>