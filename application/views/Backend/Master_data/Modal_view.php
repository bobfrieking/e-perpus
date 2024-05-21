<!-- Modal Tambah -->
<div id="modal_tambah_petugas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Petugas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="formprosesTambahPetugas" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input class="input-users" type="file" name="petugas">
                                <img class="img-users" src="<?= base_url().'./' ?>assets/document/anggota.jpeg">
                            </label>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password">
                        </div>       
                        </div>
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input class="form-control" type="number" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
                </form>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Edit Data Petugas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="proses-update-data-petugas">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input class="input-users-e" type="file" name="petugas-edit">
                                <img class="img-users-e" src="<?= base_url().'./' ?>assets/document/anggota.jpeg">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input class="input-hides" id="id-userss" type="text" name="id">
                            <input class="input-hides" id="gbr-lama" type="text" name="gbr_lama">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="nama-usr" class="form-control" type="text" name="nama-e">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email-usr" class="form-control" type="email" name="email-e">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="pass-usr" class="form-control" type="text" name="password-e">
                        </div>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>No Hp</label>
                        <input id="no_hp-usr" class="form-control" type="number" name="no_hp-e">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Status</label>
                        <select id="status-usr" class="form-control" name="status">
                            <option>Pilih..</option>
                            <option value="1">Active</option>
                            <option value="0">Non Active</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea id="alamat-usr" class="form-control" name="alamat-e"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Edit</button>
            </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<!-- Modal Anggota -->
<div id="modal_tambah_anggota" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data Anggota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?= base_url().'Backend/Master_data/tambah_anggota' ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input class="input-users" type="file" name="anggota">
                                <img class="img-users" src="<?= base_url().'./' ?>assets/document/anggota.jpeg">
                            </label>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password">
                        </div>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>No Hp</label>
                            <input class="form-control" type="number" name="no_hp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button class="btn btn-success">Tambah</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Edit Data Anggota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" id="proses-update-data-anggota">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input class="input-users-e" type="file" name="anggota-edit">
                                <img class="img-users-e" src="<?= base_url().'./' ?>assets/document/anggota.jpeg">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input class="input-hides" id="id-userss" type="text" name="id">
                            <input class="input-hides" id="gbr-lama" type="text" name="gbr_lama">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="nama-usr" class="form-control" type="text" name="nama-e">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email-usr" class="form-control" type="email" name="email-e">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="pass-usr" class="form-control" type="text" name="password-e">
                        </div>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>No Hp</label>
                        <input id="no_hp-usr" class="form-control" type="number" name="no_hp-e">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Status</label>
                        <select id="status-usr" class="form-control" name="status">
                            <option>Pilih..</option>
                            <option value="1">Active</option>
                            <option value="0">Non Active</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea id="alamat-usr" class="form-control" name="alamat-e"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Edit</button>
            </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!-- Warning Alert Modal -->
<div id="confirm-modal-petugas" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <form id="proses-delete-data-petugas">
                        <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <input type="hidden" id="data-id-petugas">
                    <input type="hidden" id="data-foto-petugas">
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button class="btn btn-warning my-2">Delete</button>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Warning Alert Modal -->
<div id="confirm-modal-anggota" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                        <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <input type="hidden" id="data-id-anggotaa">
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button class="btn btn-warning my-2 btn-action-delete-data-anggotaa">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<style type="text/css">
    .input-users{
        display: none;
    }.img-users{
        height: 230px;
        width: 230px;
        border-radius: 10px;
    }
    .input-users-e{
        display: none;
    }.img-users-e{
        height: 230px;
        width: 230px;
        border-radius: 10px;
    }.input-hides{
        display: none;
    }.idddss{
        display:none;
    }
</style>