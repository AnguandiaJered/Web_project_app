<?php 
  include 'config/connect.php';

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation = $db->query('SELECT * FROM team');

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
			   <h2>Equipe</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Equipe</a></li>
					<li class="breadcrumb-item active">Ajouter Membre</li>
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                           
                            <div class="float-right mt-10">
								<a href="#" class="btn btn-success margin-r-5 btn-rounded box-shadow btn-icon"data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Add Member</a>
						    </div>
                        </div>
                                                 
                              
                                            
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            
                                            <th class="text-center">
                                                <strong>NOM</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TITRE</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>DESCRIPTION</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>FACEBOOK</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>TWITTER</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>INSTAGRAM</strong>
                                            </th>
                                           
                                            <th class="text-center">
                                                <strong>ACTION</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td><?=$ligne['id'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['nom'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['titre'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['description'];?></td>
                                             <td class="pt-3-half" contenteditable="true"><?=$ligne['facebook'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['twitter'];?></td>
                                            <td class="pt-3-half" contenteditable="true"><?=$ligne['instagram'];?></td>
                                           
                                            
                                            <td class="text-center">
                                               <a type="button" href="modif-team.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                               <a type="button" href="del_team.php?id=<?= $ligne['id'] ?>"  onclick="return(confirm('Voulez-vous supprimer?'));" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
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

				<div class="modal fade" id="loginModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
					  </div>
					  <div class="modal-body">
                            <form  method="POST" action="TEAM.php" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                	<label>Name</label>
                                    <input type="text" class="form-control" name="NAME" placeholder="Text">
                                </div>
                                 <div class="form-group">
										<label>Title</label>
										<input type="text" placeholder="Text" name="TITRE" class="form-control form-control-rounded">
								</div>
                                <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" placeholder="Text" name="DESCRIPTION"  class="form-control form-control-rounded">
                                </div>
                                <div class="form-group">
                                        <label>URL:Facebook</label>
                                        <input type="text" placeholder="Text" name="fb"  class="form-control form-control-rounded">
                                </div>
                                <div class="form-group">
                                        <label>URL:Twitter</label>
                                        <input type="text" placeholder="Text" name="tw"  class="form-control form-control-rounded">
                                </div>
                                <div class="form-group">
                                        <label>URL:Instagram</label>
                                        <input type="text" placeholder="Text" name="in"  class="form-control form-control-rounded">
                                </div>
                                <div class="form-group">
                                        <label>Images</label>
                                         
                                        <div class="fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-preview" data-trigger="fileinput" style="width: 100px; height:100px;"></div>
                                            <span class="btn btn-primary  btn-file">
                                                <span class="fileinput-new">Select</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" id="image" name="PHOTO">
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    
                                </div>
                                <div class="clearfix">
                                    <input class="btn btn-primary float-right" type="submit" name="" value="AJOUTER">
                                </div>
                            </form>
                            
                           
					  </div>
					</div>
				  </div>
				</div>

            	

        
        <!--modal text end-->

        <!--modal of video-->
       

       

        
       

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