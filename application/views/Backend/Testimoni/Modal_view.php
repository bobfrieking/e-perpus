<!-- Warning Alert Modal -->
<div id="confirm-modal-testimn" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <input type="hidden" id="data_id_delete_testimony">
                    <input type="hidden" id="data_gbr_delete_testimony">
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button type="button" class="btn btn-warning my-2 btn-hapus-action-testimn">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Tambah -->
<div id="modal-tambah-testimn" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">x</button>
                <h4>Edit Data Testimoni</h4><hr>
                <form id="formTambahTestimn">
                    <div class="form-group text-center">
                    <label>
                        <input style="display:none;" type="file" name="testimn">
                        <img id="testimn-avatar" style="height:200px;width:200px;border-radius:50%;" src="<?= base_url().'./assets/document/user.jpg' ?>">
                    </label>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama-testimn" id="nama-testimn" placeholder="Ketikan Nama Testimony">
                    <i id="msgrequire"></i>
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea class="form-control" rows="4" name="text-testimn" id="text-testimn" placeholder="Ketikan Text .."></textarea>
                    <i id="msgrequiree"></i>
                </div>
                <button type="button" class="btn btn-success btnsformtmbh float-right" onclick="setValidateData()"><i class="mdi mdi-plus"></i> Tambah</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Edit -->
<div id="modal-edit-testimn" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">x</button>
                <h4>Edit Data Testimoni</h4><hr>
                <form id="formUpdateTestimn">
                    <div class="form-group text-center">
                    <label>
                        <input style="display:none;" type="file" name="testimn-edit">
                        <img id="testimn-avatar-edit" style="height:200px;width:200px;border-radius:50%;" src="<?= base_url().'./assets/document/user.jpg' ?>">
                    </label>
                </div>
                <input type="hidden" name="data-id-update-testimn">
                <input type="hidden" name="data-gbr-update-testimn">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama-testimn-edit">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea class="form-control" rows="4" name="text-testimn-edit"></textarea>
                </div>
                <button class="btn btn-primary float-right"><i class="mdi mdi-pencil"></i> Update</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->