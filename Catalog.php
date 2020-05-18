<!DOCTYPE html>
<html class="desktop mbr-site-loaded"><head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x96.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  
  
  <title>catalog</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
 <?php
	session_start();
	?>

  <section id="top-1" class="engine"><a href="https://mobirise.ws">Mobirise Website Builder</a> v4.12.3</section>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-3">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html#header2-1">
                         <img src="assets/images/logo-122x96.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html#header2-1">VarcharTry</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="about.php"><span class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="about.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn" id="button"><a class="btn btn-sm btn-white-outline display-4" href="">Try it Now!</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/p">web templates free download</a></section>

<div id="page" class="col-12">

<section id="features2-4" class="features2 cid-rVsFxqhuYc col-12">

    
<p id="sexcatalog" style="margin-top: 15px"><h1><?php echo("Catalogue pour ".$_COOKIE['type']); ?></h1></p>

    <!-- Les cartes avec les vetements -->

        <div class="media-container-row col-12">
            <div class="card col-3 col-md-3 col-lg-3">
                <div class="col-spaced">
                    <div class="card-img" id="_01" name="01">
                        <img class="clothes" src="<?php echo("assets/images/_01.png"); ?>" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7" style="text-indent:22px;" name="T-Shirt Blanc 5.99 €">T-Shirt Blanc </h4>
                        <p style="text-indent: 22px;"><font color="blue">9.99 €</font></p>
                        
                    </div>
                </div>
            </div>

            <div class="card col-3 col-md-3 col-lg-3">
                <div class="col-spaced">
                    <div class="card-img" id="_02" name="02">
                        <img class="clothes" src="<?php echo("assets/images/_02.png"); ?>" alt="Mobirise" title="">
                    </div>
                    <div class="card-box ">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7" style="text-indent:22px;" name="Pantalon Bleu 9.99 €">Pantalon Bleu</h4>
                        <p style="text-indent: 22px;"><font color="blue">9.99 €</font></p>
                        
                    </div>
                </div>
            </div>

            <div class="card col-3 col-md-3 col-lg-3">
                <div class="col-spaced">
                    <div class="card-img" id="_01_02" name="_01_02">
                        <img class="clothes" src="<?php echo("assets/images/_01_02.png"); ?>" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7" style="text-indent:22px;" name="Ensemble T-shirt & Pantalon 14.99 €">Ensemble T-Shirt & Pantalon </h4>
                        <p style="text-indent: 22px;"><font color="blue">9.99 €</font></p>
                        
                    </div>
                </div>
            </div>


        </div>

</section>

    <!-- Ici on recupere les valeurs des parametres php passées via l'Url -->
<?php
    
 $poid = $_GET['poids'];
 $taile= $_GET['taille'];
 $sex  = $_GET['sex'];
 $iden = $_COOKIE["id"];
 $sizeh  = "";
 $sizeb  = "";
 $chemin = "index1.php?poids=".$poid."&taille=".$taile."&sexe=".$sex."&id=".$iden;

       ?>
</div>
         
<section class="cid-rVW00Ypj45" id="footer1-k" style="background-color:#000">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    
                        <img src="assets/images/logo-192x152.png" alt="Mobirise" title="">
                    
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"><br>Address
                </h5>
                <p class="mbr-text">Rue de Houdain 9,<br>7000 Mons</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-4">
                <h5 class="pb-3"><br>Contacts
                </h5>
                <p class="mbr-text">
                    Email: varchartry@gmail.com.com
                    <br>Phone: +32 (0) 465 32 91 38&nbsp;<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"><br><br><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2020 GrosVarchar - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script type="text/javascript">
  
	
		

    </script>
 <script type="text/javascript">
     /*
     Ce Code Javascript permet le chargement des cookies  en fonction du choix de vetement effectué par l'utilisateur et
     de charger la page avec vetement avec le vetement choisi et l'avatar
     */
     var dd = document.getElementsByClassName('card-img');

     Array.prototype.forEach.call(dd, function(element) {
         element.addEventListener('click', function() {
             var temp = this.id;
             document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"; // cookie identification vetement
             document.cookie = "id="+temp;
             document.cookie =  "idvet=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";// cookie identification vetement
             document.cookie = "idvet=";
             document.cookie = "sizeh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";// cookie taille du vetement haut
             document.cookie = "sizeh=";
             document.cookie = "sizeb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";// cookie taille vetement bas
             document.cookie = "sizeb=";
             document.cookie = "sel=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"; // cookie element selectionné menu deroulant
             document.cookie = "sel=0";
             document.cookie = "selh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";// cookie element selectionné menu deroulant haut
             document.cookie = "selh=0";
             document.cookie = "selb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";// cookie element selectionné menu deroulant bas
             document.cookie = "selb=0";

             var url = "<?php echo('vetement.php?poids='.$poid.'&taille='.$taile.'&sexe='.$sex);?>";
             // on charge la page vetement avec des nouvelles valeurs en cookies
             window.location = url;
         });
     });

 </script>
  <script src="script.js">
  
  

</body></html>