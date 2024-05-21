<div class="container-fluid">    
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Account Saya</a></li>
<li class="breadcrumb-item active">Profile</li>
</ol>
</div>
<h4 class="page-title">Halaman Profile</h4>
</div>
</div>
</div>     
<!-- end page title --> 

<div class="row">
<div class="col-xl-4 col-lg-5">
<div class="card text-center">
<div class="card-body">
<img src="<?= base_url().'./upload/petugas/'.$this->session->userdata('foto'); ?>" class="rounded-circle avatar-lg img-thumbnail"
alt="profile-image">

<h4 class="mb-0 mt-2"><?= $this->session->userdata('nama'); ?></h4>
<p class="text-muted font-14">Petugas Perpus</p>

<!-- <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
<button type="button" class="btn btn-danger btn-sm mb-2">Message</button> -->

<div class="text-left mt-3">
<h4 class="font-13 text-uppercase">Alamat :</h4>
<p class="text-muted font-13 mb-3">
    <?= $this->session->userdata('alamat'); ?>
</p>
<p class="text-muted mb-2 font-13"><strong>Nama Lengkap :</strong> <span class="ml-2"><?= $this->session->userdata('nama'); ?></span></p>

<p class="text-muted mb-2 font-13"><strong>Telepon / No Hp :</strong><span class="ml-2"><?= $this->session->userdata('no_hp'); ?></span></p>

<p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><?= $this->session->userdata('email'); ?></span></p>

<!-- <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">USA</span></p> -->
</div>

<ul class="social-list list-inline mt-3 mb-0">
<li class="list-inline-item">
    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
            class="mdi mdi-facebook"></i></a>
</li>
<li class="list-inline-item">
    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
            class="mdi mdi-google"></i></a>
</li>
<li class="list-inline-item">
    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
            class="mdi mdi-twitter"></i></a>
</li>
<li class="list-inline-item">
    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
            class="mdi mdi-github-circle"></i></a>
</li>
</ul>
</div> <!-- end card-body -->
</div> <!-- end card -->

</div> <!-- end col-->

<div class="col-xl-8 col-lg-7">
<div class="card">
<div class="card-body">
    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
        <li class="nav-item">
            <a href="#avatar" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                Avatar
            </a>
        </li>
        <li class="nav-item">
            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                Settings
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="avatar">
        <div class="row">
            <div class="col-md-12">
                <form id="Send-edit-Avatar_Profile">
                    <div class="text-center">
                                                                    <?php if (is_null($this->session->userdata('foto'))) { ?>
                                                                    <label>
                                                                    <input style="display: none;" type="file" name="profile">
                                                                    <img id="img-avatar" style="height:350px;width: 26em;border-radius: 50% " src="<?= base_url().'./assets/document/anggota.jpeg' ?>">
                                                                    </label>
                                                                    <?php }else{ ?>
                                                                    <label>
                                                                    <input style="display: none;" type="file" name="profile">
                                                                    <img id="img-avatar" style="height:350px;width: 26em;border-radius: 50% " src="<?= base_url().'./upload/petugas/'.$this->session->userdata('foto'); ?>">
                                                                    </label>
                                                                    <?php } ?><br>
                                                                    <button class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i> Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="tab-pane show active" id="settings">

                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Ganti Profile 
                                                    <a class="float-right change-profile" href="javascript:void(0);"><i class="mdi mdi-pencil"></i> Ubah</a>
                                                    <a class="float-right text-danger change-profile-no" href="javascript:void(0);"><i class="mdi mdi-pencil-remove"></i> Ubah</a>
                                                    </h5>
                                                    <!-- mulai sembunyikan data + Send Data -->
                                                    <div id="sembunyikan-data">
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                            <span id="pesanvalidasi"></span>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nama</label>
                                                                        <input type="text" class="form-control" id="nama-profile" value="<?= $this->session->userdata('nama'); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="text" class="form-control" id="email-profile" value="<?= $this->session->userdata('email'); ?>">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <textarea class="form-control" id="alamat-profile" rows="4" placeholder="Write something..."><?= $this->session->userdata('alamat'); ?></textarea>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <button type="submit" class="btn btn-primary btn-sm btn-block" id="btnsubmit-Editprofile"> Ubah</button>
                                                    </div>
                                                    <!-- mulai Tampil + readonly -->
                                                    <div id="tampil-data">
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="firstname">Nama</label>
                                                                        <input type="text" class="form-control" id="firstname" value="<?= $this->session->userdata('nama'); ?>" readonly="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="firstname">Email</label>
                                                                        <input type="text" class="form-control" id="firstname" value="<?= $this->session->userdata('email'); ?>" readonly="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="userbio">Alamat</label>
                                                                <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..." readonly=""><?= $this->session->userdata('alamat'); ?></textarea>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    </div>
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Ganti Password 
                                                    <a class="float-right change-password" href="javascript:void(0);"><i class="mdi mdi-pencil"></i> Ubah</a>
                                                    <a style="display: none;" class="float-right text-danger change-password-no" href="javascript:void(0);"><i class="mdi mdi-pencil-remove"></i> Ubah</a>
                                                    </h5>
                                                    <form id="form-ganti-password-profile">
                                                         <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="passCurrent">Password Lama</label>
                                                                <input type="password" class="form-control" id="passCurrent" placeholder="Ketikan Password Lama" readonly="">
                                                                <input type="password" class="form-control" id="passCurrenthide" placeholder="Ketikan Password Lama" autocomplete="off" autosave="off">
                                                                <small id="msgCurrentPass"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="passNew">Password Baru</label>
                                                                <input type="password" class="form-control" id="passNew" placeholder="Ketikan Password Baru" readonly="">
                                                                <input type="password" class="form-control" id="passNewhide" placeholder="Ketikan Password Baru" autocomplete="off">
                                                                <small id="msgNewPass"></small>
                                                            </div>
                                                        </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                        <div id="btntampilorhide" class="mb-2">
                                                            <a class="text-muted btnlihatpass" href="javascript:void(0)"><i class="mdi mdi-eye"></i> Tampilkan Password</a>
                                                            <a style="display: none;" class="text-muted btnhidepass" href="javascript:void(0)"><i class="mdi mdi-eye"></i> Sembunyikan Password</a>
                                                        </div>
                                                        <button type="button" id="btnPass" class="btn btn-primary btn-sm btn-block"> Ubah</button>
                                                    </form>
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info
                                                    <a class="float-right change-profile-company" href="javascript:void(0);"><i class="mdi mdi-pencil"></i> Ubah</a>
                                                    <a style="display: none;" class="float-right text-danger change-profile-company-no" href="javascript:void(0);"><i class="mdi mdi-pencil-remove"></i> Ubah</a>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="companyname">Company Name</label>
                                                                <input type="text" class="form-control" id="companyname" placeholder="Enter company name" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="cwebsite">Website</label>
                                                                <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url" readonly>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social
                                                    <a class="float-right change-profile-social" href="javascript:void(0);"><i class="mdi mdi-pencil"></i> Ubah</a>
                                                    <a style="display: none;" class="float-right text-danger change-profile-social-no" href="javascript:void(0);"><i class="mdi mdi-pencil-remove"></i> Ubah</a>
                                                    </h5>
                                                    <div id="social-show">
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-fb">Facebook</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-fb" placeholder="Url" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-tw">Twitter</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-tw" placeholder="Username" readonly>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-insta">Instagram</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-insta" placeholder="Url" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-lin">Linkedin</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-lin" placeholder="Url" readonly>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-sky">Skype</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-sky" placeholder="@username" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-gh">Github</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-github-circle"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-gh" placeholder="Username" readonly>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    </div>
                                                    <div id="social-hidden">
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-fb">Facebook</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-tw">Twitter</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-insta">Instagram</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-lin">Linkedin</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-sky">Skype</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-gh">Github</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="mdi mdi-github-circle"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-block">Ubah</button>
                                                    </div> 
                                            </div>
                                            <!-- end settings content-->
                                        </div>
    
                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content