<!-- Start Content -->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Buku</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">Buku</a></li>
<li class="breadcrumb-item active">Data Buku</li>
</ol>
</div>
<h4 class="page-title">Halaman Data Buku</h4>
</div>
</div>
</div>     
<!-- end page title --> 
<?php echo $this->session->flashdata('pesan'); ?>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row mb-2">
<div class="col-sm-4">
<a data-trigger="hover" data-content="Kembali Ke Data Buku" data-toggle="popover" href="<?= base_url().'Admin/Data_buku' ?>" class="btn btn-warning mb-2 btn-tambah-data-buku"><i class="mdi mdi-arrow-left"></i> Kembali</a>
</div>
</div>
<form enctype="multipart/form-data" method="POST" action="<?= base_url().'Backend/Buku/update_buku/'.$getbuku['id_buku'] ?>">
<div class="row">
    <input type="hidden" value="<?= $getbuku['gambar']; ?>" name="gbr_lama">
    <div class="col-lg-6 col-md-6">
        <label>
            <input class="input-file-buku-edit" style="display: none;" type="file" name="buku-edit">
            <img style="width: 370px;height: 495px" class="img-tampil-buku-edit" src="<?= base_url().'upload/' ?>buku/<?= $getbuku['gambar']; ?>">
        </label>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="form-group">
            <label>Judul Buku</label>
            <input class="form-control" type="text" name="judul-buku-edit" placeholder="Ketikan Judul Buku .." value="<?= $getbuku['judul_buku']; ?>">
        </div>
        <div class="form-group">
            <label>Nama Pengarang</label>
            <select class="form-control" name="namapengarang-edit">
                <option>Pilih..</option>
                <option <?php if ($getbuku['id_pengarang']){echo 'selected="selected"';} ?> value="<?= $getbuku['id_pengarang']; ?>"><?= $getbuku['nama_pengarang']; ?></option>
                <?php foreach ($pengarang as $key): ?>
                    <?php if ($key->nama_pengarang == $getbuku['nama_pengarang']) {}else{ ?><option value="<?= $key->id_pengarang; ?>"><?= $key->nama_pengarang; ?></option>
                    <?php } ?>
                <?php endforeach ?>
            </select>
        </div>
        <div class="row">
            <div class="col-md-7 col-xl-7">
                <div class="form-group">
                    <label>Nama Penerbit</label>
                    <select id="nama-penerbit-buku" class="form-control" name="namapenerbit-edit">
                        <option>Pilih..</option>
                        <option <?php if ($getbuku['id_penerbit']){echo 'selected="selected"';} ?> value="<?= $getbuku['id_penerbit']; ?>"><?= $getbuku['nama_penerbit']; ?></option>
                        <?php foreach ($penerbit as $key): ?>
                                <?php if ($key->nama_penerbit == $getbuku['nama_penerbit']) {}else{ ?>
                                    <option value="<?= $key->id_penerbit; ?>"><?= $key->nama_penerbit; ?></option>
                                    <?php } ?>  
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-5 col-xl-5">
                <div class="form-group">
                    <label>Beri Rating</label>
                    <select id="backing4b" name="rating-buku-edit">
                        <option <?php if ($getbuku['rating'] == 0) {echo 'selected';} ?> value="0">0</option>
                        <option <?php if ($getbuku['rating'] == 1) {echo 'selected';} ?> value="1">1</option>
                        <option <?php if ($getbuku['rating'] == 2) {echo 'selected';} ?> value="2">2</option>
                        <option <?php if ($getbuku['rating'] == 3) {echo 'selected';} ?> value="3">3</option>
                        <option <?php if ($getbuku['rating'] == 4) {echo 'selected';} ?> value="4">4</option>
                        <option <?php if ($getbuku['rating'] == 5) {echo 'selected';} ?> value="5">5</option>
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
                    <option <?php if ($getbuku['id_kategori']){echo 'selected="selected"';} ?> value="<?= $getbuku['id_kategori']; ?>"><?= $getbuku['kategori']; ?></option>
                    <?php foreach ($kategori_buku as $key): ?>
                        <?php if ($key->kategori == $getbuku['kategori']) {}else{ ?>
                        <option value="<?= $key->id_kategori; ?>"><?= $key->kategori; ?></option>
                        <?php } ?>
                    <?php endforeach ?>
                </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-group">
                <label>Tahun Terbit</label>
                <input class="form-control" type="text" name="tahunterbit-edit" id="tahun-terbit-buku" readonly="" value="<?= $getbuku['tahun_terbit'] ?>">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label>Stok</label>
                    <input class="form-control" type="number" name="stokbuku-edit" value="<?= $getbuku['stok']; ?>">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label>Deskripsi Buku</label>
            <textarea rows="3" class="form-control" name="deskripsibuku-edit">
            <?= $getbuku['deskripsi']; ?>  
            </textarea>
        </div>
        <!-- test buat link download -->
       <!--  <div class="form-group">
            <label>DOWNLOAD E-BOOK</label>
            <textarea rows="3" class="form-control">
            </textarea>
        </div> -->
        <!-- test buat link download -->
        <div class="form-group">
            <button class="btn btn-primary btn-block"><b>SAVE</button>
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
