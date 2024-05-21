
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                E-Library PTIK
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

          <!-- Modal Konfirmasi Log Out  -->
          <div id="modal-konfirm_logout" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-danger">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="dripicons-wrong h1"></i>
                            <h4 class="mt-2">Attention!</h4>
                            <p class="mt-3">Apakah Kamu Ingin Keluar??</p>
                            <button type="button" class="btn btn-warning my-2" data-dismiss="modal">Kembali</button>
                            <a class="btn btn-light my-2" href="<?= base_url().'user_log-out' ?>">Ya</a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
          <!-- end KLO -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

          <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
              <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
          </div>

          <div class="slimscroll-menu rightbar-content">

            <div class="p-3">
              <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc. Note that, Hyper stores the preferences
                in local storage.
              </div>

              <!-- Settings -->
              <h5 class="mt-3">Color Scheme</h5>
              <hr class="mt-1" />

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check"
                  checked />
                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
              </div>

              <!-- Width -->
              <h5 class="mt-4">Width</h5>
              <hr class="mt-1"/>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                <label class="custom-control-label" for="fluid-check">Fluid</label>
              </div>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                <label class="custom-control-label" for="boxed-check">Boxed</label>
              </div>

              <!-- Left Sidebar-->
              <h5 class="mt-4">Left Sidebar</h5>
              <hr class="mt-1" />
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check" checked />
                <label class="custom-control-label" for="default-check">Default</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="theme" value="light" id="light-check" />
                <label class="custom-control-label" for="light-check">Light</label>
              </div>

              <div class="custom-control custom-switch mb-3">
                <input type="radio" class="custom-control-input" name="theme" value="dark" id="dark-check" />
                <label class="custom-control-label" for="dark-check">Dark</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check" checked />
                <label class="custom-control-label" for="fixed-check">Fixed</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="condensed" id="condensed-check" />
                <label class="custom-control-label" for="condensed-check">Condensed</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="compact" value="scrollable" id="scrollable-check" />
                <label class="custom-control-label" for="scrollable-check">Scrollable</label>
              </div>

              <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

              <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>
            </div> <!-- end padding-->

          </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="<?= base_url().'assets/backend/js/vendor.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/app.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/jquery.rateit.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/ui/component.rating.js' ?>"></script>
        <!-- third party js -->
        <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
        <script src="<?= base_url().'assets/backend/js/vendor/apexcharts.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/Chart.bundle.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/jquery-jvectormap-1.2.2.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/jquery-jvectormap-world-mill-en.js' ?>"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url().'assets/backend/js/pages/demo.dashboard-analytics.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/chart.js' ?>"></script>
        
        <!-- end demo js-->
        <!-- plugin js -->
        <script src="<?= base_url().'assets/backend/js/vendor/summernote-bs4.min.js' ?>"></script>
        <!-- Summernote demo -->
        <script src="<?= base_url().'assets/backend/js/pages/demo.summernote.js' ?>"></script>
        <!-- third party js -->
        <script src="<?= base_url().'assets/backend/js/vendor/jquery.dataTables.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/dataTables.bootstrap4.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/dataTables.responsive.min.js' ?>"></script>
        <!-- <script src="<?= base_url(); ?>assets/backend/datatable.responsive/dataTables.responsive.min.js"></script> -->
        <script src="<?= base_url().'assets/backend/js/vendor/responsive.bootstrap4.min.js' ?>"></script>
        <script src="<?= base_url().'assets/backend/js/vendor/dataTables.checkboxes.min.js' ?>"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url().'assets/backend/js/pages/demo.customers.js' ?>"></script>
                <script type="text/javascript">
                  function btnconfirmlogout(){
                    $('#modal-konfirm_logout').modal('show');
                  }
                $(document).ready(function(){
                  $('#my-tables').DataTable();


                  // Set Ajax Configurasi total Data 
                  setInterval(function(){

                    $.ajax({
                    type    :"POST",
                    url     :"<?= base_url().'Backend/Dashboard/toSendData' ?>",
                    dataType:"json",
                    success : function (item){
                      $('#totals-buku-admin').html(item.data_buku);
                      $('#totals-pengarangbuku-admin').html(item.data_pengarang_buku);
                      $('#totals-penerbitbuku-admin').html(item.data_penerbit_buku);
                      $('#totals-kategoribuku-admin').html(item.data_kategori_buku);
                      $('#total-data-petugas-admin-perpus').html(item.data_total_petugas);
                      $('#total-data-anggota-perpus').html(item.data_total_anggota);
                      $('#total-data-request-peminjaman').html(item.dt_totalrequestpmnjm);
                      $('#dataa-notifikasi-anggota-baruu').html(item.data_notanggota_baru1);
                      $('#dataa-notifikasi-anggota-baruu-ke2').html(item.data_notanggota_baru2);
                      // let datass = item.data_notanggota_baru;
                      // var object = JSON.parse(datass);
                      // var html = '';
                      // for (var i = 0; i < object.length; i++) {
                      //   html += `<a href="javascript:void(0);" class="dropdown-item notify-item">
                      //                       <div class="notify-icon bg-primary">
                      //                           <i class="mdi mdi-comment-account-outline"></i>
                      //                       </div>
                      //                       <p class="notify-details">`+object[i].nama+`
                      //                           <small class="text-muted">1 min ago</small>
                      //                       </p>
                      //                   </a>`;
                      // }
                      // $('#data-notifikasi-anggota-baru').html(html);
                    }
                  })

                  },250);

                  setInterval(newDataAnggotaaa,2000); //<--Time In 2 Detik 

                  function newDataAnggotaaa(){
                      $.ajax({
                      type  :"POST",
                      url   :"<?= base_url(); ?>Backend/Dashboard/newData_Anggota",
                      // dataType:"json",
                      success:function(respons) {
                       var obj = JSON.parse(respons);
                       var Divs = ''
                       console.log(obj);
                       for (var i = 0; i < obj.length; i++) {
                          Divs += ` <a href="javascript:void(0);" onclick="konfirmasiActive(`+obj[i].id_users+`)" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img style="height:40px;width:40px;" src="<?= base_url();  ?>./upload/anggota/`+obj[i].foto+`" class="rounded-circle" alt="" /> </div>
                                            <p class="notify-details">`+obj[i].nama+`</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>`+obj[i].alamat+`</small>
                                            </p>
                                        </a>`;
                        }
                        $('#data-anggota-baru-notifikasi').html(Divs); 
                      }
                    });
                  }

                });
                 // Date Time
                // Tanggal
                    let tgl   = new Date(); //Ambil Data tgl
                    let hari  = tgl.getDate(); //get hari
                    let bulan = tgl.getMonth()+1;   //getbulan
                    let tahun = tgl.getFullYear(); //get tahun

                    document.getElementById('date').innerHTML =" "+hari+"/"+bulan+"/"+tahun+"";
                    // Jam
                    window.onload = function(){jams();}
                    function jams(){
                        let tgl   = new Date();
                        let jam   = tgl.getHours();
                        let menit = tgl.getMinutes();
                        let detik = tgl.getSeconds();
                        
                        menit     = cekwaktu(menit);
                        detik     = cekwaktu(detik);

                        document.getElementById('time').innerHTML =" "+jam+":"+menit+":"+detik+" Detik";
                        setTimeout(function(){jams();},1000);
                    }
                    function cekwaktu(i){

                        if (i < 10) {
                            i = "0" + i ;
                        }
                        return i;

                    }


                    function konfirmasiActive(data_id) {
                      var konfirmasi = confirm("Anda Yakin Ingin Mengaktifkan Data Ini ??");
                      if (konfirmasi == true) {
                          $.ajax({
                            type  :"POST",
                            url   :"<?= base_url(); ?>Backend/Dashboard/active_users",
                            data  :{data_id:data_id},
                            dataType:"json",
                            success:function(respons) {
                              alert(respons.success);
                            }
                          })
                      }else{
                        // alert("Okeee !!");
                      }
                    }
                </script>
                

    </body>


</html>