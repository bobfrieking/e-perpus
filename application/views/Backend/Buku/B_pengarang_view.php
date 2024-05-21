                    <!-- Start Content -->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Buku</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori Buku</a></li>
        <li class="breadcrumb-item active">Data Kategori Buku</li>
    </ol>
</div>
<a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm mt-2"><h5><b>HALAMAN DATA PENGARANG BUKU</b></h5></a><br></br>
</div>
</div>
</div>     
<!-- end page title --> 
<div id="msg"></div>
<!-- <div class="alert alert-success">Gagallllllll</div> -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
 <!--    <div class="row mb-2">
        <div class="col-sm-4">
            <a href="javascript:void(0);" class="btn btn-success mb-2 btn-plus-anggota"><i class="mdi mdi-plus-circle mr-2"></i> Tambah Data</a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-5 text-center">
            <div style="padding: 3%;border-radius: 10px;" class="bg-primary text-white">
            <h4>Menu Aksi Data !!</h4>
            <br><p><b>Klik Nama Pengarang Untuk Edit atau Hapus!!</b></p>
            </div><br>
           <form id="tambah-pengarang_buku">
               <div class="form-group">
               <div class="input-group">
                   <input class="form-control" placeholder="Ketikan Nama Pengarang" type="text" name="pengarang-buku" required="">
                   <div class="input-group-append">
                       <button class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</button>
                   </div>
               </div>
           </div>
           </form><hr>
               <form id="proses-edit-pengarang">
               <div class="form-group form-edit-pengarang">
                <input id="id-data-pengarang" type="text" name="id-pengarang">
               <div class="input-group">
                   <input class="form-control input-edits" placeholder="Klik Nama Kategori Untuk edit" type="text" name="pengarang_buku_edit">
                   <div class="input-group-append">
                       <button type="submit" class="btn btn-primary btn-edit"><i class="mdi mdi-pencil"></i> Edit</button>
                   </div>
               </div><br>
               <span class="textsss text-center">Atau</span>
           </div>
           </form>
           <button class="btn btn-danger btn-hapus-pengarang btn-block"><i class="mdi mdi-delete"></i> Delete Data <b id="nama-delete-pngrng"></b></button>
            <div class="setting-obj"><br>
              <!-- <div class="form-group">
                    <button data-trigger="hover" data-content="Hapus Menu Ini !!" data-toggle="popover" type="button" class="btn text-dark hide-obj-pngrng"><i class="mdi mdi-cogs"></i> Menu</button>
            </div> -->
            <!-- <small class="msg-smalls"><i>Menu Edit Ini Di Limit 2,5 menit</i></small> -->
            </div>
            <br><br>
        </div>
        <div class="col-md-7">
            <div class="table-responsive">
        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="mytables3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengarang Buku</th>
                </tr>
            </thead>
            <tbody id="data-pengarang"></tbody>
        </table>
    </div>
        </div>
    </div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col -->
</div>
        <!-- end row -->
        
    </div> <!-- container -->

</div> <!-- content -->
<style type="text/css">
    .form-edit-pengarang{
      display: none;
    }.btn-hapus-pengarang{
      display: none;
    }.setting-obj{
      display: none;
    }#id-data-pengarang{
      display: none;
    }
</style>