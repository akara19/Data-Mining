<!doctype html>
<?php
error_reporting(0);
//$session=isset($_SESSION['user_login']) ? $_SESSION['user_login']:'';

//if($session!=""){
?>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UNP | Data Mining</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/editor/select2.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-- Sweet Alert -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/sweet_alert/sweetalert.css">
	
	<!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/select2/select2.min.css">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/chosen/bootstrap-chosen.css">
    
      <!-- style CSS Alert
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/alerts.css">
 	<!-- CopyToClipboard
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/clipboard/clipboard.min.js"></script>
	
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url()?>asset/logo.png" alt="" /></a>
                <strong><img src="<?php echo base_url()?>asset/logo.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
							   <i class="fa big-icon fa-home icon-wrap"></i>
							   <span class="mini-click-non">Data Master</span>
							</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li>
                                <a title="Data Barang" 
                                href="<?php echo base_url()?>index.php/Data_barang">
                                <i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> 
                                <span class="mini-sub-pro">Data Barang</span>
                                </a>
                                </li>
                                <li>
                                <a title="Data Penguji" href="<?php echo base_url()?>index.php/Ppi_penguji">
                                <i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> 
                                <span class="mini-sub-pro">Data Penguji</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> 
								<span class="mini-click-non">Least Square</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
									<a title="Group Komponen" href="<?php echo base_url()?>index.php/Least_square">
									<i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> 
									<span class="mini-sub-pro">Data</span></a>
								</li>
                                
                                <li>
                                <a title="Tipe Nilai" href="<?php echo base_url()?>index.php/Ppi_komponen_type">
                                <i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> 
                                <span class="mini-sub-pro">Tipe Nilai</span>
                                </a>
                                </li>
                                
                                <li>
                                <a title="Kategori Nilai" href="<?php echo base_url()?>index.php/Ppi_komponen_category">
                                <i class="fa fa-paper-plane sub-icon-mg" aria-hidden="true"></i> 
                                <span class="mini-sub-pro">Kategori Nilai</span>
                                </a>
                                </li>
                                
								<li>
								<a title="Detil Komponen Nilai" href="<?php echo base_url()?>index.php/Ppi_komponen">
								<i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> 
								<span class="mini-sub-pro">Detil Komponen Nilai</span></a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false">
                            <i class="fa big-icon fa-flask icon-wrap"></i> <span class="mini-click-non">Ploting</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li>
                            <a title="Ploting Penguji Dengan Mahasiswa" 
                            href="<?php echo base_url()?>index.php/Ppi_penguji_mahasiswa">
                            <i class="fa fa-map-o sub-icon-mg" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Ploting Penguji</span></a>
                            </li>
                            </ul>
                        </li>
                        
                        
                         <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-desktop icon-wrap"></i> <span class="mini-click-non">View Nilai</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                <a title="Notifications" 
                                href="<?php echo base_url()?>index.php/Nilai/Tampil_nilai">
                                <i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i>
                                <span class="mini-sub-pro">Nilai Mahasiswa</span></a>
                                </li>
                                <!--
                                <li><a title="Alerts" href="alerts.html"><i class="fa fa-crop sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.html"><i class="fa fa-building sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.html"><i class="fa fa-adjust sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.html"><i class="fa fa-eye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.html"><i class="fa fa-life-ring sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Accordion</span></a></li>-->
                            </ul>
                        </li>
                        
                        <!--
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-pie-chart icon-wrap"></i> <span class="mini-click-non">Miscellaneous</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="file-manager.html"><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Manager</span></a></li>
                                <li><a title="Blog" href="blog.html"><i class="fa fa-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog</span></a></li>
                                <li><a title="Blog Details" href="blog-details.html"><i class="fa fa-tags sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Blog Details</span></a></li>
                                <li><a title="404 Page" href="404.html"><i class="fa fa-tint sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.html"><i class="fa fa-tree sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li> -->
                        
                        <!--
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-bar-chart-o icon-wrap"></i> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.html"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.html"><i class="fa fa-area-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="area-charts.html"><i class="fa fa-pie-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.html"><i class="fa fa-signal sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="c3.html"><i class="fa fa-barcode sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="sparkline.html"><i class="fa fa-sort-amount-desc sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="peity.html"><i class="fa fa-object-ungroup sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>-->
                        
                        <!--
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="static-table.html"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="data-table.html"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        -->
                        
                        <!--
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="basic-form-element.html"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="advance-form-element.html"><i class="fa fa-lightbulb-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="password-meter.html"><i class="fa fa-hourglass sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.html"><i class="fa fa-hdd-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.html"><i class="fa fa-globe sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.html"><i class="fa fa-hand-paper-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>-->
                        
                        
                       
                        
                        <!--
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-files-o icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Login" href="login.html"><i class="fa fa-hand-rock-o sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><i class="fa fa-plane sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><i class="fa fa-file sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><i class="fa fa-wheelchair sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Password Recovery</span></a></li>
                            </ul>
                        </li> -->
                        
                        <!--
                        <li><a title="Landing Page" href="#" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li> -->
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?php echo base_url()?>asset/logo.ico" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
											<!--
										   <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">Setting</span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="fa fa-home author-log-ic"></span>Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="fa fa-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="lock.html"><span class="fa fa-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li>
                                                        <a href="Login/Logout">
                                                        <span class="fa fa-lock author-log-ic"></span>Log Out
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Data Master <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
											<li>
											<a href="<?php echo base_url()?>index.php/Ppi_mahasiswa">Data Mahasiswa</a>
											</li>
											<li>
											<a href="<?php echo base_url()?>index.php/Ppi_penguji">Data Penguji</a>
											</li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Komponen Nilai <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                          <li>
                                          <a href="<?php echo base_url()?>index.php/Ppi_komponen_group">Group Nilai</a>
                                          </li>
                                          <li>
                                          <a href="<?php echo base_url()?>index.php/Ppi_komponen_type">Tipe Nilai
                                          </a>
                                          <li>
                                          <a href="<?php echo base_url()?>index.php/Ppi_komponen_category">Kategori Nilai
                                          </a>
                                          </li>
                                          <li>
                                          <a href="<?php echo base_url()?>index.php/Ppi_komponen">Detil Komponen Nilai
                                          </a>
                                          </li>
                                        </ul>
                                        </li>
                                        
                                        
                                        <li>
                                        <a data-toggle="collapse" data-target="#others" href="#">Ploting <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url()?>index.php/Ppi_penguji_mahasiswa">Ploting Penguji</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">View Nilai <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url()?>index.php/Nilai/Tampil_nilai">Nilai Mahasiswa</a>
                                                </li>
                                           
                                            </ul>
                                        </li> -->
                                        
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
         </div>
        <div class="basic-form-area mg-tb-15">
        	<div class="container-fluid">
        		<div class="row">
				<?php echo $contents;?>      
				</div>
        	</div>
        </div>
        
       
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Redesign & Develope By Arik Sofan Tohir,M.Kom All rights reserved.</p>
                            <p>Copyright &copy; 2020 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
	<!-- jquery
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url()?>asset/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/select2.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url()?>asset/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/main.js"></script>
	
	 <!-- sweetalert-->
    <script type="text/javascript" src="<?php echo base_url()?>asset/sweet_alert/jquery-1.9.1.min.js"> </script>
    <script src="<?php echo base_url()?>asset/sweet_alert/sweetalert.min.js"></script>
    <script src="<?php echo base_url()?>>asset/sweet_alert/qunit-2.9.2.js"> </script>
    
    <!-- chosen JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url()?>asset/js/chosen/chosen-active.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/select2/select2-active.js"></script>
    
     <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url()?>asset/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/sparkline/jquery.charts-sparkline.js"></script>
	
	<script src="<?php echo base_url()?>asset/js/popper.js"></script> 
	
	<script>

		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});

	</script>
	
</body>

</html>

<?php /*}
else{?>
	<script type="text/javascript" language="javascript">
	alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
	</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Nilai/LoginPage'>";
}*/
?>