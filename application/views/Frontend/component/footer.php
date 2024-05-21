                 <!-- Modal-Login -->
                  <div class="modal fade" id="modal-login"
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
                                <form method="POST" action="<?= base_url().'process_tmp' ?>">
                                <h4 class="text-center"><b>Login</b></h4>
                                <h6 class="text-center"><b>Please Login for Acccess</h6>
                                <?php 
                                $db = $this->db->get_where('app',['id_app'=>1])->row_array();
                                if (empty($db)) { ?>
                                    <h4 class="text-center"><?= $db['nama']; ?></h4>
                                <?php }else{ ?>
                                <div class="text-center">
                                    <img style="height: 34px;width: 170px;" src="<?= base_url().'./upload/app/'.$db['icon']; ?>">
                                </div>
                                <?php } ?>
                                <div style="margin-top: 15px;" id="data-msg-login"></div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" id="username-login" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="Password" id="password-login" name="password" required="">
                                <span>
                                    <a style="display:none;" class="text-muted icon-eye-Pass" href="javascript:void(0)"><i class="fa fa-eye"></i> Password</a>
                                    <a class="text-muted icon-eye-slashPass" href="javascript:void(0)"><i class="fa fa-eye-slash"></i> Password</a>
                                </span>
                            </div>

                            <!-- <div class="modal-footer"> -->
                                <button type="button" id="btn-logins" class="btn btn-success"><i class="fa fa-check"></i> Enter</button>
                            <hr>
                            <div>
                            <p><mark style="background-color:orange">No Member Account yet??</mark></p>
                                <div><a style="font-size: 16px;" class="btn-daftars" href="javascript:void(0)"><b><u>REGISTER HERE!!</u></b></a></div></b>
                                <!-- <a class="btn-daftars" href="javascript:void(0)">REGISTER HERE!!</a></b> -->
                                <p>- Pastikan isi data dengan lengkap sesuai dengan data kampus seperti: <i>nama, alamat, nomor telephon, email, dll.</i> Data yang tidak sesuai ketentuan <mark style="background-color:pink">tidak akan diapproved.</mark></p>
                                <hr>
                            <a class="btn btn-primary btn-block"a href="Admin/Login"><b><i></i>LOGIN for ADMINISTRATOR</b></a> 
                            
                            </form>
                            </div>

                      </div>
                    </div>
                  </div>
                </div>
                  <!-- End Modal -->
                  <!-- Modal-Login -->
                  <div class="modal fade" id="modal-daftar_anggota"
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
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url().'Frontend/Home/prosesRegistrasiAnggota' ?>">
                                <h4 class="text-center"><b>Daftar</b></h4>
                                <h6 class="text-center"><b>No member Account? Please register!</b></h6>
                                <?php if (empty($db)) { ?>
                                    <h4 class="text-center"><?= $db['nama']; ?></h4>
                                <?php }else{ ?>
                                <div class="text-center">
                                    <img style="height: 34px;width: 170px;" src="<?= base_url().'./upload/app/'.$db['icon']; ?>">
                                </div>
                                <?php } ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" required="" name="nama-new" placeholder="Ketikan Full Nama Anda !!">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email-new" placeholder="Ketikan Email UNIMA">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="user-new" required="" placeholder="Ketikan Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="Password" id="passnormal" name="pass-new" placeholder="Ketikan Password" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="Password" id="knfirmPass" placeholder="Ketikan konfrm Password">
                                    <i id="konfirmpass"><i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Foto / Avatar</label>
                                    <label>
                                        <input class="inpt-login" style="display:none;" type="file" name="avatar-anggota">
                                        <img class="img-login" style="margin-left: 2em;height: 220px;width: 16em;border-radius: 10px" src="<?= base_url().'assets/document/anggota.jpeg' ?>">
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Hp / Telephone</label>
                                        <input class="form-control" type="number" name="noHp-new" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea rows="4" class="form-control" name="alamat-new" placeholder="Isikan Lengkap Alamat !!"></textarea>
                                    </div>
                                    <small><i class="fa fa-arrow-left"></i> Click Photo or Avatar </small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal"> Cancel</button>
                                <button type="submit" id="btndaftar" class="btn btn-primary"><i class="fa fa-plus"></i> Register</button>
                            </div>
                            </form>
                            </div>

                      </div>
                    </div>
                  </div>
                </div>
                  <!-- End Modal -->


    <footer class="footer-3">
        <div class="container">
            <div class="row">
                <!--CATEGORY WIDGET START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-categories">
                        <h2>Information</h2>
                        <ul>
                            <li><a href="#">Specials</a></li> 
                            <li><a href="#">New products</a></li> 
                            <li><a href="#">Best sellers</a></li> 
                            <li><a href="#">Contact us</a></li> 
                            <li><a href="#">Terms of use</a></li> 
                            <li><a href="#">Sitemap</a></li>  
                        </ul>
                    </div>
                </div>
               
                <!--TWITTER WIDGET START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-flickr">
                        <h2>Gallery Buku Terbaru</h2>
                        <ul>
                            <?php
                                $this->db->select('*');
                                $this->db->from('buku');
                                $this->db->order_by('id_buku', 'desc');
                                $this->db->limit(6);
                                $bukuuu = $this->db->get();
                             ?> 
                            <?php foreach ($bukuuu->result() as $row): ?>
                            <li>
                                <a href="<?= base_url().'Frontend/Buku/detail_buku/'.$row->id_buku ?>"><img style="height: 110px;width: 110px;" src="<?= base_url().'./' ?>upload/buku/<?= $row->gambar; ?>" alt=""></a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!--TWITTER WIDGET END-->
                
                <!--NEWSLETTER START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-contact-info">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <i class="fa fa-paper-plane"></i>
                                <div class="kode-text">
                                    <h4>Message</h4>
                                    <p>Book is the source of Knowledge </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="kode-text">
                                    <h4>Telephone / No Hp</h4>
                                    <p>+62815-978-1395</p>
                                    <!-- <p>+55(62) 55258-4570</p> -->
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <div class="kode-text">
                                    <h4>Email Address</h4>
                                    <a href="#">admineperpus@gmail.com</a>
                                </div>
                            </li>
                        </ul>                        
                    </div>
                </div>
                <!--NEWSLETTER START END-->
            </div>
        </div>
    </footer>
    <!--CONTENT END-->
    <div class="footer-2">
    	<div class="container">
        	<div class="lib-copyrights">
                <p>Copyrights © <script type="text/javascript">document.write(new Date().getFullYear());</script> E-Library</p>
                <div class="social-icon">
                	<ul>
                    	<li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url().'assets/frontend/js/jquery.min.js' ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url().'assets/frontend/js/modernizr.custom.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/jquery.bxslider.min.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/bootstrap-slider.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/waypoints.min.js' ?>"></script> 
<script src="<?= base_url().'assets/frontend/js/jquery.counterup.min.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/owl.carousel.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/dl-menu/modernizr.custom.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/dl-menu/jquery.dlmenu.js' ?>"></script>
<script type="text/javascript" src="<?= base_url().'assets/frontend/lib/hash.js' ?>"></script>
<script type="text/javascript" src="<?= base_url().'assets/frontend/lib/booklet-lib.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/jquerypp.custom.js' ?>"></script>
<script src="<?= base_url().'assets/frontend/js/jquery.bookblock.js' ?>"></script>
<script src="<?= base_url().'assets/backend/js/vendor/jquery.dataTables.min.js' ?>"></script>
<script src="<?= base_url().'assets/backend/js/vendor/dataTables.bootstrap4.js' ?>"></script>


<script src="<?= base_url().'assets/backend/js/functions.js' ?>"></script>
<script type="text/javascript">
    $(function(){
        $('#Mytabless').DataTable();

        $('.inpt-login').change(Target);

        function Target(){

            let ini = $(this);
            let is = this;
            let file = is.files;
            let files = is.files[0];
            if (file && files) {
                let is_files = new FileReader();
                is_files . onload = function (to) {
                    ini.next('.img-login').attr('src', to.target.result).show()
                }
                is_files . readAsDataURL(files);
            }

        }

       // Area Show/Hide Pass Login ----------------------
        $(document).on('click','.icon-eye-slashPass',function() {
            $(".icon-eye-Pass").show();
            $(".icon-eye-slashPass").hide();
            $("#password-login").attr("type","text");
        });
        $(document).on('click','.icon-eye-Pass',function() {
            $(".icon-eye-Pass").hide();
            $(".icon-eye-slashPass").show();
            $("#password-login").attr("type","password");
        });
       // End --------------------------------------------

        $('#btndaftar').click(validateJsNew);
        function validateJsNew(){
            let passdnotmatch= '<small style="color:red">Password Tidak Sama !!!</small>';
            let knfirm = $('#knfirmPass').val();
            let passwrd= $('#passnormal').val();
            if (knfirm != passwrd) {
                $('#konfirmpass').html(passdnotmatch);
                $('#knfirmPass').css("border","1px solid red");
                $('#btndaftar').attr("type","button");
                return false;
            }else{
                $('#btndaftar').attr("type","submit");
                return true;
            }
        }
        $('#btn-logins').click(processLogging);
        function processLogging(){
            var required = '<div class="alert alert-danger"> Harap Isikan !!!</div>';
            let username = $('#username-login').val();
            let password = $('#password-login').val();
                 if (username == "" || password == "") {
                    $("#data-msg-login").html(required);
                 }else{
                    $.ajax({
                        type    :"POST",
                        url     :"<?= base_url(); ?>Frontend/Login/CekUserss",
                        data    :{username:username,password:password},
                        dataType:"json",
                        beforeSend : function(data) {
                                $('#btn-logins').html('<i class="fa fa-spinner"></i> Loading ..').attr("readonly",true);
                                }
                            }).done (function(data){
                            if (data.data == 1) {
                                $('#data-msg-login').html(data.ada_msg);
                                $('#btn-logins').attr("type","submit");
                                $('#btn-logins').attr("class","btn btn-success").html('<i class="fa fa-check"></i> Ok').attr("readonly",false);
                                return true;
                            }else if (data.data == 0) {
                                $('#data-msg-login').html(data.tidak_ada_msg);
                                $('#btn-logins').attr("class","btn btn-warning").html('<i class="fa fa-times"></i> Masuk').attr("readonly",false);
                                $('#btn-logins').attr("type","button");
                                return false;
                            }else if (data.data == 3) {
                                $('#data-msg-login').html(data.tidak_aktif_msg);
                                $('#btn-logins').attr("class","btn btn-danger").html('<i class="fa fa-times"></i> Non Active').attr("readonly",false);
                                $('#btn-logins').attr("type","button");
                                return false;
                            }else{
                                $('#btn-logins').attr("type","submit").attr("readonly",false);
                                return false;
                            }

                        });
                 }
        }

        $(document).on('click','.btn-logins',function(){
            $('#modal-login').modal('show');
        });

        $(document).on('click','.btn-daftars',function(){
            $('#modal-daftar_anggota').modal('show');
        })
    })
</script>
<script src="../../../../external.html?link=https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="<?= base_url().'assets/frontend/js/functions.js' ?>"></script>
</body>

<!-- Mirrored from kodeforest.net/html/books/library/index-1.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 31 Oct 2019 04:12:20 GMT -->
</html>