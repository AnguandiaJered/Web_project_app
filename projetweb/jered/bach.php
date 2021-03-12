<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation =$db->query('SELECT * FROM about');

 if(isset($_GET['edit'])){
    $id_box = $_GET['edit'];

   $query2 = $db->query("SELECT * FROM about where id=".$id_box);
   $user = $query2->fetch();
}

// if(isset($_POST['action']) && $_POST['action']=="edit" ){
//  $req = $db->prepare('UPDATE banner1 SET titre=:titre,texte=:texte,photo=:photo,date_post= now() WHERE id_banner1=:id');
//     $req->execute(array(
//         'photo' => $_FILES['photo']['name'],
//         'titre' => $_POST['titre'],
//         'texte' => $_POST['texte'],
//         'date_post' => $_POST['date_post'],
//         'id' => $_POST['id'],
//      ));

//    header('location:ajout-box.php');
// }

if (empty($_SESSION['user'])) {
    header('location:page-login.php');
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
            width: 50%
         }  
         #bt{
             margin-top:-160px;
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
			   <h2>Banner</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Banner</a></li>
					<li class="breadcrumb-item active">Banner1</li>
				</ol>
			</div>
		</div>
        
        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        
                        <div class="card-body">
                        <form method="POST" action="<?php if(isset($_GET['edit'])){ echo "updatebach.php"; }else { echo "addbach.php"; } ?>" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php if(isset($_GET['edit'])){ echo($user['id']); }?>">
							<input type="hidden" name="action" value="<?php if(isset($_GET['edit'])){ echo('edit'); } else {echo "insert";}?>">
							<div class="row">
                            <div class="form-group offset-1">
										<label>Featured Image</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file"  name="photo" value="<?php if(isset($_GET['edit'])){ echo($user['photo']); }?>">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
                                    </div>
								<div id="bt" class="col-md-6 offset-4">
									<div class="form-group">
								    <input type="text" class="form-control" name="titre" value="<?php if(isset($_GET['edit'])){ echo($user['titre']); }?>" placeholder="Titre" />
							      </div>
							      
								</div>
								<div class="col-md-6 offset-4">
									<div class="form-group">
								    <input type="texte" class="form-control"  name="texte" value="<?php if(isset($_GET['edit'])){ echo($user['texte']); }?>" placeholder="Texte" />
							      </div>
							      
								</div>
							      <input class="btn btn-primary offset-8" type="submit" name="submit" value="<?php if(isset($_GET['edit'])){ echo('Update'); } else { echo('Enregistrer'); }?> " />  
								</div>
								</div>
							</div>

						</form>
                        </div>
                    </div>
				</div>


				<div class="col-sm-12">

					<div class="card">
						<div class="card-header card-default">
                           Banner list
                        </div>
                        <div class="card-body">
						<div class="table-responsive">
							<table class="table table-stripped table-bordered">
								<thead>
									<th>#</th>
                                    <th>Images</th>
									<th>Titre</th>
									<th>Texte</th>
									<th>action</th>
								</thead>
                                <?php while ($ligne = $recuperation->fetch()) { ?>
								<tbody>
									
										<tr>
                                        <td><?=$ligne['id'];?></td>
                                            <td><img class="pro" src="images/<?=$ligne['photo'];?>"></td>
											<td><?php echo($ligne['titre']); ?></td>
											<td><?php echo($ligne['texte']) ?></td>
											<td><a class="btn btn-primary" href="bach.php?edit=<?php  echo($ligne['id']) ?>" >Editer</a></td>
                                        </tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
						</div>
					</div>

                </div>
            </div>
			
			
          <?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

				<!-- <div class="modal fade" id="loginModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Ajouter un box</h5>
					  </div>
					  
					</div>
				  </div>
				</div> -->

            	<div class="modal fade" id="signupModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						 <h5 class="modal-title" id="exampleModalLabel">Login Modal</h5>
					  </div>
                    <div class="modal-body">
                       
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Reset Password">
                                        </div>
                                    </div>
                                </div>


                                <div class="clearfix">
                                   <div class="checkbox checkbox-inline checkbox-primary">
													<input id="checkbox11" type="checkbox" checked="">
													<label for="checkbox11"> Option one </label>
												</div>
                                    <button type="button" class="btn btn-primary float-right">Signup</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p>Already have an Account, <a href='#'>Login</a></p>
                            </div>
              
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Text heading</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desireWe denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire  
                        </p><br>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-lg">Get free trail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal text end-->

        <!--modal of video-->
        <div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="vimeo-video" src="#"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="mySmallModalLabel">Modal Small</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myModalLabel">Modal Large</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog" aria-labelledby="myDefaultModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <h5 class="modal-title" id="myDefaultModalLabel">Modal Default Size</h5>
                    </div>
                    <div class="modal-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

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