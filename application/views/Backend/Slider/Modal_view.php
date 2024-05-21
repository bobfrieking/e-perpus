<!--  Modal Tambah -->
<div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-4">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url().'Backend/Slider/proses_tambah' ?>">
                    <div class="row mb-3">
                    <div class="col-md-7 col-lg-7">
                        <label>
                            <input class="input-carousel" type="file" name="slider">
                            <img class="img-carousel" src="<?= base_url().'assets/document/preview.jpg' ?>">
                        </label>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="form-group">
                            <label>Judul</label>
                            <input class="form-control" type="text" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Promosi</label>
                            <input class="form-control" type="text" name="promosi">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea rows="4" class="form-control" name="deskripsi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                       <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Kembali</button></div>
                    <div class="col-md-6 col-lg-6">
                        <button type="submit" class="btn btn-success btn-block">Tambah</button>  
                        </div>
                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Warning Alert Modal -->
<div id="confirm-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <form method="GET" action="<?= base_url().'Backend/Slider/proses_hapus_slider' ?>">
                    <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Hapus Data Ini ??</p>
                    <input type="hidden" name="dataByid">
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Kembali</button>
                    <button type="submit" class="btn btn-warning my-2 btn-hapus-action">Hapus</button>
                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Modal Tambah -->
<div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-4">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url().'Backend/Slider/proses_update' ?>">
                    <div class="row mb-3">
                    <div class="col-md-7 col-lg-7">
                        <label>
                            <input class="input-carousel-edit" type="file" name="slider-edit">
                            <img class="img-carousel-edit" src="<?= base_url().'assets/document/preview.jpg' ?>">
                        </label>
                    </div>
                    <div class="col-md-5 col-lg-5">
                       <!-- Id Data & Data Gbr -->
                        <input type="hidden" name="data-id-slider-edit">
                        <input type="hidden" name="data-gbr-slider-edit">
                        <!-- -///- -->
                        <div class="form-group">
                            <label>Judul</label>
                            <input class="form-control" type="text" name="judul-edit-slider">
                        </div>
                        <div class="form-group">
                            <label>Promosi</label>
                            <input class="form-control" type="text" name="promosi-edit">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea rows="4" class="form-control" name="deskripsi-edit"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                       <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Kembali</button></div>
                    <div class="col-md-6 col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>  
                        </div>
                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <style type="text/css">
        .input-carousel{
            display: none;
        }.img-carousel{
            width: 30em;
            height: 20em;
            border-radius: 9px;
        }
        .input-carousel-edit{
            display: none;
        }.img-carousel-edit{
            width: 30em;
            height: 20em;
            border-radius: 9px;
        }
    </style>