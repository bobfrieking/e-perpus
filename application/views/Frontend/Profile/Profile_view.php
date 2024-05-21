 <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Profile</h2>
            <ol class="breadcrumb">
              <!-- <li><a href="#">Home</a></li> -->
              <li><a href="<?= base_url().'Beranda' ?>">Perpus</a></li>
              <li class="active">Profile</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <?= $this->session->flashdata('msg_update'); ?>
    <!--CONTENT START-->
    <div class="kode-content">
        <!--AUTHOR DETAIL SECTION START-->
        <?php if (empty($this->session->userdata('id_users'))) { ?>
            <section class="kode-author-detail-2">
            <div class="container">
                <div class="kode-thumb">
                    <?php if (is_null($this->session->userdata('foto'))) { ?>
                        <img style="height: 350px;border-radius: 10px;" src="<?= base_url().'./assets/document/' ?>anggota.jpeg" alt="">
                    <?php } ?>
</div>
<div class="kode-text">
<h2>Tidak Ada</h2>
<h5>Member / Anggota Perpus</h5>
<div class="contact-box">
<div class="row">
    <div class="col-md-8">
        <table>
          <tr>
            <td><i class="fa fa-phone"></i></td>
            <td>Phone No:</td>
            <td>Tidak Ada</td>
          </tr>
          <tr>
            <td><i class="fa fa-envelope-o"></i></td>
            <td>Email :</td>
            <td>Tidak Ada</td>
          </tr>
          <tr>
            <td><i class="fa fa-user"></i></td>
            <td>Username :</td>
            <td>Tidak Ada</td>
          </tr>
        </table>
    </div>
    <div class="col-md-4">
        <div class="social-icon">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
                    <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> -->
                    <!-- <div class="signature">
                        <button class="btn btn-default"><i class="fa fa-user"></i> Edit Profile</button>
                    </div> -->
</div>
</div>
</section>
<?php }else{ ?>
<section class="kode-author-detail-2">
<div class="container">
<div class="kode-thumb">
<img style="height: 350px;width: 290px;border-radius: 10px;" src="<?= base_url().'upload/anggota/'.$this->session->userdata('foto'); ?>" alt="">
</div>
<div class="kode-text">
<h2><?= $this->session->userdata('nama'); ?></h2>
<h5>Member / Anggota Perpus</h5>
<div class="contact-box">
<div class="row">
<div class="col-md-8">
<table>
  <tr>
    <td><i class="fa fa-phone"></i></td>
    <td>Phone No:</td>
    <td><?= $this->session->userdata('no_hp'); ?></td>
  </tr>
  <tr>
    <td><i class="fa fa-envelope-o"></i></td>
    <td>Email :</td>
    <td><?= $this->session->userdata('email'); ?></td>
  </tr>
  <tr>
    <td><i class="fa fa-user"></i></td>
    <td>Username :</td>
    <td><?= $this->session->userdata('username'); ?></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<div class="social-icon">
    <ul>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
    </ul>
</div>
</div>
</div>
</div>
                    <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> -->
    <!--<div class="signature">-->
    <!--    <button class="btn btn-default btn-edit-profile"><i class="fa fa-user"></i> Edit Profile</button>-->
    <!--    <button class="btn btn-default btn-changepass-profile"><i class="fa fa-lock"></i> Ganti Password</button>-->
    <!--</div>-->
</div>
</div>
</section>
<?php } ?>
<!--AUTHOR DETAIL SECTION END-->
<!--KODE BIOGRAPHY SECTION START-->  
<?php if ($this->session->userdata('id_users') == null ) { ?>
    <section class="kode-bio">
<div class="container">
<div class="section-heading-1">
    <h2> Alamat</h2>
    <div class="kode-icon"><i class="fa fa-map"></i></div>
</div>
<div class="kode-text">
    <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
</div>
                <!-- <div class="kode-text">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                        <div class="col-md-6">
                            <h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                    </div>
                </div> -->
            </div>
</section>
<?php }else{ ?>
<section class="kode-bio">
<div class="container">
<div class="section-heading-1">
    <h2> Alamat</h2>
    <div class="kode-icon"><i class="fa fa-map"></i></div>
</div>
<div class="kode-text">
    <p><?= $this->session->userdata('alamat'); ?></p>
</div>
                <!-- <div class="kode-text">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                        <div class="col-md-6">
                            <h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <?php } ?>    
        <!--KODE BIOGRAPHY SECTION END-->