<!-- Warning Alert Modal -->
<div id="modal-email" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Kirim Balasan Via Gmail !!</h4><hr>
                    <form id="SendMailto">
                        <div class="form-group">
                            <label>Untuk :</label>
                            <input type="email" class="form-control" name="to-email-data" readonly>
                        </div>
                        <div class="form-group">
                            <label>Subjek :</label>
                            <input type="text" class="form-control" name="subjek-email" placeholder="Ketikan Subjek !!">
                        </div>
                        <div class="form-group">
                            <label>Pesan :</label>
                            <input type="hidden" name="psn-client">
                            <textarea class="form-control" name="pesannn-email" rows="3" placeholder="Ketikan Pesan Yang Akan Di Kirim !!"></textarea>
                        </div>
                       <!--  <div class="form-group">
                            <label>Berkas :</label>
                            <input class="form-control" type="file" name="emailss">
                        </div> -->
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="submit" class="btn btn-success my-2">Kirim</button>
                    </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Warning Alert Modal -->
<div id="confirm-modal-kontak" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <input type="hidden" id="data-id-kontak-delete">
                    <p class="mt-3">Anda Yakin Ingin Hapus Data Ini ??</p>
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="button" class="btn btn-warning my-2 btn-hapus-actions-kontak">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

