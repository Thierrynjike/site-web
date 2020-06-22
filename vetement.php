<!DOCTYPE html>
<div class="desktop mbr-site-loaded"><head>
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
<>
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
                         <img src="assets/images/logo-122x96.png" alt="VarChar Try" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html#header2-1">VarcharTry</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="contact.php"><span class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a>
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
    <br><br><br><br>
    <div id="page" class="col-12 row" style="height: 800px">

        <div id="article" class="col-6">
            <p id="sexcatalog" style="margin-top: 15px"><h1><?php echo("Vêtement ".$_GET['sexe'].$_COOKIE['id']); ?></h1></p>
            <section class="col-12" style="height: 800px">





                    <div class="row">
                        <div class="card p-3 col-12 col-md-6 col-lg-6 ">
                            <!-- carte vetement selectioné page précédente -->
                            <div class="card-wrapper col-12" id="clothes1">
                                <div class="card-img" id="_01" name="01">
                                    <img src="<?php echo("assets/images/".$_COOKIE['id'].".png"); ?>" alt="VarChar Try" title="">
                                    <br><br><h4 class="card-title pb-3 mbr-fonts-style display-7">9.99 €</h4>
                                </div>

                            </div>


                        </div>

                        <div>
                            <br><br><br><br>
                            <p>Choisissez une taille de vêtement</p>
                            <?php


                                if(strlen($_COOKIE['id'])>4) {
                                    /* cette condition est remplie si on a une combinaison (vetement haut et bas)
                                    si c'est le cas on affiche 2 menus deroulant
                                    */

                                    echo('<p>Taille du t-shirt</p>
                                        <select id="mySelect1" style = "width:100px">
                                        <option id="_S" class="taille1" value="0"> S</option >
                                        <option id="_M" class="taille1" value="1"> M</option >
                                        <option id="_L" class="taille1" value="2"> L</option >
                                        <option id="_XL" class="taille1" value="3"> XL</option >
                                    </select >');
                                    echo('<br><br><p class="pant">Taille du Pantalon</p>
                                        <select id="mySelect2" class="pant" style = "width:100px">                                                                                       
                                        <option id="_S" class="taille2" value="0"> S</option >
                                        <option id="_M" class="taille2" value="1"> M</option >
                                        <option id="_L" class="taille2" value="2"> L</option >
                                        <option id="_XL" class="taille2" value="3"> XL</option >
                                    </select >
                                   <br><br><button style="background-color: black; color: white; width: 100px; height: 40px;cursor: pointer" id="button" onclick="valider()">Valider</button>');
                                }
                                else{
                                    echo('<select id="mySelect" style = "width:100px">
                                        <option id="_S" class="taille" value="0"> S</option >
                                        <option id="_M" class="taille" value="1"> M</option >
                                        <option id="_L" class="taille" value="2"> L</option >
                                        <option id="_XL" class="taille" value="3"> XL</option >
                                    </select >');
                                }

                            ?>





                            <script type="text/javascript">
                                var dd = document.getElementsByClassName('taille');
                                document.getElementById("mySelect").selectedIndex = "<?php echo($_COOKIE['sel']);?>";

                                Array.prototype.forEach.call(dd, function(element) {
                                    element.addEventListener('click', function() {
                                        var siz= this.id;

                                        if("<?php echo($_COOKIE['id']);?>"=="_01"){
                                            document.cookie = "idvet=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                            document.cookie = "idvet=_01";
                                            document.cookie = "sizeh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                            document.cookie = "sizeh="+siz;
                                            document.cookie = "sizeb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                            document.cookie = "sizeb=";
                                        }
                                        else {
                                            if("<?php echo($_COOKIE['id']);?>"=="_02") {
                                                document.cookie = "idvet=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                                document.cookie = "idvet=_02";
                                                document.cookie = "sizeh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                                document.cookie = "sizeh=";
                                                document.cookie = "sizeb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                                document.cookie = "sizeb=" + siz;
                                            }
                                        }
                                        document.cookie = "sel=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                        document.cookie = "sel="+this.value;


                                        location.reload();
                                    });
                                });




                            </script>

                            <script type="text/javascript">
                                // Ce code javascript est pour recuperer les tailles choisies et recharger la page avec le bon avatar

                                var ddh = document.getElementsByClassName('taille1');
                                var ddb = document.getElementsByClassName('taille2');
                                document.getElementById("mySelect1").selectedIndex = "<?php echo($_COOKIE['selh']);?>";
                                document.getElementById("mySelect2").selectedIndex = "<?php echo($_COOKIE['selb']);?>";

                                Array.prototype.forEach.call(ddh, function(element) {
                                    element.addEventListener('click', function() {

                                        document.cookie = "selh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                        document.cookie = "selh="+this.value;
                                        document.cookie = "sizeh=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                        document.cookie = "sizeh="+this.id;

                                    });
                                });

                                Array.prototype.forEach.call(ddb, function(element) {
                                    element.addEventListener('click', function() {

                                        document.cookie = "selb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                        document.cookie = "selb="+this.value;
                                        document.cookie = "sizeb=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                        document.cookie = "sizeb="+this.id;

                                    });
                                });


                                function valider() {

                                    document.cookie = "idvet=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                                    document.cookie = "idvet=_01_02";
                                    document.getElementById("mySelect1").selectedIndex = "<?php echo($_COOKIE['selh']);?>";
                                    document.getElementById("mySelect2").selectedIndex = "<?php echo($_COOKIE['selb']);?>";

                                    location.reload();
                                }


                            </script>






                        </div>
                    </div>


            </section>
        </div>
        <div id='avatar' class='col-6' height="100%">



        <?php

        $poid = $_GET['poids'];
        $taile= $_GET['taille'];
        $sex  = $_GET['sexe'];
        $iden = $_COOKIE["id"];
        $sizeh= $_COOKIE['sizeh'];
        $sizeb= $_COOKIE['sizeb'];
        $chemin = "index1.php?poids=".$poid."&taille=".$taile."&sexe=".$sex."&id=".$iden."&sizeh=".$sizeh."&sizeb=".$sizeb;

        echo("<iframe class='col-12' src=".$chemin." height='100%' width='100%'>
    </iframe>
   ")
        ?>
        </div>

</div>





<section class="cid-rVW00Ypj45" id="footer1-k" style="background-color:#000">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    
                        <img src="assets/images/logo-192x152.png" alt="VarChar Try" title="">
                    
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
  <script src="script.js">


  
  

</body>
      </html>