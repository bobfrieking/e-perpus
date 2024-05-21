                    <!-- Start Content -->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Perpus</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
<li class="breadcrumb-item active">Blog</li>
</ol>
</div>
<h4 class="page-title">Halaman Blog</h4>
</div>
</div>
</div>
<?= $this->session->flashdata('pesann'); ?>
<!-- Start Kontent -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<button class="btn btn-success mb-3 waves-effect btntmbhblogs">Tambah</button>
<div class="table-responsive">
<table class="table table-striped table-centered nowrap w-100" id="my-tables">
<thead>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Nama</th>
<th>Tanggal</th>
<th>URL</th>
<th>Deskripsi</th>
<th><i class="mdi mdi-cogs"></i></th>
</tr>
</thead>
<tbody>
<?php $n=1; foreach ($datas->result_array() as $key){
echo '<tr>';
echo '<td>'.$n++.'</td>';
echo '<td><img style="height:150px;width:150px;border-radius:9px;" src="'.base_url().'./upload/blog/'.$key['gambar'].''.'" /></td>';
echo '<td>'.$key['judul'].'</td>';
echo '<td>'.$key['nama'].'</td>';
echo '<td>'.$key['tanggal'].'</td>';
echo '<td>'.$key['url'].'</td>';
echo '<td>'.$key['deskripsi'].'</td>';
echo '<td>
    <a onclick="getDatablog('.$key['id'].')" class="text-primary" href="#"><i class="mdi mdi-pencil"></i></a> |
    <a onclick="deleteDatablog('.$key['id'].')" class="text-danger" href="javascript:void(0)"><i class="mdi mdi-delete"></i></a>
    </td>';
echo '</tr>';
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- End -->
</div>