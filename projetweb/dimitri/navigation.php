 <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                     <?php     
                             $service = $db->prepare('SELECT * FROM admin WHERE ID_ADMIN=:idc');
                            $service->execute(array(
                            'idc' => $_SESSION['user']['ID_ADMIN']
                            ));  
                            $don=$service->fetchAll(PDO::FETCH_OBJ);
                            foreach($don as $s):  
                        ?>
                            <img alt="profile" width="80" class="rounded-circle mar-btm margin-b-10 circle-border " src="images/<?=$s->PHOTO;?>">
                        <?php endforeach ?>
                        <p class="lead margin-b-0 toggle-none">
                               <?php 
                                if ($_SESSION['user']['username'] !== array()) {
                                   $users = $_SESSION['user']['username'];
                                   echo "$users";
                                }
                             ?>
                        </p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                       
						<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Accueil<span class="badge badge-pill badge-danger float-right mr-2">1.0</span></span></a></li>
                         <li class="nav-item">
                            <a class="nav-link" href="Ajout-user.php" aria-expanded="false"><i class="fa fa-user"></i> <span class="toggle-none">Utilisateur<span class="fa arrow"></span></span></a>
                           
                        </li>
                        
                         <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-square"></i> <span class="toggle-none">Features<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                               <li class="nav-item"><a class="nav-link" href="ajout-box.php">Feature-right</a></li>
                               <li class="nav-item"><a class="nav-link" href="ajout-box1.php">Feature-left</a></li>
                               <li class="nav-item"><a class="nav-link" href="image.php">Image</a></li>
                               
                            </ul>
                        </li>
                       <li class="nav-item">
                            <a  class="nav-link"  href="Ajout-Membre.php" aria-expanded="false"><i class="fa fa-group"></i> <span class="toggle-none">Equipe<span class="fa arrow"></span></span></a>
                           
                        </li>						
                       <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-plus-square-o"></i> <span class="toggle-none">banners<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="banner1.php">Banner1</a></li>
                                <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                            </ul>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="fonction.php" aria-expanded="false"><i class="fa fa-bookmark"></i> <span class="toggle-none">Comment ça  Marche<span class="fa arrow"></span></span></a>
                           
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-map-marker"></i> <span class="toggle-none">A propos <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="about1.php">A propos</a></li>
                                <li class="nav-item"><a class="nav-link" href="image_jered.php">Capture</a></li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="counter.php" aria-expanded="false"><i class="fa fa-history"></i> <span class="toggle-none">Compteur<span class="fa arrow"></span></span></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="partenaire.php" aria-expanded="false"><i class="fa fa-user"></i> <span class="toggle-none">Partenaire<span class="fa arrow"></span></span></a>
                            
                        </li>
                         <a class="nav-link" href="upload_link.php" aria-expanded="false"><i class="fa fa-upload"></i> <span class="toggle-none">Url Telechargement <span class="fa arrow"></span></span></a>
						 <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="icon-settings"></i> <span class="toggle-none">Parametres<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="meta-tags.php">Meta Description</a></li>
                                
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->
