<?php 
   include 'config/connect.php';

   
   $url = $db->query('SELECT * FROM url');
  //index jered//
   $banner = $db->query('SELECT * FROM banner1 ORDER BY id_banner1 DESC limit 1');
   $about = $db->query('SELECT * FROM about ORDER BY id DESC limit 1');
   $about1 = $db->query('SELECT * FROM about1 ORDER BY id  ');
   $image = $db->query('SELECT * FROM image ORDER BY id');
   $faq = $db->query('SELECT * FROM faqsection ORDER BY id');
   $faq2 = $db->query('SELECT * FROM imagefaq ORDER BY id');
  //index dimitri//
   $BOX = $db->query('SELECT * FROM BOX1 ORDER BY ID DESC limit 3');
   $BOX2 = $db->query('SELECT * FROM BOX2 ORDER BY ID DESC limit 3');
   $team = $db->query('SELECT * FROM team ORDER BY id DESC limit 4');
    $IMG = $db->query('SELECT * FROM image_box ORDER BY ID DESC limit 1');

    //index danny //
    $recuperation = $db->query('SELECT * FROM meta_tag');
     // marie-paule
        $conteur1 = $db->query('SELECT * FROM counter where id_count=1');
   $conteur5 = $db->query('SELECT * FROM counter where id_count=1');

   $conteur2 = $db->query('SELECT * FROM counter where id_count=2');
   $conteur6 = $db->query('SELECT * FROM counter where id_count=2');

   $conteur3 = $db->query('SELECT * FROM counter where id_count=3');
   $conteur7 = $db->query('SELECT * FROM counter where id_count=3');

   $conteur4 = $db->query('SELECT * FROM counter where id_count=4');
   $conteur8 = $db->query('SELECT * FROM counter where id_count=4');
   // pasco
   $partenaire = $db->query('SELECT * from partenaire');

   // crhris
   $fonction1 = $db->query('SELECT * FROM fonction1 ORDER by id DESC limit 1');
 ?>

<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from apdash.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 11:58:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/logo-color1.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>SOS-Mamas-App Landing Page</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">

    <style type="text/css">

    .ima{
        height: 500px;
	    width: 30%;
    }
    .b{
        height: 400px;
	   
        border-radius:5%;
    }
    .bb{
        height: 460px;
	    width: 70%;
        border-radius:5%;
    }
    .ban{
        margin-top:-100px;
    }
    .con{
        margin-top:-20px;
    }
    .cons{
        margin-left:-200px;
    }
    .conn{
        margin-left:50px;
    }
    .ima{
        color:white;
    }
    </style>
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/logo-color.png" style="height: 80px;" alt="logo" class="img-fluid" />
            <div class="thecube">
                
            </div>
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo-white.png" style="height: 80px;width: 250px;" alt="logo" class="img-fluid"  />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu police">
                        <li><a href="#"> Acceuil </a></li>
                        <li><a href="#about" class="page-scroll">A propos de l'Appli</a></li>
                        <li><a href="#features" class="page-scroll">Fonctionnalités</a></li>
                        <li><a href="#screenshots" class="page-scroll">Captures d'ecran</a></li>
                        <li><a href="#contact" class="page-scroll">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <div class="main">

        <!--hero section start-->
        <section class="ptb-100 bg-image overflow-hidden" image-overlay="10">
            <div class="hero-bottom-shape-two" style="background: url('assets/img/hero-bottom-shape-2.svg')no-repeat bottom center"></div>

            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <?php while ($b = $banner->fetch()) {?>
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content text-white py-5">
                           <h1 class="text-white police" ><?=$b['titre'];?></h1>
                            <p class="lead" style="font-family: Century Gothic;"><?=$b['texte'];?></p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-5">
                        <div class="img-wrap">
                             <img class="b" src="admin/images/<?=$b['photo'];?>" alt="app image" class="img-fluid">
                        </div>
                    </div>
                <div class="ban" class="action-btns mt-3 offset-1">
                                <!-- <a href="#" class="btn btn-brand-03 btn-rounded mr-3">Download Now <i class="fas fa-cloud-download-alt pl-2"></i></a> -->
                                <a href="https://www.youtube.com/watch?v=1APwq1df6Mw" class="popup-youtube btn btn-white btn-circle btn-icon"><i class="fas fa-play"></i> </a> <span class="ima" class="pl-2"> Watch Now</span>
                            </div>
                </div>
                <div class="con" class="hero-counter mt-4">
                                <div class="row">
                                    <div class="col-6 col-sm-4">
                                        <div class="counter-item d-flex align-items-center py-3">
                                            <div class="single-counter-item">
                                                <span class="h4 count-number text-white">672,086</span>
                                                <h6 class="text-white mb-0">Total Install</h6>
                                            </div>
                                            <span class="color-6 ml-2 p-2 rounded-circle">
                                            <i class="fas fa-arrow-up icon-sm"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="cons" class="col-6 col-sm-4">
                                        <div class="counter-item d-flex align-items-center py-3">
                                            <div class="single-counter-item">
                                                <span class="h4 count-number text-white">143,870</span>
                                                <h6 class="text-white mb-0">Total Download</h6>
                                            </div>
                                            <span class="color-6 ml-2 p-2 rounded-circle">
                                            <i class="fas fa-arrow-up icon-sm"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="conn" class="col-6 col-sm-4">
                                        <div class="counter-item d-flex align-items-center py-3">
                                            <div class="single-counter-item">
                                                <span class="h4 count-number text-white">31,191</span>
                                                <h6 class="text-white mb-0">Active Users</h6>
                                            </div>
                                            <span class="color-6 ml-2 p-2 rounded-circle">
                                            <i class="fas fa-arrow-up icon-sm"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                       
                    </div>
                   
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>



        <!--hero section end-->

        <!--promo section start-->
        
        <!--promo section end-->

        <!--about us section start-->
        <div class="overflow-hidden">
            <!--about us section start-->
            <section id="about" class="about-us ptb-100 background-shape-img position-relative">
                <div class="animated-shape-wrap">
                    <div class="animated-shape-item"></div>
                    <div class="animated-shape-item"></div>
                    <div class="animated-shape-item"></div>
                    <div class="animated-shape-item"></div>
                    <div class="animated-shape-item"></div>
                </div>
                <div class="container police">
                <?php while ($b = $about->fetch()) {?>
                    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        
                        <div class="col-md-2 col-lg-6">
                            <div class="about-content-left">
                                <h2><?=$b['titre'];?></h2>
                                <p><?=$b['texte'];?>.</p>
                                <?php while ($b = $about1->fetch()) {?>
                                <ul class="dot-circle pt-3">
                                    <li><?=$b['paragraphe'];?></li>
                                </ul>
                                <?php } ?>
                             </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-4">
                            <div class="about-content-right">
                             <img class="b" src="admin/images/<?=$b['photo'];?>" alt="app image" class="img-fluid">
                            </div>
                        </div>
                         <?php } ?>
                                  <div class="row">
                                    <div class="col-md-4 col-lg-4 border-right">
                                        <div class="count-data text-center">
                                            <?php while($count=$conteur5->fetch()){ ?>
                                            <h4 class="count-number mb-0 color-primary font-weight-bold"><?=$count['nombre'] ?></h4>
                                            <span><?=$count['texte'] ?></</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right">
                                        <div class="count-data text-center">
                                             <?php while($count=$conteur6->fetch()){ ?>
                                            <h4 class="count-number mb-0 color-primary font-weight-bold"><?=$count['nombre'] ?></h4>
                                            <span><?=$count['texte'] ?></span>
                                           <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-3 border-right">
                                        <div class="count-data text-center">
                                            <?php while($count=$conteur7->fetch()){ ?>
                                            <h4 class="count-number mb-0 color-primary font-weight-bold"><?=$count['nombre'] ?></h4>
                                            <span><?=$count['texte'] ?></span>
                                            <?php } ?>
                                        </div>
                                    </div>
                              </div>
                              
                </div>
            </section>
            <!--about us section end-->
        </div>
        <section class="position-relative feature-section ptb-100">
            <div class="container police">
                <div class="row align-items-center justify-content-between justify-content-sm-center justify-content-md-center">
                 <?php while ($ligne = $fonction1->fetch()) {?>
                    <div class="col-sm-5 col-md-6 col-lg-6 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="download-img">
                            <img  src="admin/images/<?=$ligne['photo']; ?>" alt="download" class="img-fluid">                       
                        </div>
                    </div>



                    
                    <div class="col-md-12 col-lg-6">
                        <div class="feature-contents">
                            <h2><?=$ligne['titre'];?></h2>
                            <p><?=$ligne['texte'];?></p>
                            
                            <ul class="dot-circle pt-2">
                                <li><?=$ligne['para1'];?></li>
                                <li><?=$ligne['para2'];?></li>
                                <li><?=$ligne['para3'];?></li>
                                <li><?=$ligne['para4'];?></li>
                            </ul>

                            <div class="action-btns mt-4">
                                <a href="#telecharge" class="btn btn-brand-02 mr-3">Commencer maintenant</a>
                               
                            </div>                            
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>



        <!--about us section end-->

        <!--download section step start-->
         <!--download section step start-->
        <section class="bg-image ptb-100" image-overlay="8">
            <div class="background-image-wraper" style="background: url('assets/img/logo-white.png')no-repeat center center / cover fixed; opacity: 1;"></div>
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-1 text-white">
                            <h2 class="text-white">Téléchargez l'appli</h2>
                            <?php while ($u = $url->fetch()) {?>
                            <p><?=$u['titre'];?></p>
                            <div class="action-btns mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?=$u['url_ios'];?>" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-apple icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Télécharger l'application IOS</small>
                                                <h5 class="mb-0" style="text-align: center;">App Store</h5>
                                            </div>
                                        </a>
                                    </li>
                                    ou
                                    <li class="list-inline-item">
                                        <a href="<?=$u['url_anro'];?>" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-google-play icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Télécharger l'application Android</small>
                                                <h5 class="mb-0" style="text-align: center;">Google Play</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php }  ?>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </section>


        <!--download section step end-->

        <!--features section start-->
        <div id="features" class="feature-section ptb-100 ">
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9">
                        <div class="section-heading text-center mb-5">
                            <h2>Fonctionnalités de l'application SOS-MAMAS</h2>
                            <p>Un outils pour le suivi des Femmes enceintes</p>

                        </div>
                    </div>
                </div>

                <!--feature new style start-->
                <div class="row align-items-center justify-content-md-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                        <?php while ($b = $BOX->fetch()) {?>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-3 mb-lg-3">
                                    <span class="<?=$b['ICON'];?> icon-size-md color-default mr-4"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2"><?=$b['TITRE'];?></h5>
                                        <p><?=$b['DESCRIPTION'];?></p>
                                    </div>
                                </div>
                            </div>
                       <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 d-none d-sm-none d-md-block d-lg-block">
                         <?php while ($im=$IMG->fetch()) {?>
                        <div class="position-relative pb-md-5 py-lg-0">
                            <img alt="Image placeholder" src="admin/images/<?=$im['IMAGE'];?>" class="img-center img-fluid">
                        </div>
                    <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                        <?php while ($bb = $BOX2->fetch()) {?>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-3 mb-lg-3">
                                    <span class="<?=$bb['ICON'];?> icon-size-md color-default mr-4"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2"><?=$bb['TITRE'];?></h5>
                                        <p> <?=$bb['DESCRIPTION'];?>.</p>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                </div>
                <!--feature new style end-->
            </div>
        </div>

        <!--features section end-->

        <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section pb-100 pt-100 gray-light-bg">
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Captures d'écran des applications</h2>
                            <p>Impact proactif des canaux à valeur ajoutée via des compétences de leadership backend. Révolutionner efficacement les réseaux mondiaux alors que les catalyseurs stratégiques du changement. </p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screenshot-wrap">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <?php while ($b = $image->fetch()) {?>
                        <img class="ima" src="admin/photos/<?=$b['photo'];?>" class="img-fluid"/>
                        <?php } ?>
                    </div>
                </div>
                <!--end app screen carousel-->
            </div>
        </section>


        <!--screenshots section end-->

        <!--work process start-->
        
        <!--work process end-->

        <!--counter section start-->
                <section class="counter-section gradient-bg ptb-40">
            <div class="container police">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="text-white p-2 count-data text-center my-3">
                            <?php while($count=$conteur1->fetch()){ ?>
                            <span class="<?=$count['icone'] ?> icon-size-lg mb-2"></span>
                                 <h3 class="count-number mb-1 text-white font-weight-bolder"><?=$count['nombre'] ?></h3>
                                <span><?=$count['texte'] ?></span>
                        <?php } ?>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="text-white p-2 count-data text-center my-3">
                            <?php while($count=$conteur2->fetch()){ ?>
                            <span class="<?=$count['icone'] ?> icon-size-lg mb-2"></span>
                             
                            <h3 class="count-number mb-1 text-white font-weight-bolder"><?=$count['nombre'] ?></h3>
                            <span><?=$count['texte'] ?></span>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="text-white p-2 count-data text-center my-3">
                            <?php while($count=$conteur3->fetch()){ ?>
                            <span class="<?=$count['icone'] ?> icon-size-lg mb-2"></span>
                              
                            <h3 class="count-number mb-1 text-white font-weight-bolder"><?=$count['nombre'] ?></h3>
                            <span><?=$count['texte'] ?></span>
                            
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="text-white p-2 count-data text-center my-3">
                            <?php while($count=$conteur4->fetch()){ ?>
                            <span class="<?=$count['icone'] ?> icon-size-lg mb-2"></span>
                            
                            <h3 class="count-number mb-1 text-white font-weight-bolder"><?=$count['nombre'] ?></h3>
                            <span><?=$count['texte'] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!--counter section end-->

        <!--pricing section start-->
       
        <!--faq or accordion section start-->
        <section id="faq" class="ptb-100 ">
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Questions fréquemment posées</h2>
                            <p>Retrouvez ci-dessous les questions frequement posées par les utilisateurs de l'appli</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                <?php while ($b = $faq2->fetch()) {?>
                    <div class="col-md-6 col-lg-6 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="img-wrap">
                            <img class="bb" src="admin/photos/<?=$b['photo'];?>" alt="download" class="img-fluid">
                        </div> 
                    </div>
                    <?php } ?>
                    <?php while ($b = $faq->fetch()) {?>
                    <div class="col-md-6 col-lg-6">
                        <div id="accordion" class="accordion faq-wrap">
                       
                            <div class="card mb-3">
                                <a class="card-header " data-toggle="collapse" href="#collapse0" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block"><?=$b['question'];?></h6>
                                </a>
                                <div id="collapse0" class="collapse show" data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p><?=$b['reponse'];?></p>
                                    </div>
                                </div>
                            </div>                   
                        </div>   
                    </div>                  
                </div>
                <?php } ?>             
            </div>
           
        </section>

        <!--faq or accordion section end-->

        <!--testimonial section start-->
        <section class="position-relative gradient-bg ptb-100">
            <div class="container police">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <div class="testimonial-heading text-white">
                            <h2 class="text-white">Ce que les utilisateurs disent à propos de SOS-Mama</h2>
                            <p>Actualisez en collaboration d'excellents schémas sans modèles efficaces. Concevoir de manière synergique des applications fonctionnalisées plutôt que du e-commerce backend.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="testimonial-content-wrap">
                            <div class="owl-carousel owl-theme client-testimonial-1 dot-indicator testimonial-shape">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="assets/img/client/1.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Head Of Admin</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="assets/img/client/2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Arabella Ora</h5>
                                                <span>HR Manager</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="assets/img/client/3.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Jeremy Jere</h5>
                                                <span>Team Leader</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="assets/img/client/4.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Marketing Head</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--our team section start-->
        <section class="team-two-section ptb-100 gray-light-bg">
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Nos membres d'équipe</h2>
                            <p>Faites un maillage autoritaire des paradigmes intuitifs vis-à-vis des partenariats axés sur les objectifs. Étendez continuellement l'open source en dehors des sentiers battus en pensant à des catalyseurs ciblés.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php while ($t = $team->fetch()) {?>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-team-wrap bg-white text-center border rounded p-4 mt-4">
                            <img src="admin/images/<?=$t['photo'];?>" alt="team image" width="120" class="img-fluid rounded-circle m-auto pb-4">
                            <div class="team-content">
                                <h5 class="mb-0"><?=$t['nom'];?></h5>
                                <span><?=$t['titre'];?></span>
                                <p class="mt-3"><?=$t['description'];?> </p>
                                 <ul class="list-inline social-list-default social-color icon-hover-top-bottom">
                                    <li class="list-inline-item">
                                        <a class="facebook" href="<?=$t['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="twitter" href="<?=$t['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="linkedin" href="<?=$t['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
        </section>
        <!--our team section end-->

        <!--our contact section start-->
        <section id="contact" class="contact-us-section ptb-100">
            <div class="container police">
                <div class="row justify-content-around">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h4>Prêt à commencer?</h4>
                            <form action="message.php" method="POST" class="contact-us-form">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Entrez le nom" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Entez l'email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sujet" placeholder="Sujet" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                    <input type="submit" name="" id="" class="btn btn-brand-02" value="Envoyer le Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="contact-us-content">
                            <h2>Vous recherchez une excellente idée d'entreprise?</h2>
                            <p class="lead">Appelez-nous ou passez à tout moment, nous nous efforçons de répondre à toutes les demandes dans les 24 heures les jours ouvrables.</p>

                            <a href="#" class="btn btn-outline-brand-01 align-items-center">Obtenir des directions <span class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <ul class="contact-info-list">
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-location-arrow color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Notre Siège</h5>
                                        <p>Goma, RDC</p>
                                        <p>
                                            Rond-point Chukudu, Q Les volcans, Av Mont-Goma, à coté de la DGI
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-envelope color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Adresse Email</h5>
                                        <p>
                                            sos-mamas@gmail.com
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our contact section end-->

        
        <!--our team section start-->
        <section class="client-section  ptb-100">
            <div class="container police">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Nos précieux Partainnaires</h2>
                            <p>
                                Transformez rapidement les sources internes ou les sources transparentes alors que les affaires électroniques absorbent les ressources Innovez facilement en interne convaincant.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <?php while($parte=$partenaire->fetch()){ ?>
                            <div class="item single-customer">
                                <a href="<?=$parte['lien']?>"><img src="admin/images/<?= $parte['photo']?>" alt="client logo" class="customer-logo partenaire"></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our team section end-->

    </div>

    <!--footer section start-->
    <!--when you want to remove subscribe newsletter container then you should remove .footer-with-newsletter class-->
    <footer class="footer-1 gradient-bg ptb-60 footer-with-newsletter">
        <!--subscribe newsletter start-->
        <div class="container police">
            <div class="row newsletter-wrap primary-bg rounded shadow-lg p-5">
                <div class="col-md-6 col-lg-7 mb-4 mb-md-0 mb-sm-4 mb-lg-0">
                    <div class="newsletter-content text-white">
                        <h3 class="mb-0 text-white">Abonnez-vous à notre newsletter</h3>
                        <p class="mb-0">Nous sommes une équipe de non-cyniques qui se soucient vraiment de notre travail.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <form class="newsletter-form position-relative">
                        <input type="text" class="input-newsletter form-control" placeholder="Entrez votre Email" name="email" required="" autocomplete="off">
                        <button type="submit" class="disabled"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!--subscribe newsletter end-->

        <div class="container police">
            <div class="row">
             <?php while ($l = $recuperation->fetch()) {?>
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="navbar-brand mb-2">
                        <img src="admin/images/<?=$l['PHOTO'];?>" style="height: 80px;width: 250px;" alt="logo" class="img-fluid" >
                    </a>
                    <br>
                    <p><?=$l['description'];?></p>
                    <div class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item"><a class="twitter" href="<?=$l['lien_twitter'];?>"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="<?=$l['lien_youtube'];?>"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="<?=$l['lien_linkedin'];?>"><i class="fab fa-linkedin-in"></i></a></li>
                    </div>
                </div>
                <?php }  ?>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="text-uppercase">Resources</h6>
                            <ul>
                                <li>
                                    <a href="#">Aidez-moi</a>
                                </li>
                                <li>
                                    <a href="#">Evénement</a>
                                </li>
                                <li>
                                    <a href="#">Sessions en direct</a>
                                </li>
                                <li>
                                    <a href="#">Open source</a>
                                </li>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="text-uppercase">Produits</h6>
                            <ul>
                                <li>
                                    <a href="#">Tarification</a>
                                </li>
                                <li>
                                    <a href="#">Navigation</a>
                                </li>
                                <li>
                                    <a href="#">Performance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="text-uppercase">Entreprise</h6>
                            <ul>
                                <li>
                                    <a href="#">A propos de nous</a>
                                </li>
                                <li>
                                    <a href="#">Carières</a>
                                </li>
                                <li>
                                    <a href="#">Les clients</a>
                                </li>
                                <li>
                                    <a href="#">Comminauté</a>
                                </li>
                                <li>
                                    <a href="#">Notre Equipe</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="text-uppercase">Soutien</h6>
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Ventes</a>
                                </li>
                                <li>
                                    <a href="#">Contacter le Support</a>
                                </li>
                                <li>
                                    <a href="#">L'état du réseau</a>
                                </li>
                                <li>
                                    <a href="#">Services produits</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>
    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg police">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <!-- <?php 
                            $today=new DateTime('today');
                            echo $today->format('d f, Y'), '.<br>',PHP_EOL
                        ?> -->
                        <p class="mb-0">&copy;2021 Built with all Developers junior by <a href="#"><u>Uptodate Developers</u></a>, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text" href="#">Terms</a></li>
                            <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                            <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from apdash.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 13:24:22 GMT -->
</html>