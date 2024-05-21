                    <!-- Start Content -->
  <div class="container-fluid">
      
      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box">
                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item"><a href="javascript: void(0);">Buku</a></li>
                          <li class="breadcrumb-item"><a href="javascript: void(0);">Penerbit Buku</a></li>
                          <li class="breadcrumb-item active">Data Penerbit Buku</li>
                      </ol>
                  </div>
                  <a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm mt-2"><h5><b>HALAMAN DATA PENERBIT BUKU</b></h5></a><br></br>
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
        <br><p>Klik Nama Penerbit Untuk Edit atau Hapus Data !!</p>
        </div><br>
       <form id="tambah-penerbit_buku">
            <div class="form-tambah">
              <div class="form-group">
              <label>Nama Penerbit</label>
               <input class="form-control" placeholder="Ketikan Penerbit" type="text" name="penerbit-buku" required="">
            </div>
            <div class="form-group">
              <label>Tahun Terbit</label>
              <input placeholder="Ketikan Tahun Terbit" class="form-control" type="number" name="tahun-terbit">
            </div>
            <div class="form-group">
                   <button class="btn btn-success btn-block"><i class="mdi mdi-plus"></i> Tambah</button>
            </div>
            </div>
       </form><br><hr><br>
           <form id="edit-penerbit_buku">
            <div class="form-edit">
              <input class="obj-id" id="id-prbt_buku" type="text">
              <div class="form-group">
              <label>Nama Penerbit</label>
               <input id="npb" class="form-control" placeholder="Ketikan Penerbit" type="text" required="">
            </div>
            <div class="form-group">
              <label>Tahun Terbit</label>
              <input id="ttb" placeholder="Ketikan Tahun Terbit" class="form-control" type="number">
            </div>
            <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block"><i class="mdi mdi-pencil"></i> Ubah</button>
            </div>
            <span>Atau</span>
            </div>
       </form><br>
       <button class="btn btn-danger btn-hapus-penerbit btn-block"><i class="mdi mdi-delete"></i> Delete Data <b id="nama-getdelete"></b></button><br><br>
        <!-- <div class="form-group menu-hide"> -->
                <!-- <button data-trigger="hover" data-content="Hapus Menu Ini !!" data-toggle="popover" type="button" class="btn text-dark hide-items"><i class="mdi mdi-cogs"></i> Menu</button><br><br>
                <small class="msg-small"><i>Menu Edit Ini Di Limit 2,5 menit</i></small><br><br> -->
        <!-- </div> -->
    </div>
    <div class="col-md-7">
        <div class="table-responsive">
    <table class="table table-centered table-striped dt-responsive wrap w-100" id="mytables2">
        <thead>
            <tr>
                <th>No</th>
                <th>Penerbit Buku</th>
                <th>Tahun </th>
            </tr>
        </thead>
        <tbody id="tampil_data"></tbody>
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
  .form-edit{
    display: none;
  }.btn-hapus-penerbit{
    display: none;
  }.menu-hide{
    display: none;
  }.obj-id{
    display: none;
  }
</style>