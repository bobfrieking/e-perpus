<!--BANNER START-->
    <div class="kode-banner">
    	<ul class="bxslider">
        	<?php foreach ($slider->result() as $data_slide): ?>
            <li>
                <img style="width: 100%;height: 680px;" src="<?= base_url().'./upload/slider/'.$data_slide->gambar; ?>" alt="">
                <div class="kode-caption-2">
                    <h5><?= $data_slide->promosi; ?></h5>
                    <h2><?= $data_slide->judul; ?></h2>
                    <p><?= $data_slide->deskripsi; ?></p>
                    <div class="caption-btns">
                        <a href="#kontents">Lihat Lainnya</a>
                    </div>                  
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    <!--BANNER END-->

    <!--CONTENT START-->
    <div class="kode-content">
    	
        <!--BOOK GUIDE SECTION START-->
        <section>
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-heading-1">
                	<h2>Selamat Datang di E-Library</h2>
                    <p>Welcome to E-Library PTIK</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
                <div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="kode-service-3">
                        	<i class="fa fa-gift"></i>
                            <h3><a href="<?= base_url().'Front/Buku' ?>">Literature Books</a></h3>
                            <p>They are about Knowledge of Literature</p>
                            <a href="<?= base_url().'Front/Buku' ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-3">
                        	<i class="fa fa-book"></i>
                            <h3><a href="<?= base_url().'Front/Buku' ?>">Linguistics Books</a></h3>
                            <p>They are about the study of Language</p>
                            <a href="<?= base_url().'Front/Buku' ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-3">
                        	<i class="fa fa-clone"></i>
                            <h3><a href="<?= base_url().'Front/Buku' ?>">TEFL Books</a></h3>
                            <p>They are about the knowledge of teaching</p>
                            <a href="<?= base_url().'Front/Buku' ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-3">
                        	<i class="fa fa-calculator"></i>
                            <h3><a href="<?= base_url().'Front/Buku' ?>">Research Books</a></h3>
                            <p>They are about the methodology of Research</p>
                            <a href="<?= base_url().'Front/Buku' ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <!--TOP SELLERS SECTION START-->
        <section class="lib-categories-section" id="kontents">
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-heading-1 dark-sec">
                	<h2>Top Category</h2>
                    <p>Presenting the top most wanted searching this month</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
                <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Computers" role="tab" data-toggle="tab">Book</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
              
				<div role="tabpanel" class="tab-pane fade in active" id="Computers">
                	<ul class="bxslider">
                    	<li>
                            <?php foreach ($data_buku->result() as $buku){ ?>
                                      <!--PRODUCT GRID START-->
                                    <div class="col-md-3 col-sm-6 best-seller-pro">
                                        <figure>
                                        <img style="height: 25em;" src="<?= base_url().'./upload/buku/'.$buku->gambar; ?>" alt="">
                                    </figure>
                                    <div class="kode-text">
                                        <h3><?= $buku->judul_buku; ?></h3>
                                    </div>
                                    <div class="kode-caption">
                                        <h3><?= $buku->kategori; ?></h3>
                                        <div class="rating pr-1 pl-1">
                                            <?php if ($buku->rating == 5) { ?>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                            <?php }elseif ($buku->rating == 4) { ?>
                                                <!-- <span>☆</span> -->
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                            <?php } ?>
                                        </div>
                                        <!-- <p>Dr.Machale</p> -->
                                        <p class="price"><?= $buku->judul_buku; ?></p>
                                        <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$buku->id_buku; ?>" class="add-to-cart">Detail Buku</a>
                                        </div>
                                        </div>
                                    <!--PRODUCT GRID END-->
                                    <?php  } ?>
                        </li>

                    </ul>
                </div>
                </div>
            </div>
        </section>
       
        <!--BEST SELLER SLIDER SECTION END-->
        <!--TESTIMONIALS START-->
        <section class="lib-video-section">
        	<div class="container">
            	<h2>Total Data</h2>
            </div>
        </section>
        <!--TESTIMONIALS END-->
        <!--COUNT UP SECTION START-->
        <div class="lib-count-up-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">21</span>
                            <p>Working Year</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle"><?= $totalPinjam; ?></span>
                            <p>Books Lent</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle"><?= $totalPengarang; ?></span>
                            <p>Total of Authors</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle"><?= $totalBuku; ?></span>
                            <p>Books Published</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--FROM THE BLOG SECTION START-->
        <section>
        	<!--SECTION HEADING START-->
            <!-- <div class="container">
            	<div class="section-heading-1">
                    <h2>Blog Post</h2>
                    <p>The Latest Blog post for the biggest Blog for the books Library.</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
            </div> -->
            <!--SECTION HEADING END-->
            
        <!--FROM THE BLOG SECTION END-->
        <!--GIFT CARD SECTION START--> 
        <section class="lib-textimonials">
        	<div class="container" id="dataa-testimonyy">
            	<!--SECTION HEADING START-->
           <div class="section-heading-1 dark-sec">
                <h2>Testimony</h2>
                <!-- <p>What our clients say about the books reviews and comments</p> -->
                <div class="kode-icon"><i class="fa fa-book"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class="owl-testimonials owl-theme">
                <?php foreach ($testimn->result() as $key): ?>
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p><?= $key->komentar; ?></p>
                        </div>
                        <div class="kode-thumb">
                            <img src="<?= base_url().'./upload/testimony/'.$key->gambar; ?>" alt="">
                        </div>
                        <h4><?= $key->nama; ?></h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->    
                <?php endforeach ?>

            </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->
		
    </div>