 <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Buku Dan Skripsi</h2>
            <ol class="breadcrumb">
              <li><a href="#">Perpus</a></li>
              <li class="active">Buku Dan Skripsi</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <div class="container">
            <div style="margin-bottom: 10px;">Data Records : <span id="total-buku"></span> Buku</div><hr>
        	<div class="row">
            	<div class="col-md-3 sidebar">
                	<!--SEARCH WIDGET START-->	
                    <div class="widget widget-search">
                        <h2>Pencarian</h2>
                    	<div class="input-container">
                    		<input class="dataa-bukuuuu" id="keyword-buku" type="text" placeholder="Cari Buku , Pengarang , Penerbit" autofocus="on">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <!--SEARCH WIDGET END-->
                     
                    <!--CATEGORY WIDGET START-->
                   <!--  <div class="widget widget-categories"> -->
                        <div class="position-relative form-group">
                    	<h2>Kategori</h2>
                        <select class="form-control" id="filter-kategori-buku">
                            <option value="">Pilih..</option>
                            <?php 
                            $data = $this->db->get('kategori_buku');
                            foreach ($data->result_array() as $key): ?>
                                <option><?= $key['kategori']; ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- <ul>
                        	<li><a href="#">Photoshop</a></li>
                            <li><a href="#">web/Graphic Design</a></li>
                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="#">Video Editing</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">web/Graphic Design</a></li>
                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="#">Video Editing</a></li>
                        </ul> -->
                    </div>
                    <!--CATEGORY WIDGET END-->
                    <!--NEW ARRIVAL WIDGET START-->
                    <div class="widget widget-new-arrival">
                    	<h2>The Most Requests</h2>
                        <ul class="bxslider">
                            <li>
                            	<?php foreach ($rat4 as $rating4): ?>
                                    <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$rating4['id_buku']; ?>"><img src="<?= base_url().'./upload/buku/'.$rating4['gambar']; ?>" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3><?= $rating4['judul_buku']; ?></h3>
                                        <p>The most request book with the high motivation</p>
                                    </div>
                                    </div>
                                <?php endforeach ?>
                            </li>
                            <li>
                                <?php foreach ($rat5 as $rating5): ?>
                                    <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$rating5['id_buku']; ?>"><img src="<?= base_url().'./upload/buku/'.$rating5['gambar']; ?>" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3><?= $rating5['judul_buku']; ?></h3>
                                        <p>The book that you can not miss it to read to improve your knowledge</p>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </li>
                        </ul>
                    </div>
                    <!--NEW ARRIVAL WIDGET END-->
                </div>
            	<div class="col-md-9">
                	<div class="row">
                    	<div id="tampil-data-buku">
                            <h4 class="text-center mb-5">Blank..</h4>
                        </div>
                        <div id="paginations"></div>
                        <!-- <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
            
        </div>
   </div>