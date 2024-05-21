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
    <a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm-2 mt-2"><h5><b>DATA KATEGORI BUKU</b></h5></a><br></br>
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
                </div><br>
               <form id="tambah-kategori_buku">
                   <div class="form-group">
                   <div class="input-group">
                       <input class="form-control" placeholder="Ketikan Kategori" type="text" name="kategori-buku" required="">
                       <div class="input-group-append">
                           <button class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</button>
                       </div>
                   </div>
               </div>
               </form><hr>
                   <form id="proses-edit-kategori">
                   <div class="form-group form-edit-kategori">
                    <input class="id-data" type="text" name="id-kategori">
                   <div class="input-group">
                       <input class="form-control input-edits" placeholder="Klik Nama Kategori Untuk edit" type="text" name="kategori_buku_edit">
                       <div class="input-group-append">
                           <button type="submit" class="btn btn-primary btn-edit"><i class="mdi mdi-square-edit-outline bg-primary text-white rounded"></i> Edit</button>
                       </div>
                   </div>
               </div>
               </form><br>
       <button class="btn btn-danger btn-hapus-penerbit btn-block"><i class="mdi mdi-delete"></i> Delete Data <b id="nama-getdelete"></b></button><br><br>
                <!-- <small class="msg-small"><i>Menu Edit Ini Di Limit 2,5 menit</i></small><br><br> -->
            </div>
            <div class="col-md-7">
                <div class="table-responsive">
            <table class="table table-centered table-striped dt-responsive wrap w-100" id="mytables">
                <thead>
                    <tr>
                        <th>Id Kategori</th>
                        <th>Kategori Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

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
.form-edit-kategori{
display: none;
}.id-data{
display: none;
}.btn-hapus{
display: none;
}.hide-obj{
display: none;
margin-left: 40%;
margin-top: 20px;
}.msg-small{
display: none;
}
</style>