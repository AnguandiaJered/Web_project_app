<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

$recuperation=$db->query('SELECT * FROM listefonction1 ');

 //$url_img=basename($_FILES['photo']['name']);

if(isset($_GET['edit'])){
    $id_user = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM listefonction1 where id=".$id_user);
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
                        <div class="card-header card-default"  style="font-family: viking;">
                           listes
                        </div>
                                                 
                        <div class="card-body"> 
                          <form method="post" class="form-horizontal" action="<?php if(isset($_GET['edit'])){ echo "up_liste_fonction1.php"; }else { echo "new_liste_fonction1.php"; } ?>"  enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id']); }?>">
                            <input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <!-- <label>Liste</label> -->
                                        <input type="text" placeholder="Entrer le paragraphe" required="" name="liste" value="<?php if(isset($_GET['edit'])){ echo($user['liste']); }?>" class="form-control">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input class="btn btn-primary " type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer');}?>" />
                                  </div>
                                </div>

                        <div class=" col-md-12">
                            <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Liste</strong>
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
                                            
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['liste'];?></td>
                                            <td class="text-center" >

                                                <a type="button" href="listefonction1.php?edit=<?= $ligne['id'] ?>" class="btn btn-sm btn-success" ><i class="fa fa-edit"></i></a>

                                                <a type="button" href="deleteliste1.php?id=<?= $ligne['id'] ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer?'));" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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

        
   
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:33 GMT -->
</html>