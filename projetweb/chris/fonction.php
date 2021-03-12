<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

$recuperation=$db->query('SELECT * FROM fonction1 ');

 //$url_img=basename($_FILES['photo']['name']);

if(isset($_GET['edit'])){
    $id_user = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM fonction1 where id=".$id_user);
   $user = $query2->fetch();
}

 ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
<head>
        <?php include('dimitri/head.php')?>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		<style type="text/css">
         .pro{
            width: 100%
         }      
        </style>
        
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<?php include('dimitri/topbar.php')?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		


        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <?php include('dimitri/navigation.php')?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2> </h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Features</a></li>
					<li class="breadcrumb-item active">Comment ça marche</li>
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">                        
                        <div class="card-header card-default" style="font-family: viking;">
                           Comment ça marche
                        </div>                                                 
                        <div class="card-body" > 
                            <form method="post" class="form-horizontal" action="<?php if(isset($_GET['edit'])){ echo "upfonction.php"; }else { echo "newfonction.php"; } ?>"  enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id']); }?>">
                            <input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">

                            <div class="row">
                            <div class="col-md-12">                             
                                <div class="form-group"></div></div>
                                  
                                <div class="col-md-6">
                                <div class="form-group ">
                                   <label>Image</label>
                                                <div class="fileinput-new" data-provides="fileinput">
                                                  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>                                          
                                                    <span class="btn btn-primary  btn-file">
                                                        <span class="fileinput-new">Select</span>
                                                        <span class="fileinput-exists">Change</span>
                                                         <input  type="file"  name="photo" value="<?php if(isset($_GET['edit'])){ echo($user['photo']); }?>"> 
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                </div>
                                </div>  
                                <div class="col-md-6">
                                 <div class="form-group" >
                                    <br>
                                       <img src="images/<?php if(isset($_GET['edit'])){echo($user['photo']);} ?>" width="200" class="mar-btm margin-b-10 circle-border" alt="">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                <div class="form-group ">
                                	
                                    <input type="text" class="form-control" name="titre" value="<?php if(isset($_GET['edit'])){ echo($user['titre']); }?>" placeholder="Entrer le Titre">
                                </div>
                                </div>  
								<div class="col-md-6">
                                 <div class="form-group">
										
										<input type="text" placeholder="Entrer le Texte" name="texte" value="<?php if(isset($_GET['edit'])){ echo($user['texte']); }?>" class="form-control">
									</div>
                                </div>                                
                                </div>
                                <div class="clearfix">                                    

                                     <input class="btn btn-primary " type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer');}?>" />
                                </div>
                                </div>
                                 <div class="card-body col-md-12">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>IMAGES</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 70px;padding-right: 70px;">
                                                <strong>TITRE</strong>
                                            </th>
                                            <th class="text-center"  style="padding-left: 80px;padding-right: 80px;">
                                                <strong>TEXTE</strong>
                                            </th>                                           
                                        
                                            <th class="text-center" style="padding-left: 30px;padding-right: 30px;">
                                                <strong>ACTION</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td><?=$ligne['id'];?></td>
                                            <td><img class="pro" src="images/<?=$ligne['photo'];?>"></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['titre'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['texte'];?></td>                                           
                                            
                                            <td class="text-center">

                                                <a type="button" href="fonction.php?edit=<?= $ligne['id'] ?>" class="btn btn-sm btn-success" ><i class="fa fa-edit"></i></a>                                               

                                               <a type="button" href="deletefonction.php?id=<?= $ligne['id'] ?>" onclick="return delele()" class="btn btn-sm btn-danger" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                              
                                            </td>
                                        </tr>  
                                        <?php } ?>
                                    </tbody>

                                    
                                </table>
                        </div> 
                            </form>
                               
					  </div>		  
                                            
                                               
                    </div>
                </div>
            </div>           

          <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

			
					  


        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script><script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
        function delele(){

        var del=confirm("voulez vous supprimer cet element ?");
        if (del==true){
          header("location:fonction.php");
        }
        return del;
        }

        </script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
</html>