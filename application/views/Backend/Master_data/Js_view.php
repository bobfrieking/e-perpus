<script type="text/javascript">
	$(document).ready(function() {
		var tabelpetugas = $('#my-tablesss').DataTable({
			"language":{
				"paginate":{
					"previous":"Kembali",
					"next":"Lanjut",
				},
			},
			// "processing":true,
			"serverSide":true,
			"ajax" 	 	:{
				"url" 	:"<?= base_url(); ?>Backend/Master_data/get_all_data_petugas",
				"type" 	:"POST",
			},
			"columns":[
				{"data":"id_users",
					render:function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart +1;
					}
			},
				{"data":"foto",
					render:function(data,type) {
						if (data=="") {
							fotoo = 'user.jpg';
						}else{
							fotoo = data;
						}
						return `<img style="height:60px;width:60px;" alt="table-user" class="mr-2 rounded-circle" src="<?= base_url().'./upload/' ?>petugas/`+fotoo+`" />`;
					}
			},
				{"data":"nama"},
				{"data":"no_hp"},
				{"data":"email"},
				{"data":"alamat"},
				{"data":"status",
					render:function(data,type) {
						if (data==1) {
							return `<span class="badge badge-success-lighten">Active</span>`;
						}else if (data==0) {
							return `<span class="badge badge-danger-lighten">Non Active</span>`;
						}else{
							null;
						}
					}
			},
				{"data":"aksi"},
			],
		});

		setInterval(function() {
			tabelpetugas.ajax.reload();
		},5500);

		// $(document).on('click','.reloadTabel',function() {
		// 	tabelpetugas.ajax.reload();
		// });

		$(document).on('click','.btninsrt',function() {
			$('#modal_tambah_petugas').modal('show');
		});

		$("#formprosesTambahPetugas").on('submit',function(e) {
			let success = '<div class="alert alert-success bg-success text-white pesantambah"><strong>Berhasil ..</strong> Tambah Data Petugas</div>';
			let error = '<div class="alert alert-danger bg-danger text-white pesantambah"><strong>Gagal ..</strong> Tambah Data Petugas</div>';
			e.preventDefault();
			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url(); ?>Backend/Master_data/tambah_petugas",
				data 	:new FormData(this),
				processData:false,
				contentType:false,
				beforeSend:function(respons) {
					$('#modal_tambah_petugas').modal('hide');
				},success:function(respons) {
					console.log(respons.berhasil);
					$('#alert-dataa-petugas').html(success);
				}
				,complete:function(respons) {
					$('#formprosesTambahPetugas').trigger('reset');
					tabelpetugas.ajax.reload();
				}
				,error:function(respons) {
					$('#alert-dataa-petugas').html(error);
				}
			});
			setTimeout(function() {
				$('.pesantambah').fadeOut();
			},5000);
		});

		$(document).on('click','.btn-delete-petugas',function() {
			var data = $(this).attr("data");
			var foto = $(this).attr("data-foto");
			$('#confirm-modal-petugas').modal('show');
			$('#data-id-petugas').val(data);
			$('#data-foto-petugas').val(foto);
		});

		$('#proses-delete-data-petugas').on('submit',function(e) {
			e.preventDefault();
				// Msg --------------------------------
				let success = '<div class="alert alert-success bg-success text-white pesan-delete-petugas"><strong>Berhasil ..</strong> Hapus Data Petugas</div>';
				let error   = '<div class="alert alert-danger bg-danger text-white pesan-delete-petugas"><strong>Gagal !! </strong> Hapus Data Petugas</div>'; 
				// ------------------------------------

				let data_id = $('#data-id-petugas').val();
				let data_foto = $('#data-foto-petugas').val();
				var isData = {data_id:data_id,data_foto:data_foto};
				$.ajax({
					type 	:"POST",
					url 	:"<?= base_url(); ?>Backend/Master_data/delete_petugas",
					data 	:isData,
					beforeSend:function(respons) {
						$('#confirm-modal-petugas').modal('hide');
					},success:function(repons) {
						$('#alert-dataa-petugas').html(success);
					},complete:function(respons) {
						tabelpetugas.ajax.reload();
					},error:function(respons) {
						$('#alert-dataa-petugas').html(error);
					}
				});
				setTimeout(function() {
					$('.pesan-delete-petugas').fadeOut();
				},5100);
		});


		$('#proses-update-data-petugas').on('submit',function(e) {
			e.preventDefault();

			let success = '<div class="alert alert-success bg-success text-white pesan-update"><strong>Berhasil ..</strong> Edit Data Petugas</div>';
			let error = '<div class="alert alert-danger bg-danger text-white pesan-update"><strong>Gagal ..</strong> Edit Data Petugas</div>';


			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url(); ?>Backend/Master_data/edit_petugas",
				data 	:new FormData(this),
				processData:false,
				contentType:false,
				beforeSend:function(respons) {
					$('#modal_edit').modal('hide');
				},success:function(respons) {
					console.log(respons.berhasil);
					$('#alert-dataa-petugas').html(success);
				}
				,complete:function(respons) {
					tabelpetugas.ajax.reload();
				}
				,error:function(respons) {
					$('#alert-dataa-petugas').html(error);
				}
			});
			setTimeout(function() {
				$('.pesan-update').fadeOut();
			},5000);
		});

// End Data Petugas ----------------------------------------------------------------------------------------
// Data Anggota --------------------------------------------------------------------------------------------
		setTimeout(function(){
			$('.alert').slideUp();
		},5000);

		  $(document).on('change','.data-switchbtn',function() {
		  		let data   = $(this);
		  		let dataId = $(this).attr("data-id_users");
		  		let nama   = $(this).attr("data-nama_users");
		  		let msgOn  = '<div class="alert alert-success bg-success text-white psn-switchbtn"> Data <b><i>'+nama+'</i></b> Aktif</div>';
		  		let msgOff = '<div class="alert alert-danger bg-danger text-white psn-switchbtn"> Data <b><i>'+nama+'</i></b> NonAktif</div>';

		  		if (data.is(':checked')) {
		  			var status = 1;
		  			$('#pesan-anggota').html(msgOn);
		  		}else{
		  			var status = 0;
		  			$('#pesan-anggota').html(msgOff);
		  		}
		  			$.ajax({
		  				type 	:"GET",
		  				url 	:"<?= base_url().'Backend/Master_data/update_status_anggota' ?>",
		  				data 	:{Id:dataId,status:status},
		  			});

		  		setTimeout(function() {
		  			$('.psn-switchbtn').fadeOut()
		  		},5000);
		  	
		  })

		$(document).on('click','.btn-edit',function(){

			let id = $(this).attr('data');

			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url().'Backend/Master_data/get_dataId'  ?>",
				data 	:{id:id},
				success : function (e) {
					$('#modal_edit').modal('show');
					let obj = JSON.parse(e);
					$('#id-userss').val(obj[0].id_users);
					$('#gbr-lama').val(obj[0].foto);
					$('#nama-usr').val(obj[0].nama);
					$('#email-usr').val(obj[0].email);
					$('#pass-usr').val(obj[0].password);
					$('#no_hp-usr').val(obj[0].no_hp);
					$('#status-usr [value="'+obj[0].status+'"]').attr('selected',true);
					$('#alamat-usr').val(obj[0].alamat);
					$('.img-users-e').attr('src','<?= base_url().'./upload/' ?>petugas/'+obj[0].foto+'');
				}


			})			

		});


		$('.input-users').change(URL);
		$('.input-users-e').change(URL);

		function URL(){

			let ini = $(this);

			let files = this.files;

			if (files && files[0]) {

				let img = new FileReader();

				img . onload = function (to) {
					ini.next('.img-users').attr('src', to.target.result).show();
					ini.next('.img-users-e').attr('src', to.target.result).show();
				}
				img . readAsDataURL(files[0]);

			}


		}


		// Anggota

		$(document).on('click','.btn-plus-anggota',function(){
			$('#modal_tambah_anggota').modal('show');
		});	

		$(document).on('click','.btn-edit-anggota',function(){
			let id = $(this).attr('data');
			$.ajax({
				type 	:"POST",
				url  	:"<?= base_url(); ?>Backend/Master_data/tampil_dataById",
				data 	:{id:id},
				success : function (e){
					$('#modal_edit_anggota').modal('show');
					let obj = JSON.parse(e);
					$('#id-users-anggota').val(obj[0].id_users);
					$('#status-edit-anggota [value="'+obj[0].status+'"]').attr('selected',true);
				}
			})
		})

	});
</script>
<!-- Script Anggota DataTables ------------------------------------------------------------->
<script type="text/javascript">
	$(document).ready(function() {
		setInterval(tbl_anggotaRefresh,4500);

		function tbl_anggotaRefresh() {
			tabel_data_anggota.ajax.reload();
		}

		var tabel_data_anggota = $('#my-tables-anggotaa').DataTable({
			"ajax":{
				"type":"POST",
				"url":"<?= base_url(); ?>Backend/Master_data/get_all_data_anggota",
			},
			"columns":[
				{"data":"id_users",
					render:function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
			},
				{"data":"foto",
					render:function(data,type,row) {
						if (data == "") {
							foto = 'user.jpg';
						}else{
							foto = data;
						}
						return `<img style="height:75px;width:75px;border-radius:50%;" src="<?= base_url(); ?>./upload/anggota/`+foto+`" />`;
					}
			},
				{"data":"nama"},
				{"data":"username"},
				{"data":"no_hp"},
				{"data":"email"},
				{"data":"alamat"},
				{"mData":function(data,type) {
					if (data.status == 1) {
						return `<input data-nama_users="`+data.nama+`" data-id_users="`+data.id_users+`" class="data-switchbtn" type="checkbox" id="`+data.id_users+`" data-switch="bool" name="" checked /><label for="`+data.id_users+`" data-on-label="On" data-off-label="Off"></label>`;
					}
					if (data.status == 0) {
						return `<input data-nama_users="`+data.nama+`" data-id_users="`+data.id_users+`" class="data-switchbtn" type="checkbox" id="`+data.id_users+`" data-switch="bool" name="" /><label for="`+data.id_users+`" data-on-label="On" data-off-label="Off"></label>`;
					}
				}
			},
				{"data":"aksi"},
			],
		});
		$(document).on('click','.btn-action-delete-data-anggotaa',function() {
			data_id = $('#data-id-anggotaa').val();
			let msg_success = '<div class="alert alert-success bg-success text-white alert-hps-data-anggota"><strong>Berhasil ..</strong> Hapus Data Anggota</div>';
			let msg_error = '<div class="alert alert-danger bg-danger text-white alert-hps-data-anggota"><strong>Berhasil ..</strong> Hapus Data Anggota</div>';
				$.ajax({
					type :"POST",
					url  :"<?= base_url(); ?>Backend/Master_data/delete_data_anggota",
					data :{id:data_id},
					beforeSend:function() {
						$('#confirm-modal-anggota').modal('hide');
					},success:function() {
						tabel_data_anggota.ajax.reload();
						$('#pesan-anggota').html(msg_success);
					},error:function() {
						$('#pesan-anggota').html(msg_error);
					}
				});
				setTimeout(function() {
					$('#alert-hps-data-anggota').fadeOut();
				},5000);
		});
	});
	function btn_confirm_delete_anggota(id){
		$('#confirm-modal-anggota').modal('show');
		$('#data-id-anggotaa').val(id);
	}

	$('#proses-update-data-petugas').on('#submit',function(e) {
			e.preventDefault();

			let success = '<div class="alert alert-success bg-success text-white pesan-update"><strong>Berhasil ..</strong> Edit Data Petugas</div>';
			let error = '<div class="alert alert-danger bg-danger text-white pesan-update"><strong>Gagal ..</strong> Edit Data Petugas</div>';


			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url(); ?>Backend/Master_data/edit_petugas",
				data 	:new FormData(this),
				processData:false,
				contentType:false,
				beforeSend:function(respons) {
					$('#modal_edit').modal('hide');
				},success:function(respons) {
					console.log(respons.berhasil);
					$('#alert-dataa-petugas').html(success);
				}
				,complete:function(respons) {
					tabelpetugas.ajax.reload();
				}
				,error:function(respons) {
					$('#alert-dataa-petugas').html(error);
				}
			});
			setTimeout(function() {
				$('.pesan-update').fadeOut();
			},5000);
		});
</script>
<!-- ------------------------------------------------------------------------------------ -->