                <!-- Modal-Edit-Profile -->
                  <div class="modal fade" id="modal-edit-profile"
                    aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog"
                    tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="menu-login">
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url().'Frontend/Profile/proses_edit_profile' ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-center"><b>Ubah Profile</b></h4>
                                        <div class="text-center">
                                            <br><h6>Foto / Avatar</h6><hr>
                                            <?php if (empty($users['foto'])) { ?>
                                            <label>
                                                <input style="display: none;" type="file" name="foto_edit-profil" class="input-edit-profil">
                                                <img class="img-edit-profil" style="height: 280px;border-radius:10px;width: 260px;" src="<?= base_url().'assets/document/user.jpg' ?>">
                                            </label>
                                        <?php }else{ ?>
                                            <label>
                                                <input style="display: none;" type="file" name="foto_edit-profil" class="input-edit-profil">
                                                <img class="img-edit-profil" style="height: 280px;border-radius:10px;width: 260px;" src="<?= base_url().'upload/anggota/'.$users['foto']; ?>">
                                            </label>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" name="foto_lama" value="<?= $users['foto']; ?>">
                                          <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nama-update" value="<?= $users['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username-update" value="<?= $users['username']; ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email-update" value="<?= $users['email']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>No Hp</label>
                                                <input class="form-control" type="number" name="no_hp-update" value="<?= $users['no_hp']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat-update"><?= $users['alamat']; ?></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="buton" data-dismiss="modal" class="btn btn-danger">Close</button>
                                            <button type="submit" id="btn-edit-profil" class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah</button>
                                        </div>
                                    </div> 
                                </div>
                                <div id="data-msg-login"></div>
                            </form>
                            </div>

                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- End Modal -->


            <!-- Modal Ganti Password -->
            <div id="modal-change-pass-users" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">                        
                        <form id="gantipassword-anggota">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">x</span>
                                </button>
                                        <div>Fitur Change Password</div><hr>
                                        <div id="msgChangePassUsersssssss"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password Lama</label>
                                                    <input class="form-control" type="password" id="password-current" name="" placeholder="Ketikan Password Lama" autocomplete="off">
                                                    <i id="msg-passCurrent"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group" id="objpassnew-profil">
                                                    <label>Password Baru</label>
                                                    <input class="form-control" type="password" id="passwordnew" placeholder="Ketikan Password Baru">
                                                    <i id="msg-PassNew"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center"><a id="smbunyikanPass" style="color:#808080" href="javascript:void(0)"><i class="fa fa-eye-slash"></i> Sembunyikan Password</a>
                                        <a id="icon-eye-show" style="color:#808080" href="javascript:void(0)"><i class="fa fa-eye"></i> Tampilkan Password</a></div>
                                        <hr>
                                    <button type="button" id="btn-changePassUsrs" class="btn btn-primary btn-block"> Ubah</button>
                            </div>        
                        </form>
                    </div>
                </div>
            </div>
            <!-- End -->