                <!-- Start Content -->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Peminjaman</a></li> -->
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pengembalian</a></li>
    <li class="breadcrumb-item active">Pengembalian Buku</li>
</ol>
</div>
<a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm-2 mt-2"><h5><b>DATA PENGEMBALIAN BUKU</b></h5></a><br></br>
</div>
</div>
</div>     
<!-- end page title -->
<div id="pesan-data-alert"></div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row mb-2">
   <!--  <div class="col-sm-4">
        <a data-trigger="hover" data-content="Tambah Data Buku" data-toggle="popover" href="javascript:void(0);" class="btn btn-success mb-2 btn-tambah-data-buku"><i class="mdi mdi-plus-circle"></i> Buku</a>
    </div> -->
</div>
    <div class="table-responsive">
        <table class="table table-centered w-100 nowrap dt-responsive" id="Tables-Pengembalian">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Avatar</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Batas Pinjam</th>
                    <th>Jumlah Pinjam</th>
                    <th>Dikembalikan Pada</th>
                    <th>Denda</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th style="width: 85px;">Aksi</th>
                </tr>
            </thead>
            
        </table>
    </div>  
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- container -->

</div> <!-- content ---->

<!-- Modal Konfirmasi Hapus Data -->
<!-- Warning Alert Modal -->
<div id="confirm-modal-pengembalian" class="modal fade" tabindex="1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-body p-4">
<div class="text-center">
<i class="dripicons-warning h1 text-warning"></i>
<h4 class="mt-2">Peringatan !!</h4>
<input type="hidden" id="data_id_pengembalian">
<p class="mt-3">Anda Yakin Ingin Hapus Data Ini ??</p>
<button data-dismiss="modal" type="button" class="btn btn-danger my-2">Kembali</button>
<button type="button" class="btn btn-warning my-2 btn-hapus-action-pengembalian">Hapus</button>
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Batas Modal -->