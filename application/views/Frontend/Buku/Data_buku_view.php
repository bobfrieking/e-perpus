			<?php foreach ($buku->result_array() as $key) { 
                   if ($stokhabis = $key['stok'] == 0) {}else{ ?>
                    <!--BOOK LISTING START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-4">
                                <div class="" data-detail-buku="<?= $key['id_buku']; ?>">
                                    <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$key['id_buku'] ?>"><img height="255"
                                     src="<?= base_url().'upload/buku/'.$key['gambar']; ?>" alt=""></a>
                                </div><br>
                                <div class="kode-text">
                                    <h3><a href="#"><?= $key['judul_buku']; ?></a></h3>
                                    <p><?= $key['kategori']; ?></p>
                                </div>
                                <div class="book-price">
                                    <p>Tersedia : <?= $key['stok']; ?></p>
                                    <div class="rating">
                                        <?php if ($key['rating'] == 0) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <?php }elseif ($key['rating'] == 1) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <?php }elseif ($key['rating'] == 2) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <?php }elseif ($key['rating'] == 3) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color: orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <?php }elseif ($key['rating'] == 4) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <?php }elseif ($key['rating'] == 5) { ?>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <i class="fa fa-star" style="color:orange"></i>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a id-data-buku="<?= $key['id_buku'] ?>" data-pinjam-stok-send-buku="<?= $key['stok']; ?>" data-pinjam-buku="<?= $key['judul_buku']; ?>" href="javascript:void(0)" class="add-to-cart <?php if(empty($this->session->userdata('id_users'))){echo"noakun";}else{echo"pinjambuku";} ?>">Pinjam Buku</a>
                            </div>
                        </div>
                        <!--BOOK LISTING END-->
            <?php } } ?>