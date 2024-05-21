<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Welcome to E-Library</title>
<!-- CUSTOM STYLE -->


<link href="<?= base_url().'assets/frontend/style.css' ?>" rel="stylesheet">
<!-- THEME TYPO -->
<link href="<?= base_url().'assets/frontend/css/themetypo.css' ?>" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="<?= base_url().'assets/frontend/css/bootstrap.css' ?>" rel="stylesheet">
<!-- COLOR FILE -->
<link href="<?= base_url().'assets/frontend/css/color.css' ?>" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="<?= base_url().'assets/frontend/css/font-awesome.min.css' ?>" rel="stylesheet">
<!-- BX SLIDER -->
<link href="<?= base_url().'assets/frontend/css/jquery.bxslider.css' ?>" rel="stylesheet">
<!-- Boostrap Slider -->
<link href="<?= base_url().'assets/frontend/css/bootstrap-slider.css' ?>" rel="stylesheet">
<!-- Widgets -->
<link href="<?= base_url().'assets/frontend/css/widget.css' ?>" rel="stylesheet">
<!-- Owl Carusel -->
<link href="<?= base_url().'assets/frontend/css/owl.carousel.css' ?>" rel="stylesheet">
<!-- responsive -->
<link href="<?= base_url().'assets/frontend/css/responsive.css' ?>" rel="stylesheet">
<!-- Component -->
<!-- Datatable -->
<link href="<?= base_url().'assets/backend/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css' ?>" />
<link href="<?= base_url().'assets/backend/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css' ?>" />

<link href="<?= base_url().'assets/frontend/js/dl-menu/component.css' ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/frontend/css/bookblock.css' ?>" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="loader-wrapper">
	<div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>

</div>
<!--WRAPPER START-->
<div class="wrapper">
	<!--HEADER START-->
	<header class="header-1">
    	<div class="top-strip">
        	<div class="container">
            	<div class="pull-left">
                	<p><marquee behavior="pull-left" direction="">Welcome to E-Library</marquee></p>
                </div>
            	<ul class="my-account"><!-- 
                        <li><a href="#"><i class="fa fa-list"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-compress"></i> Compare</a></li> -->
                        <?php if (is_null($this->session->userdata('id_users'))) { ?>
                        <li><img style="height: 35px;border-radius: 50%" src="<?= base_url().'./' ?>assets/document/anggota.jpeg"></li>
                        <li><a class="btn btn-logins" href="javascript:void(0)"><i class="fa fa-sign-in"></i> Login</a></li>  
                        <?php }else{ ?>
                        <?php if (is_null($this->session->userdata('foto'))) { ?>
                        <li><img style="height: 35px;border-radius: 50%" src="<?= base_url().'./' ?>assets/document/anggota.jpeg"></li>
                        <?php }else{ ?>
                        <li><img style="height: 35px;border-radius: 50%" src="<?= base_url().'./' ?>upload/anggota/<?= $this->session->userdata('foto'); ?>"></li>
                        <?php } ?>
                        <li><span><b><span style="color: white"><?= $this->session->userdata('nama'); ?></span></b></span></li>
                        <li>|</li> 
                        <li><a onclick="return confirm('Anda Yakin Ingin Log-Out !!')" href="<?= base_url().'Frontend/Login/log_out' ?>"><i class="fa fa-sign-out"></i> Log-Out</a></li> 
                        	<?php } ?>                      
                    </ul>
            </div>
        </div>
        <div class="logo-container">
        	<div class="container">
            	<!--LOGO START-->
            	<div class="logo">
                    <?php 
                    $getDb = $this->db->get_where('app', ['id_app'=>1])->row_array();
                    if (empty($getDb['icon'])) { ?>
                    <a href="<?= base_url().'Beranda' ?>">
                    	<h4><?= $getDb['nama']; ?></h4>
                    </a>
                    <?php }else{ ?>
                    <a href="<?= base_url().'Beranda' ?>">
                    	<img style="height: 3em;width: 11em" src="<?= base_url().'./upload/app/'.$getDb['icon']; ?>" alt="">
                    </a>
                    <?php } ?>
                </div>
                <!--LOGO END-->
                
                <div class="kode-navigation">
                    <ul>
						<li><a href="<?= base_url().'Beranda' ?>">Beranda</a>
							<!-- <ul>
								<li><a href="index-1.html">Home page 1</a></li>
							</ul> -->
						</li>
						
						<li><a href="<?= base_url() ?>User_Profile">Profile</a></li>
						<li><a href="<?= base_url(); ?>Front/Buku">Buku dan Skrpsi</a>
						</li>
						<li class="active"><a href="<?= base_url().'Front/Invoice' ?>">Peminjaman</a>
						</li>
						<!-- <li class="last"><a href="#">Events</a>
							<ul>
								<li><a href="events-2column.html">Event 2 Column</a></li>
								<li><a href="events-3column.html">Event 3 Column</a></li>
								<li><a href="event-full.html">Event Single</a></li>
								<li><a href="event-detail.html">Event Detail</a></li>
							</ul>
						</li> -->
						
						<!-- <li class="last"><a href="<?= base_url().'Front/History' ?>">History</a>
						</li>-->
						<li class="last"><a href="<?= base_url() ?>Kontak_kami">Kontak</a></li>
						<!-- <li class="last"><a href="#">e-Digital</a>
						<ul>
						<li> <a class=" navbar-light bg-success text-white" a  href="https://siakad4.bjs71.my.id" target='_blank'>SIAKAD</a>
						</li>
						<li> <a class=" navbar-light bg-warning text-white" a  href="https://siakad3.bjs71.my.id" target='_blank'>SIADMIN</a>
						</li>
						<li> <a class=" navbar-light bg-success text-white" a  href="https://elt.bjs71.my.id" target='_blank'>eLEARNING</a> 
						</li>   -->
						
					</ul>
					</ul>
                </div>
				<div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <ul>
						<li><a href="<?= base_url().'Beranda' ?>">Beranda</a>
							<!-- <ul>
								<li><a href="index-1.html">Home page 1</a></li>
							</ul> -->
						</li>
						
						<li><a href="<?= base_url() ?>User_Profile">Profile</a></li>
						<li><a href="<?= base_url(); ?>Front/Buku">Buku</a>
						</li>
						<!-- <li><a href="blog.html">Blog</a>
							<ul>
								<li><a href="blog-2column.html">Blog 2 Column</a></li>
								<li><a href="blog-full.html">Blog Full</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul>
						</li> -->
						<li class="active"><a href="<?= base_url().'Front/Invoice' ?>">Peminjaman</a>
						</li>
						<!-- <li class="last"><a href="#">Events</a>
							<ul>
								<li><a href="events-2column.html">Event 2 Column</a></li>
								<li><a href="events-3column.html">Event 3 Column</a></li>
								<li><a href="event-full.html">Event Single</a></li>
								<li><a href="event-detail.html">Event Detail</a></li>
							</ul>
						</li> -->
						
						<!--<li class="last"><a href="<?= base_url().'Front/History' ?>">History</a>-->
						<!--</li>-->
						<li class="last"><a href="<?= base_url() ?>Kontak_kami">Kontak</a></li>
					</ul>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER END-->