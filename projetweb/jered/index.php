<?php 
  include 'config/connect.php';
    

  if (empty($_SESSION['user'])) {
  	header('location:page-login.php');
  }

  $requete=$db->query("SELECT COUNT(*) AS id FROM partenaire");

//   $requete=$db->query("SELECT COUNT(*) AS id FROM partenaire");
  $requete1=$db->query("SELECT COUNT(*) AS ID_ADMIN FROM admin");
  $requete2=$db->query("SELECT COUNT(*) AS ID_IMAGE FROM image");
  $requete3=$db->query("SELECT COUNT(*) AS id FROM team");




 ?>
<?php
// 	include ("progressbar.php");
  
// //Initialize(x,y,largeur,hauteur,'couleur bordure','couleur du pourcentage','couleur de la barre de progression');
//   Initialize(50,60,200,30,'#000000','#FFCC00','#006699');  // initialisation de la barre de progression
//   for ($i=0;$i<=100;$i++)
//   {
//   ProgressBar($i);   // réaffichage de la barre avec le nouvel indice
//   //***********************
//   // ici on mets notre code
//   for ($j=0;$j<=100000;$j++)  {$p=1;} // dans cette exemple, j'ai une boucle de retardement
//   //**************************
//   }
?>






<!DOCTYPE html>
<html lang="en">

<head>
        <?php include('dimitri/head.php');?>
		
		<?php include('dimitri/link.php');?>
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
		<!--<?php include('dimitri/side.php')?>-->
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
       <?php include('dimitri/navigation.php')?>
			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Accueil</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Accueil</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Utilisateurs</h2>
								<?php while($user=$requete1->fetch()){?>
								<p class="text-muted">Total Utilisateurs</p>
								<span class="float-right text-primary widget-r-m"><?=$user['ID_ADMIN']?></span>
							</div>
							<div class="progress margin-b-10  progress-mini">
								<div style="width:<?=$user['ID_ADMIN']?>%;" class="progress-bar bg-primary"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0"><?=$user['ID_ADMIN']?>%</p>
							<?php }?>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Equipe</h2>
								<?php while($team=$requete3->fetch()){ ?>
								<p class="text-muted">Total Equipe</p>
								<span class="float-right text-indigo widget-r-m"><?= $team['id']?></span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:<?= $team['id']?>%;" class="progress-bar bg-indigo"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0"><?= $team['id']?>%</p>
							<?php } ?>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Images</h2>
								<?php while($image=$requete2->fetch()){ ?>
								<p class="text-muted">Total Images</p>
								<span class="float-right text-success widget-r-m"><?=$image['ID_IMAGE'] ?></span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:<?=$image['ID_IMAGE'] ?>%;" class="progress-bar bg-success"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0"><?=$image['ID_IMAGE'] ?>%</p>
							<?php } ?>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">partenaires</h2>
								<?php while($partenaire=$requete->fetch()){ ?>
								<p class="text-muted">Total partenaires</p>
								<span class="float-right text-warning widget-r-m"><?=$partenaire['id']?></span>
								
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:<?=$partenaire['id']?>%;" class="progress-bar bg-warning"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0"><?=$partenaire['id']?>%</p>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
			
			
				
			<?php include('dimitri/footer.php')?>

        </section>
       

		
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
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
		
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:14 GMT -->
</html>