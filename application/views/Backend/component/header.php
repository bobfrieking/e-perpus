<!DOCTYPE html>
    <html class="thiscontenttttttttt" lang="en">

<head>
        <meta charset="utf-8" />
        <title>Halaman Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url().'assets/backend/images/favicon.ico' ?>">

        <!-- third party css -->
        <link href="<?= base_url().'assets/backend/css/vendor/jquery-jvectormap-1.2.2.css' ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url().'assets/backend/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css' ?>" />
        <link href="<?= base_url().'assets/backend/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css' ?>" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url().'assets/backend/css/icons.min.css' ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url().'assets/backend/css/app.min.css' ?>" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?= base_url().'assets/backend/css/app-dark.min.css' ?>" rel="stylesheet" type="text/css" id="dark-style" />

        <!-- Summernote css -->
        <link href="<?= base_url().'assets/backend/css/vendor/summernote-bs4.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Get Style Grafik  -->
                <style type="text/css">
                    @import 'https://code.highcharts.com/css/highcharts.css';

            #container {
                height: 400px;
                max-width: 1000px;
                margin: 0 auto;
            }

            /* Link the series colors to axis colors */
           
            .highcharts-color-0 {
                fill: #8289f6;
                stroke: #8289f6;
            }
            .highcharts-axis.highcharts-color-0 .highcharts-axis-line {
                stroke: #8289f6;
            }
            .highcharts-axis.highcharts-color-0 text {
                fill: #8289f6;
            }

            .highcharts-yaxis .highcharts-axis-line {
                stroke-width: 2px;
            }
        </style>
        <!-- End -->
        
    </head>

    <body class="loading">

         <!-- Pre-loader -->
       <!--  <div id="preloader" class="loader">
            <div id="status">
                <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
            </div>
        </div> -->
        <!-- End Preloader-->

        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu" id="left-side-menu-container">

                    <!-- LOGO -->
                    <a href="<?= base_url().'Admin/Dashboard' ?>" class="logo text-center">
                         <?php 
                         $data = $this->db->get_where('app', ['id_app'=>1])->row_array();
                            if (empty($data['icon'])) { ?>
                            <h2 class="text-white" height="16" id="side-main-logo"><?= $data['nama']; ?></h2>
                           <?php }else{ ?>
                           <span class="logo-lg">
                            <img style="height: 45px;width: 13em;border-radius: 10px;" src="<?= base_url().'./upload/app/'.$data['icon']; ?>" alt="">
                            </span>
                        <span class="logo-sm">
                            <img src="<?= base_url().'./upload/app/'.$data['icon']; ?>" alt="" height="16">
                        </span>
                        <?php }  ?>
                    </a>
                    
                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">
                        <li><a class="navbar navbar-expand-lg navbar-light bg-danger text-white"a  href="#"><b><i></i>NAVIGATION</b></a></li>
                        

                        <!-- <li style="font-size: 14px;" href="#" class="btn btn-light btn-sm-2 mt-2 ml-3"><b>NAVIGATION</b></li> -->
                        <li> <a class="navbar navbar-expand-lg navbar-light bg-info text-white" a  href="<?= base_url().'Admin/Dashboard' ?>"> <b><i class="metismenu-icon fas fa-tachometer-alt"></i> DASHBOARD</a></b></li>

                        <!-- <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/Dashboard' ?>" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a> -->
                          <!--   <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="dashboard-analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="index.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                            </ul> -->
                        </li>

                        <!-- <li class="side-nav-title side-nav-item">Halaman Anggota</li> -->
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Beranda </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?= base_url().'Backend/Slider' ?>">Slider</a>
                                </li>
                                <!-- <li>
                                    <a href="<?= base_url().'Admin/Blog' ?>">Blog</a>
                                </li> -->
                                <li>
                                    <a href="<?= base_url().'Admin/Testimoni' ?>">Testimony</a>
                                </li>
                            </ul>
                        </li>
                         <!-- <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/TxtBase' ?>" class="side-nav-link">
                                <i class="uil-book-open"></i>
                                <span> TextBase </span>
                            </a>
                        </li> -->
                        <ul class="metismenu side-nav">
                        <li><a class="navbar navbar-expand-lg navbar-light bg-info text-white"a  href="#"><b><i></i>MENU ADMIN</b></a></li>

                        <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/Konfigurasi_halaman' ?>" class="side-nav-link">
                                <i class="uil-cog"></i>
                                <span> Konfigurasi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Master Data </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?= base_url().'Admin/Data_petugas' ?>">Petugas</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>Admin/Data_anggota">Anggota</a>
                                </li>
                            </ul>
                        </li>
            
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-package"></i>
                                <span> Buku </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?= base_url(); ?>Admin/Data_buku">Buku
                                    <?php 
                                    $db4 = $this->db->get_where('buku', ['stok'=>0])->num_rows();
                                    if ($db4 != 0) {
                                        echo '<span title="request Stok Habis" class="badge badge-danger float-right">' .$db4. '</span>';
                                    }else{ ?>
                                    <span title="Jumlah Data Buku" class="badge badge-success float-right" id="totals-buku-admin"></span>
                                    <?php } ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url().'Admin/Buku/Pengarang-buku' ?>">Pengarang
                                    <span title="Jumlah Data Pengarang Buku" class="badge badge-success float-right" id="totals-pengarangbuku-admin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>Admin/Buku/Penerbit-buku">Penerbit
                                     <span title="Jumlah Data Penerbit Buku" class="badge badge-success float-right" id="totals-penerbitbuku-admin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>Admin/Buku/Kategori-buku">Kategori
                                    <span title="Jumlah Data Kategori Buku" class="badge badge-success float-right" id="totals-kategoribuku-admin"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/Peminjaman-Buku' ?>" class="side-nav-link">
                                <i class="uil-layer-group"></i>
                                <span> Peminjaman </span>
                                <span id="total-data-request-peminjaman"></span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/Pengembalian-Buku' ?>" class="side-nav-link">
                                <i class="mdi mdi-arrow-left"></i>
                                <span> Pengembalian </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="<?= base_url().'Admin/Kontak' ?>" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Kontak</span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Laporan</li>
                        <li class="side-nav-item">
                            <a href="<?= base_url().'Backend/Laporan/pdf' ?>" class="btn btn-danger ml-3">
                                <i class="uil-folder"></i>
                                <span> Laporan PDF</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a onclick="return btnconfirmlogout()" href="javascript:void(0)" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout mr-1"></i>
                            <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                    <!-- End Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
                 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="notification-list">
                                <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link right-bar-toggle" href="#"><i class="mdi mdi-clock my-2"></i> <div class="badge badge-success my-2"><span id="date"></span></div> : <div class="badge badge-warning my-2"><span id="time"></span></div></a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                   <!--  <span class="badge badge-warning float-auto" id="dataa-notifikasi-anggota-baruu"></span> -->
                                   <span id="dataa-notifikasi-anggota-baruu"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <!-- <small>Clear All</small> -->
                                                </a>
                                            </span>Notifikasi Anggota Baru <span class="badge badge-warning float-right" id="dataa-notifikasi-anggota-baruu-ke2"></span>
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                     <div id="data-anggota-baru-notifikasi">
                                         <!-- <span class="text-center"> Kosong...</span> -->
                                     </div>
                                    </div>

                                    <!-- All-->
                                    <a href="<?= base_url(); ?>Admin/Data_anggota" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Lihat Semua
                                    </a>

                                </div>
                            </li>
                            <?php $db = $this->db->get_where('users', array('id_users' => $this->session->userdata('id_users')))->row_array(); ?>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <?php if (is_null($this->session->userdata('foto'))) { ?>
                                            <img src="<?= base_url().'assets/backend/images/users/avatar-1.jpg' ?>" alt="user-image" class="rounded-circle">
                                        <?php }else{ ?>
                                            <img src="<?= base_url().'./upload/petugas/'.$db['foto']; ?>" alt="user-image" class="rounded-circle">
                                            <?php } ?>
                                    </span>
                                    <span>
                                        <span class="account-user-name"><?php if (is_null($is_name = $this->session->userdata('nama'))) {echo "No Name";}else{ echo $is_name; } ?></span>
                                        <span class="account-position">Admin </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Hello ! <?= $this->session->userdata('nama'); ?></h6>
                                    </div>

                                    <!-- item-->
                                    <a href="<?= base_url().'Admin/Profile' ?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>Account Saya</span>
                                    </a>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Settings</span>
                                    </a> -->
                                    <!-- item-->
                                    <a onclick="return btnconfirmlogout()" href="javascript:void(0)" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <!-- <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <!-- end Topbar -->
