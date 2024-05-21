<!DOCTYPE html>
<html lang="en">

    

<head>
        <meta charset="utf-8" />
        <title>LOGIN for ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url().'assets/backend/images/favicon.ico' ?>">

        <!-- App css -->
        <link href="<?= base_url().'assets/backend/css/icons.min.css' ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url().'assets/backend/css/app.min.css' ?>" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?= base_url().'assets/backend/css/app-dark.min.css' ?>" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <a href="index.html">
                                <span>
                                    <?php if (empty($app['icon'])) {echo '<h4> '.$app['nama'].' </h4><hr class="mb-3">';}else{ ?>
                                    <img style="height: 50px;width: 13em" src="<?= base_url().'./upload/app/'.$app['icon']; ?>" alt="">
                                    <?php } ?>
                                </span>
                            </a>
                        </div>

                        <!-- title-->
                        <h2><br><br><button class="btn btn-danger btn-block"></i><b>LOGIN for ADMIN/STAF</b></h2></button>
                        <br><br>
                        <?= $this->session->flashdata('pesan'); ?>
                        <!-- form -->
                        <form method="POST" action="<?= base_url().'Admin/proses_login' ?>">
                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" name="email" required="" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <a href="pages-recoverpw-2.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                <label for="password">Password</label>
                                <input class="form-control" id="passlogin" type="password" name="password" required="" placeholder="Enter your password">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="show-pass">
                                    <label class="custom-control-label" for="show-pass">Tampilkan Password</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                            </div>
                            </form>
                        <!-- end form-->
                            <!-- social-->
                            <div class="text-center mt-4">
                                
                                <h2><br><br><button class="btn btn-light btn-block"></i>E-Library PTIK</h2></button>
                            </div>

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center" style="background-image: url('<?= base_url().'./upload/app/bg/'.$bg['bg']; ?>');background-size: cover;height: 46em;width: 100%"><!--<<<<< Ganti Bg Img pke css style="background-image: url();background-size: cover;" -->
                <div class="auth-user-testimonial" style="background-color: white;width: 55%;color: black;opacity: 0.7;border-radius: 10px;">
                    <h2 class="mb-3"><?= $bg['judul']; ?></h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> <?= $bg['quote']; ?> <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - Admin User
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="<?= base_url().'assets/backend/js/vendor.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/app.min.js' ?>"></script>

    </body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2019 07:56:28 GMT -->
</html>