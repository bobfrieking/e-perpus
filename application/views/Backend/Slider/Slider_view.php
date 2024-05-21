                    <!-- Start Content -->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<?= $this->session->flashdata('pesan'); ?>
<?= $this->session->flashdata('hapus_slider'); ?>
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Carousel/Slider</a></li>
        <li class="breadcrumb-item active">Carousel/Slider Frontend</li>
    </ol>
</div>
<h4 class="page-title">Halaman Menu Carousel/Slider Frontend</h4>
</div>
</div>
</div>     
<!-- end page title -->
<div class="row">
<div class="col-12">
<button id="btn-tambah-slider" class="btn btn-success mb-4"><i class="mdi mdi-plus"></i> Tambah Slider</button>
</div> <!-- end col -->
</div>
<!-- end row -->
<div class="row">
<?php foreach ($slider->result_array() as $slider): ?>
<div class="col-md-5">
<div class="card bg-secondary text-white text-center" style="background-image: url(<?= base_url().'./upload/slider/'.$slider['gambar']; ?>);background-size: cover;height: 250px">
<div class="card-body">
    <h5 class="card-title bg-secondary ttt"><?= $slider['judul']; ?></h5>
    <p class="card-text bg-secondary ttt"><?= $slider['promosi']; ?></p>
        <p class="card-text bg-secondary ttt"><?= $slider['deskripsi']; ?></p>
    <a data-edit="<?= $slider['id']; ?>" href="javascript: void(0);" class="btn btn-primary btn-sm btn-edit-slider"><i class="mdi mdi-pencil"></i> Edit</a>
    <a data="<?= $slider['id']; ?>" href="javascript: void(0);" class="btn btn-danger btn-sm btn-delete-slider"><i class="mdi mdi-delete"></i> Hapus</a>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<?php endforeach ?>
</div>
</div>
<style type="text/css">
.ttt{
opacity: 0.7;
}
</style>