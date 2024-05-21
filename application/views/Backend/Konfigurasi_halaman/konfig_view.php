<div class="container-fluid">    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Konfigurasi</a></li>
                        <li class="breadcrumb-item active">Konfigurasi</li>
                    </ol>
                </div>
                <h4 class="page-title">Halaman Konfigurasi</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->
    <?= $this->session->flashdata('msg'); ?>
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-header mb-2">
                        <h5>Nama Application</h5>
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url().'Backend/Config_admin/name_app' ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control form-control-lg" name="nama_app" placeholder="Nama Aplikasi" value="<?= $app['nama']; ?>">
                        </div><hr>
                        <div class="text-center">Atau</div><hr>
                        <div class="card-header mb-2">
                            <h5>Icon IMG Application</h5>
                        </div>
                        <div class="form-group">
                            <label>Icons</label><br>
                            <div class="text-center">
                                <?php if (is_null($app['icon'])) { ?>
                                <label>
                                    <input class="input-icon" style="display: none;" type="file" name="config-icon" >
                                    <img class="img-icon" style="height: 10em;width: 20em;border-radius: 15%" src="<?= base_url().'./assets/document/preview.jpg' ?>">
                                </label>
                                <?php }else{ ?>
                                <label>
                                    <input class="input-icon" style="display: none;" type="file" name="config-icon" >
                                    <img class="img-icon" style="height: 10em;width: 20em;border-radius: 15%" src="<?= base_url().'./upload/app/'.$app['icon']; ?>">
                                </label>
                                <?php } ?>
                            </div>
                        </div>
                        <small><i><i class="mdi mdi-alert"></i> Jika Mengisi Dengan Icon ,Kosongkan Nama Begitu Sebaliknya</i></small><br><br>
                        <button class="btn btn-primary bg-gradient btn-sm btn-block mb-2"><i class="mdi mdi-check"></i> Save</button>
                    </form>
                    <input type="hidden" name="" id="data-icon-app" value="<?= $app['icon']; ?>">
                    <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-block bg-gradient btn-deltIcon"><i class="mdi mdi-delete"></i> Hapus Icon</a>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="card-header mb-4">
                        <h4>Background</h4>
                    </div>
                    <form id="form-bg">
                        <div class="card">
                        <?php if (empty($bg['bg'])) { ?>
                        <label>
                            <input class="input-files" type="file" name="gbr-bg">
                            <img id="img-backround" style="position: absolute;height: 23em;width: 38em;opacity: 0.8;border-radius: 5px" src="<?= base_url().'./assets/document/preview.jpg' ?>">
                        </label>
                        <?php }else{ ?>
                        <label>
                            <input class="input-files" type="file" name="gbr-bg">
                            <img id="img-backround" style="position: absolute;height: 23em;width: 38em;opacity: 0.8;border-radius: 5px" src="<?= base_url().'./upload/app/bg/'.$bg['bg']; ?>">
                        </label>
                        <?php } ?>
                        <div class="card-body">
                            <div class="card-text mb-2 mt-5">
                                <div class="form-group">
                                    <label class="bg-white pr-1 pl-1 labels">Judul</label>
                                    <input class="form-control ibl" type="text" name="judul-bg" value="<?= $bg['judul']; ?>">
                                </div>
                            </div>
                            <div class="card-text mb-3">
                                <div class="form-group">
                                    <label class="bg-white pr-1 pl-1 labels">Quote</label>
                                    <input class="form-control ibl" type="text" name="quote-bg" value="<?= $bg['quote']; ?>">
                                    <input class="form-control data-gbr_lama" type="hidden" name="data-gbr_lama" value="<?= $bg['bg']; ?>">
                                </div>
                            </div>
                            <div class="card-text text-center">
                                <button type="submit" id="btn-bg" class="btn btn-primary btn-bla btn-sm labels"><i class="mdi mdi-pencil"></i> Ubah</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <small><i><i class="mdi mdi-alert"></i> Menu Ini Untuk Tampilan Utama Login Admin</i></small><br>
                    <small><i><i class="mdi mdi-alert"></i> Untuk Ganti Wallpaper Klik Area gambar Diatas !!</i></small>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .ibl{
            opacity: 0.8;
        }.btn-bla{
            opacity: 0.8;
        }.labels{
            border-radius: 5px;
        }.input-files{
            display: none;
        }
    </style>