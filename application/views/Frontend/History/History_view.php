 <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>History</h2>
            <ol class="breadcrumb">
              <!-- <li><a href="#">Home</a></li> -->
              <li><a href="#">E-Library</a></li>
              <li class="active">History</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content">
        <!--AUTHOR DETAIL SECTION START-->
            <div class="container">
                
                <div class="kode-text">
                    <h2 class="text-center">Buku Yang Di Kembalikan</h2>
                    <hr>
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-md-12">
                                <table style="border: none;" id="Mytabless">
                                    <thead style="font-size: 20px;border-bottom: 1px solid white;">
                                        <tr>
                                        <th>No</th>
                                        <th>Buku</th>
                                        <th>Dikembalikan</th>
                                        <th>Denda</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $n=1;
                                        foreach ($histori->result_array() as $dataku) {
                                        if (empty($histori)) { 
                                        echo '<td colspan="6"><h4 class="text-center" style="color:white;padding:50px;">Kosong</h4></td>';
                                         }else ?>
                                        <tr id="tablesMy-<?php $dataku['id_peminjaman'];  ?>">
                                        <td><?= $n++; ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img style="height: 130px;width: 110px;border-radius: 10px" src="<?= base_url().'upload/buku/'.$dataku['gambar']; ?>">
                                                </div>
                                                <div class="col-md-6"><h5 style="color: white;"><?= $dataku['judul_buku']; ?></h5><hr></div>
                                            </div>
                                        </td>
                                        <td><br><br><?= date("H:i:s d/F/Y",strtotime($dataku['tanggal'])); ?></td>
                                        <td><br><br>
                                            <?php if ($dataku['denda'] == 1) {
                                                echo '<span style="background-color: green;" class="badge"><i class="fa fa-check"></i> Tepat Waktu</span>';
                                            }else if ($dataku['denda'] == 0) {
                                                echo '<span style="background-color: orange;" class="badge"><i class="fa fa-info-circle"></i> Tidak Ada</span>';
                                            }else{
                                                echo '<span style="background-color: red;" class="badge"><i class="fa fa-money"></i> ' .'Rp. '.number_format($dataku['denda']). '</span>';
                                            } ?>
                                        </td>
                                        <td><br><br>
                                            <?= $dataku['keterangan']; ?>
                                        </td>
                                        <td><br><br>
                                            <?php if ($dataku['status'] == 2) { ?>
                                                <span style="background-color: blue;" class="badge"> DiKembalikan</span>
                                        </td>
                                        </tr>
                                        <?php } ?>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end Data buku yg dipinjam -->


            </div>
        </div>