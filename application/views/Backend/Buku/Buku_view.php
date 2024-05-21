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
<a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm mt-2"><h5><b>DATA BUKU</b></h5></a><br></br>
</div>
</div>
</div>     
<!-- end page title --> 
<?php echo $this->session->flashdata('buku'); ?>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row mb-2">
<div class="col-sm-4">
<a data-trigger="hover" data-content="Tambah Data Buku" data-toggle="popover" href="javascript:void(0);" class="btn btn-success mb-2 btn-tambah-data-buku"><i class="mdi mdi-plus-circle"></i> Buku</a>
</div>
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered w-100 dt-responsive wrap" id="products-datatable">
<thead class="thead-info">
<tr>
<th class="all" style="width: 20px;">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
</div>
</th>
<th class="all">Buku</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>Tahun Terbit</th>
<th>Kategori</th>
<th>Stok Buku</th>
<th style="width: 85px;">Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach ($buku->result_array() as $data_buku): ?>
<tr>
    <td>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
        </div>
    </td>
    <td>
        <img src="<?= base_url().'upload/buku/'.$data_buku['gambar']; ?>" alt="<?= $data_buku['judul_buku']; ?>" title="<?= $data_buku['judul_buku']; ?>" class="rounded mr-3" height="60" width="50" />
        <p class="m-0 d-inline-block align-middle font-16">
            <a href="apps-ecommerce-products-details.html" class="text-body"><?= $data_buku['judul_buku']; ?></a>
            <br/>
            <?php if ($data_buku['rating'] == 0) { ?>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <?php }elseif ($data_buku['rating'] == 1) { ?>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <?php }elseif ($data_buku['rating'] == 2) { ?>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <?php }elseif ($data_buku['rating'] == 3) { ?>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <?php }elseif ($data_buku['rating'] == 4) { ?>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-dark mdi mdi-star"></span>
            <?php }elseif ($data_buku['rating'] == 5) { ?>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <span class="text-warning mdi mdi-star"></span>
            <?php }else{echo "Kosong..";} ?>
        </p>
    </td>
    <td><?= $data_buku['nama_pengarang']; ?></td>
    <td><?= $data_buku['nama_penerbit']; ?></td>
    <td><?= $data_buku['tahun_terbit']; ?></td>
    <td><?= $data_buku['kategori']; ?></td>
    <td><?= $data_buku['stok']; ?></td>
    <td class="table-action">
        <a data="<?= $data_buku['id_buku']; ?>"data-trigger="hover" data-content="Edits Data Buku" data-toggle="popover" href="<?= base_url().'Backend/Buku/EditDataBuku/'.$data_buku['id_buku']; ?>" class="action-icon text-primary"> <i class="mdi mdi-square-edit-outline bg-primary text-white rounded"></i></a>
        <a data="<?= $data_buku['id_buku']; ?>" data-trigger="hover" data-content="Hapus Data Buku" data-toggle="popover" href="javascript:void(0);" class="action-icon delete-data-buku text-danger"> <i class="mdi mdi-delete bg-danger text-white rounded"></i></a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>  
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- container -->

</div> <!-- content