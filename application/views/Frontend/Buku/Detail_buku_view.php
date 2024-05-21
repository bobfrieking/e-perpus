    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Halaman Detail Buku & Skripsi</h2>
            <ol class="breadcrumb">
              <li><a href="<?= base_url().'Beranda' ?>">Perpus</a></li>
              <li><a href="<?= base_url().'Front/Buku' ?>">Buku & Skripsi</a></li>
              <li class="active"> Detail Buku & Skripsi</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
    	<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--BOOK DETAIL START-->
                    <div class="lib-book-detail">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="kode-thumb">
                                    <img src="<?= base_url().'./upload/buku/'.$detail['gambar']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="kode-text">
                                	<h2><?= $detail['judul_buku']; ?></h2>
                                    <div class="product-review">
                                        <div class="rating">
                                            <?php if ($detail['rating'] == 0) {echo '<i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>';}elseif ($detail['rating'] == 1) {echo '<i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>';}elseif ($detail['rating'] == 2) {echo '<i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>';}elseif ($detail['rating'] == 3) {echo '<i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color: orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>';}elseif ($detail['rating'] == 4) {echo '<i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>';}elseif ($detail['rating'] == 5) {echo '<i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>';} ?>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <p>Pengarang : <span class="color"><?= $detail['nama_pengarang']; ?></span></p>
                                    </div>
                                    <div class="book-text">
                                    	<p>Kategori: <?= $detail['kategori']; ?>.</p>
                                        <p>Tersedia&nbsp;&nbsp;: <?= $detail['stok']; ?>.</p>
                                        <p>Penerbit: <?= $detail['nama_penerbit'] ?></p>
                                        <p>Tahun Terbit: <?= $detail['tahun_terbit']; ?></p>
                                    </div>
                                    <div class="book-text">
                                        <p>Deskripsi: <?= $detail['deskripsi']; ?></p>
                                    </div>
                                    <?php if(is_null($this->session->userdata('id_users'))){ ?>
                                    <small style="background-color: #f52a2a;" class="badge"><i>Harap Login Terlebih Dahulu Sebelum Peminjaman Buku !!</i></small>
                                    <?php }else{ ?>
                                    <a id-data-buku="<?= $detail['id_buku'] ?>" data-pinjam-stok-send-buku="<?= $detail['stok']; ?>" data-pinjam-buku="<?= $detail['judul_buku']; ?>" href="javascript:void(0)" class="add-to-cart pinjambuku">Pinjam Buku</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BOOK DETAIL END-->
                    <!--RELATED PRODUCTS START-->
                    <div class="lib-related-products">
                        <h2 class="text-center mt-5">Buku Terbaru</h2><hr>
                        <div class="row">
                            <?php foreach ($books as $buku): ?>
                                <!--PRODUCT GRID START-->
                            <div class="col-md-4 col-sm-6">
                                <div class="best-seller-pro">
                                     <figure>
                                <img style="height: 400px;width: 300px" src="<?= base_url().'./upload/buku/'.$buku->gambar; ?>" alt="">
                            </figure>
                            <div class="kode-text">
                                <h3><a href="#"><?= $buku->judul_buku; ?></a></h3>
                            </div>
                            <div class="kode-caption">
                                <h3><?= $buku->judul_buku; ?></h3>
                                <div class="rating">
                                <?php if ($buku->rating == 1) { 
                                    echo '<span>☆</span>';
                                }elseif ($buku->rating == 2) { 
                                    echo '<span>☆</span><span>☆</span>';
                                }elseif ($buku->rating == 3) {
                                    echo '<span>☆</span><span>☆</span><span>☆</span>';
                                }elseif ($buku->rating == 4) { 
                                    echo '<span>☆</span><span>☆</span><span>☆</span><span>☆</span>';
                                }elseif ($buku->rating == 5) {
                                    echo '<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>'; }else{echo '';} ?>
                                </div>
                                <p><?= $buku->nama_penerbit; ?></p>
                                <p class="price"><?= $buku->kategori; ?></p>
                                <?php if(is_null($this->session->userdata('id_users'))){ ?>
                                <?php }else{ ?>
                                <a id-data-buku="<?= $buku->id_buku; ?>" data-pinjam-stok-send-buku="<?= $buku->stok; ?>" data-pinjam-buku="<?= $buku->judul_buku; ?>" href="javascript:void(0)" class="add-to-cart pinjambuku">Pinjam Buku</a>
                                <?php } ?>
                                <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$buku->id_buku; ?>" class="add-to-cart">Lihat Buku</a>
                                    </div>
                                </div>
                            </div>
                            <!--PRODUCT GRID END-->
                            <?php endforeach ?>
                            
                        </div>
                    </div>
                    <!--RELATED PRODUCTS END-->
                </div>
            </div>
        </div>
        </div>

    <!--CONTENT END-->