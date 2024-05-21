                    <!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
    <div class="page-title-box">
        <div class="page-title-right">
            <form class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                    </div>
                </div>
               
            </form>
        </div>
        <h4 class="page-title">Halaman Utama</h4>
    </div>
</div>
</div>
<?= $this->session->flashdata('msg'); ?>
<!-- end page title -->
<div class="row">
<div class="col-xl-6 col-lg-6">
<div class="card tilebox-one">
    <div class="card-body">
        <i class='uil uil-user float-right'></i>
        <h6 class="text-uppercase mt-0">Data Petugas / Admin</h6>
        <h2 class="my-2" id="total-data-petugas-admin-perpus"></h2>
        <p class="mb-0 text-muted">
            <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span>%</span>
            <span class="text-nowrap">Jumlah</span>  
        </p>
    </div> <!-- end card-body-->
</div>
<!--end card-->

</div> <!-- end col -->

<div class="col-xl-6 col-lg-6">
<div class="card tilebox-one">
    <div class="card-body">
        <i class='uil uil-users-alt float-right'></i>
        <h6 class="text-uppercase mt-0">Data Anggota</h6>
        <h2 class="my-2" id="total-data-anggota-perpus"></h2>
        <p class="mb-0 text-muted">
                <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span>%</span>
            <span class="text-nowrap">Jumlah</span>
        </p>
    </div> <!-- end card-body-->
</div>
<!--end card-->                                
</div>
</div>
                                <!-- <div class="card cta-box overflow-hidden">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h3 class="m-0 font-weight-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></h3>
                                            </div>
                                            <img class="ml-3" src="<?= base_url().'assets/backend/images/email-campaign.svg' ?>" width="92" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                     end card-body
                                </div> -->
                             <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <h3 class="card-body">
                                            <div id="data-pengunjung">
                                                <canvas></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        <!--<div class="row">-->
                        <!--        <div class="col-sm-12">-->
                        <!--            <div class="card">-->
                        <!--                <h3 class="card-body">-->
                        <!--                    <div id="data-denda-jml">-->
                        <!--                        <canvas></canvas>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!-- end row -->


                    </div>
                    <!-- container -->

                </div>
                <!-- content -->