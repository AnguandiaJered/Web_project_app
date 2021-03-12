<?php 
  include 'config/connect.php';

  if (empty($_SESSION['user'])) {
    header('location:page-login.php');
  }

 $recuperation = $db->query('SELECT * FROM team');

  if(isset($_GET['id'])){
	 	$id= $_GET['id'];

		$query2 = $db->query("SELECT * FROM team where id=".$id);
		$team = $query2->fetch();
  }
 ?>
<!DOCTYPE html>
<html lang="en">
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
		<?php include('dimitri/side.php')?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

			<?php include('dimitri/navigation.php')?>
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
				

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                           Team
                        </div>
                        <div class="card-body">
                           
							<div class="row">
								<div class="col-md-6">
							<form  method="POST" action="modifteam.php" enctype="multipart/form-data">
								<input type="hidden" name="id_t" value="<?php if($_GET['id']){echo($team['id']);} ?>">
									<div class="form-group">
										<label>Nom complet</label>
								    <input type="text" class="form-control" value="<?php if($_GET['id']){echo($team['nom']);} ?>" id="firstname" name="nom" placeholder=" Dimiti_kam" />
							      </div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Titre</label>
								    <input type="text" class="form-control" value="<?php if($_GET['id']){echo($team['titre']);} ?>" id="titre"  name="Titre" placeholder="Titre" />
							      </div>
							      
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Description</label>
								    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($team['description']);} ?>" name="Description" placeholder="Description" />
							      </div>
							    </div>
							    <div class="col-md-6">
									<div class="form-group">
										<label>URL:Facebook</label>
								    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($team['facebook']);} ?>" name="fb" placeholder="facebook" />
							     </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>URL:twitter</label>
								    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($team['twitter']);} ?>" name="tw" placeholder="twitter" />
							      </div>
							    </div>
							    <div class="col-md-6">
									<div class="form-group">
										<label>URL:instagram</label>
								    <input type="text" class="form-control" id="description" value="<?php if($_GET['id']){echo($team['instagram']);} ?>" name="in" placeholder="instagram" />
							      </div>
							    </div>
							    <div class="col-md-6">   
			                            <div class="form-group">
			                                        
			                                        <div class="fileinput-new" data-provides="fileinput">
			                                          <div class="fileinput-preview" data-trigger="fileinput" style="width: 100px; height:100px;"></div>
			                                            <span class="btn btn-primary  btn-file">
			                                                <span class="fileinput-new">Select</span>
			                                                <span class="fileinput-exists">Change</span>
			                                                <input type="file" value="images<?php if($_GET['id']){echo($team['photo']);} ?>" id="image" name="PHOTO">
			                                            </span>
				                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
				                                       </div>
			                            </div>
			                             <button class="btn btn-primary" type="submit" name="id">MODIFIER</button>
			                     </div>
							    <div class="col-md-6">
										<div class="form-group">
	                                <img src="images/<?php if(isset($_GET['id'])){echo($team['photo']);} ?>" width="80" class="rounded-circle mar-btm margin-b-10 circle-border" alt="">
	                            	</div>
	                            </div>	 
	                      </form>

                        </div>

                    </div>
				</div>
				 </div>

			</div>
            </div>
			<?php include('dimitri/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End	 						-->
		<!-- ============================================================== -->



        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
        <!-- Validations -->
        
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-validations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:33 GMT -->
</html>