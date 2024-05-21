
<!-- Modal Tambah Data Buku -->
<div id="modal-tambah-data-buku" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="text-center">Tambah Data Buku</h4><hr>
                <form enctype="multipart/form-data" method="POST" action="<?= base_url().'Backend/Buku/tambah_buku' ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <label>
                                <input class="input-file-buku" style="display: none;" type="file" name="buku">
                                <img style="width: 370px;height: 495px" class="img-tampil-buku" src="<?= base_url().'./assets/' ?>document/anggota.jpeg">
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input class="form-control" type="text" name="judul-buku" placeholder="Ketikan Judul Buku ..">
                            </div>
                            <div class="form-group">
                                <label>Nama Pengarang</label>
                                <select class="form-control" name="namapengarang">
                                    <option>Pilih..</option>
                                    <?php foreach ($pengarang as $key): ?>
                                        <option value="<?= $key->id_pengarang; ?>"><?= $key->nama_pengarang; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xl-6">
                                    <div class="form-group">
                                        <label>Nama Penerbit</label>
                                        <select id="nama-penerbit-buku" class="form-control" name="namapenerbit">
                                            <option>Pilih..</option>
                                            <?php foreach ($penerbit as $key): ?>
                                                    <option value="<?= $key->id_penerbit; ?>"><?= $key->nama_penerbit; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6 mb-3">
                                    <div class="form-group">
                                        <label>Beri Rating</label>
                                        <select id="backing3b" name="rating-buku">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <div class="rateit rateit-mdi" data-rateit-backingfld="#backing3b" data-rateit-mode="font" data-rateit-icon=""></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="form-group">
                                    <label>Kategori Buku</label>
                                    <select class="form-control" name="kategoribuku">
                                        <option>Pilih..</option>
                                        <?php foreach ($kategori_buku as $key): ?>
                                            <option value="<?= $key->id_kategori; ?>"><?= $key->kategori; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <input class="form-control" type="text" name="tahunterbit" id="tahun-terbit-buku" readonly="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input class="form-control" type="number" name="stokbuku">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Deskripsi Buku</label>
                                <textarea rows="5" class="form-control" name="deskripsibuku">
                                 
                                <hr>
                                    <div><a style="font-size: 12px;" href="###" target="_blank" class="btn btn-warning text-white btn-sm-2 mt-2"><b>DOWNLOAD E-BOOK</b></a>  </div>     
                                </textarea>
                            </div>
                             <!-- test buat link download -->
                            <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>DOWNLOAD</label>
                                <input class="form-control" class="dlbutton"><a href="#" target="_blank">
                                </div>
                            </div> -->
                            <!-- test buat link download -->
                            <div class="form-group">
                                <button class="btn btn-success btn-block"><i class="mdi mdi-plus"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Edit Data Buku -->
<div id="modal-edit-data-buku" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="text-center">Edit Data Buku</h4><hr>
                <form enctype="multipart/form-data" method="POST" action="<?= base_url().'Backend/Buku/tambah_buku' ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <label>
                                <input class="input-file-buku-edit" style="display: none;" type="file" name="buku-edit">
                                <img style="width: 370px;height: 495px" class="img-tampil-buku-edit" src="<?= base_url().'./assets/' ?>document/contoh-buku.png">
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input class="form-control" type="text" name="judul-buku-edit" placeholder="Ketikan Judul Buku ..">
                            </div>
                            <div class="form-group">
                                <label>Nama Pengarang</label>
                                <select class="form-control" name="namapengarang-edit">
                                    <option>Pilih..</option>
                                    <?php foreach ($pengarang as $key): ?>
                                        <option value="<?= $key->id_pengarang; ?>"><?= $key->nama_pengarang; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-xl-7">
                                    <div class="form-group">
                                        <label>Nama Penerbit</label>
                                        <select id="nama-penerbit-buku" class="form-control" name="namapenerbit-edit">
                                            <option>Pilih..</option>
                                            <?php foreach ($penerbit as $key): ?>
                                                    <option value="<?= $key->id_penerbit; ?>"><?= $key->nama_penerbit; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-5">
                                    <div class="form-group">
                                        <label>Beri Rating</label>
                                        <select id="backing4b" name="nilai-rating-buku">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <div class="rateit rateit-mdi" data-rateit-backingfld="#backing4b" data-rateit-mode="font" ></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="form-group">
                                    <label>Kategori Buku</label>
                                    <select class="form-control" name="kategoribuku-edit">
                                        <option>Pilih..</option>
                                        <?php foreach ($kategori_buku as $key): ?>
                                            <option value="<?= $key->id_kategori; ?>"><?= $key->kategori; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                    <label>Tahun Terbit</label>
                                    <input class="form-control" type="text" name="tahunterbit-edit" id="tahun-terbit-buku" readonly="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input class="form-control" data-stok="stok-buku" type="number" name="stokbuku-edit">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Deskripsi Buku</label>
                                <textarea rows="3" class="form-control" name="deskripsibuku-edit"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block"><i class="mdi mdi-plus"></i> Tambah</button>
                            </div>
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
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="button" class="btn btn-warning my-2 btn-hapus-action">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Confirm Penerbit Buku -->
<!-- Warning Alert Modal -->
<div id="confirm-modal-penerbit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="button" class="btn btn-warning my-2 btn-hapus-action-pnrbit">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Confirm Pengarang Buku -->
<!-- Warning Alert Modal -->
<div id="confirm-modal-pengarang" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="button" class="btn btn-warning my-2 btn-hapus-action-pngrng">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Confirm Pengarang Buku -->
<!-- Warning Alert Modal -->
<div id="confirm-modal-buku" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <form method="POST" action="<?= base_url().'Backend/Buku/delete_data_buku' ?>">
                        <input type="hidden" name="id-buku">
                        <input type="hidden" name="gbr-buku">
                        <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                        <button class="btn btn-warning my-2">Delete</button>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

