<!-- Warning Alert Modal -->
<div id="modal-aksistatus" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <button class="close" data-dismiss="modal">x</button>
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Pilih Menu Dibawah Untuk Aksi Peminjaman ??</p>
                    <div class="row">
                        <div class="col-md-12">
                          <form id="stspeminjaman">
                                <input type="hidden" name="id-btn-aksi-peminjaman">
                                <div class="form-group">
                                    <label>Proses Aksi</label>
                                    <select class="form-control" id="select-status-peminjaman" name="btnprocesspeminjaman">
                                        <option>Pilih..</option>
                                        <option value="0">DiProses</option>
                                        <option value="1">DiPinjam</option>
                                        <option value="2">DiKembalikan</option>
                                    </select>
                                </div>
                              <button class="btn btn-success btn-sm text-white"><i class="mdi mdi-check"></i> Ok</button>
                          </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Warning Alert Modal -->
<div id="confirm-modal-peminjaman" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <form id="formDeletePeminjaman">
                    <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Hapus Data Ini ??</p>
                    <input type="hidden" name="dataByidPeminjaman">
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="submit" class="btn btn-warning my-2 btn-hapus-action-peminjaman">Delete</button>
                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->