<div id="modal-tambah-blog" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<h4>Tambah Blog</h4><hr class="mb-3">
				<form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?= base_url().'Backend/Blog/prosesTambahblog' ?>">
					<div class="row">
					<div class="col-md-6">
						<label>
							<input class="input-file-blog" style="display:none;" type="file" name="blog">
							<img class="img-file-blog" style="height:320px;width:385px;border-radius:10px" src="<?= base_url().'./assets/document/preview.jpg' ?>">
						</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Judul</label>
							<input class="form-control" type="text" name="judul" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" name="nama" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input class="form-control" type="date" name="tanggal" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>URL</label>
							<input class="form-control" type="text" name="url">
							<!-- <span class="invalid-feedback">
					            Harap isikan !!
					        </span> -->
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control" name="deskripsi" required></textarea>
					<span class="invalid-feedback">
					    Harap isikan !!
				    </span>
				</div>
				<div class="row">
					<div class="col-md-6">
						<button class="btn btn-danger btn-block" data-dismiss="modal"> Close</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-success btn-block"> Tambah</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Update Data -->
<div id="modal-update-blog" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<h4>Tambah Blog</h4><hr class="mb-3">
				<form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?= base_url().'Backend/Blog/proses_updateblog' ?>">
					<div class="row">
					<div class="col-md-6">
						<label>
							<input class="input-file-blog-edit" style="display:none;" type="file" name="blog-edit">
							<img class="img-file-blog-edit" style="height:320px;width:385px;border-radius:10px" src="<?= base_url().'./assets/document/preview.jpg' ?>">
						</label>
					</div>
					<div class="col-md-6">
						<input type="hidden" name="id-edit-blog">
						<div class="form-group">
							<label>Judul</label>
							<input class="form-control" type="text" name="judul-edit" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" type="text" name="nama-edit" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input class="form-control" type="date" name="tanggal-edit" required>
							<span class="invalid-feedback">
					            Harap isikan !!
					        </span>
						</div>
						<div class="form-group">
							<label>URL</label>
							<input class="form-control" type="text" name="url-edit">
							<!-- <span class="invalid-feedback">
					            Harap isikan !!
					        </span> -->
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control" name="deskripsi-edit" required></textarea>
					<span class="invalid-feedback">
					    Harap isikan !!
				    </span>
				</div>
				<div class="row">
					<div class="col-md-6">
						<button class="btn btn-danger btn-block" data-dismiss="modal"> Close</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-primary btn-block"> Update</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Warning Alert Modal -->
<div id="confirm-modal-blog" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <form method="POST" action="<?= base_url().'Backend/Blog/DeleteBlog' ?>">
                	<div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Peringatan !!</h4>
                    <p class="mt-3">Anda Yakin Ingin Delete Data Ini ??</p>
                    <input type="hidden" name="data-id-blog">
                    <button data-dismiss="modal" type="button" class="btn btn-danger my-2">Close</button>
                    <button class="btn btn-warning my-2">Delete</button>
                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->