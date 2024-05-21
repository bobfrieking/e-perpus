<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
    <div class="page-title-box">
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Petugas</a></li>
                <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
        </div>
        <a style="font-size: 12px;" href="#" class="btn btn-danger btn-sm"><h5><b>DATA PETUGAS</b></h5></a><br></br>
    </div>
</div>
</div>     
<!-- end page title --> 
<?php echo $this->session->flashdata('pesan'); ?>
<div id="alert-dataa-petugas"></div>
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <button class="btn btn-success mb-2 btninsrt"><i class="mdi mdi-plus-circle"></i> Tambah Data</button>
                </div>
                
            </div>

            <div class="table-responsive">
                <table class="table table-centered table-striped dt-responsive w-100" id="my-tablesss">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
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

</div> <!-- content