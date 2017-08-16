<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

?>


<!-- 

Template Name: iMedical - Medical, Doctor, Dentist, Clinic and Hospital Template
Version: 1.0.0
Author: CODASTROID
Contact: codastroid@gmail.com
Follow: https://themeforest.net/user/codastroid?ref=codastroid
Template Link: https://themeforest.net/item/health-medical-dentist-doctor-clinic-and-hospital-template-imedical/19747019?ref=CODASTROID
License: You must have a valid license purchased only from themeforest in order to legally use the theme for your project.

-->

<!DOCTYPE html>
<!--[if lt IE 9 ]><html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]><html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]><html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->

<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 

    <jdoc:include type="head" />

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/icon" href="assets/images/favicon/favicon.png">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:600,700" rel="stylesheet"> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>


    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Linearicons -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/linearicons.css" rel="stylesheet">

    <!-- Webfont Medical Icons -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/wfmi-style.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/owl.theme.min.css" rel="stylesheet">

    <!-- Magnific popup -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/magnific-popup.css" rel="stylesheet">

    <!-- YTPlayer -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">

    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/bootstrap.datepicker.css">


    <!-- Template Stylesheet -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/base.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/demo.css" rel="stylesheet">
    
</head>
<body id="body" class="wide-layout preloader-active">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader pos-center">
            <img src="assets/images/preloader.gif" alt="">
        </div>
    </div>
    <!-- End Preloader -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
        
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <!-- Start Top Bar -->
        <div class="topbar bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="topbar-info list-inline is-hidden-xs t-xs-center t-md-left">
                            <li class="prl-10">
                            <i class="fa fa-map-marker mr-10 font-16"></i>ABC - XYZ - Hà Nội</li>
                            <li class="prl-10">
                            <i class="fa fa-phone mr-10 font-16"></i>1900 00 00 </li>
                            <li class="prl-10">
                            <i class="fa fa-envelope mr-10 font-16"></i>info@xemay.vn</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="social-icons list-inline font-16  t-xs-center t-md-right is-hidden-sm">
                            <li class="social-icons__item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="social-icons__item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header id="mainHeader" class="main-header">
            <div class="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                LOGO
                            </div>
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu is-hidden-md-up"></button>
                        </div>
                        <div class="col-md-9">
                            <nav class="navigation">
								<?php if ($this->countModules('main-menu')) : ?>
									<jdoc:include type="modules" name="main-menu"  />
								<?php endif;?>	
                              
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">      
			<div class="component">
				<div  class="container">
					<jdoc:include type="modules" name="position-2"  />
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
			</div>	
			<?php if ($this->countModules('hero-area')) : ?>
			<!-- Start Hero Area -->
			<jdoc:include type="modules" name="hero-area"  />
          
            <!-- End Hero Area -->
			
			<!-- Start Features Boxes Area -->
				
		
			<!-- End Features Boxes Area -->
			<?php endif; ?>
	
            <!-- Start About Us Area -->
			<?php if ($this->countModules('about-us')) : ?>
				<jdoc:include type="modules" name="about-us" />
			<?php endif; ?>
       
            <!-- End About Us Area -->           
			<!-- Start Features Area -->
			<?php if ($this->countModules('department')) : ?>
				<jdoc:include type="modules" name="department" />
			<?php endif; ?>
                     
			<!-- Start Services Area -->
			<?php if ($this->countModules('services')) : ?>
				<div id="services">
				<jdoc:include type="modules" name="services" />
				</div>
			<?php endif; ?>
         
               
			<!-- Start Our Team Area -->
			<?php if ($this->countModules('doctors')) : ?>
				<jdoc:include type="modules" name="doctors" />
			<?php endif; ?>
         
            
            <!-- End Latest News section  -->
        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

        <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
        <footer class="main-footer pt-60">
            <div class="container">
                <div class="footer-widgets">
                    <div class="row row-masnory">
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget">
                                <h2>Giới thiệu</h2>
                                <p class="mb-10">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue.</p>
                                <ul class="social-icons list-inline">
                                    <li class="social-icons__item pt-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social-icons__item pt-10"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget">
                                <h2>Twitter Feed</h2>
                                <div class="twitter-widget">
                                    <div class="single_twitter">
                                        <p class="mb-15"><a href="#" class="color-theme">@CODASTROID :</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus.</p>
                                    </div>
                                    <div class="single_twitter">
                                        <p class="mb-15"><a href="#" class="color-theme">@CODASTROID :</a> Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget instagram-widget">
                                <h2>Instagram widget</h2>
                                <div class="row row-tb-5 row-rl-5">
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/2.jpg" alt=""></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/3.jpg" alt=""></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/4.jpg" alt=""></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/5.jpg" alt=""></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/images/instagram/6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 pb-50">
                            <div class="widget get-in-touch">
                                <h2>Giờ mở cửa</h2>
                                <ul class="opening-hours">
                                    <li>T2 – T5 <span class="float-right">8.00 – 17.00</span></li>
                                    <li>Thứ 6 <span class="float-right">9.30 – 17.30</span></li>
                                    <li>Thứ 7 <span class="float-right">9.30 – 15.00</span></li>
                                    <li>Chủ Nhật <span class="float-right">Nghỉ</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <h6 class="copyright"> XeMay.VN © Copyright 2017. All rights reserved. </h6>
                </div>
            </div>
        </footer>
        <!-- –––––––––––––––[ END FOOTER ]––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->


    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

   

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- (!) Placed at the end of the document so the pages load faster -->

    <!-- =========[ jQuery library ]========= -->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery-1.12.3.min.js"></script>

    <!-- ========[ Latest Bootstrap ]======== -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/bootstrap.min.js"></script>

    <!-- ========[ JavaScript Plugins ]======== -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/owl.carousel.min.js"></script>

    <!-- Magnific popup -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery.magnific-popup.min.js"></script>

    <!-- jQuery Easing v1.3 -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery.easing.1.3.min.js"></script>

    <!-- MixItUp v2.1.11 -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery.mixitup.js"></script>

    <!-- Bootstrap Datepicker -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/bootstrap-datepicker.js"></script>

    <!-- YTPlayer -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery.mb.YTPlayer.min.js"></script>

    <!-- =====[ Custom Template JavaScript ]===== -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/main.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/demo.js"></script>
</body>

</html>