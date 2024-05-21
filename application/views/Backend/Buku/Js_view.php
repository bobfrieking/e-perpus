<script type="text/javascript">
	let BASEURL = "<?= base_url() ?>";
	setTimeout(function () {
		$('.alert').slideUp();
	},5200);
	$(function(){

		$(document).on('click','.btn-tambah-data-buku',function(){
			$('#modal-tambah-data-buku').modal('show');
		});

		$(document).on('change','.input-file-buku',function(){
			let ini = $(this);
			let files = this.files;
			if (files && files[0]) {
				let reader = new FileReader();
				reader . onload = function (s) {
					ini.next('.img-tampil-buku').attr('src', s.target.result).show();
				}
				reader.readAsDataURL(files[0]);
			}

		});
		$(document).on('change','.input-file-buku-edit',function(){
			let ini = $(this);
			let files = this.files;
			if (files && files[0]) {
				let reader = new FileReader();
				reader . onload = function (s) {
					ini.next('.img-tampil-buku-edit').attr('src', s.target.result).show();
				}
				reader.readAsDataURL(files[0]);
			}

		});


		$(document).on('click','.delete-data-buku',function(){
			let id = $(this).attr("data");
			 	$.ajax({
			 		type 	:"POST",
			 		url 	: BASEURL + "Backend/Buku/GetByIdBuku",
			 		data 	:{id:id},
			 		success : function (data){
			 			$('#confirm-modal-buku').modal('show');
			 			let buku = JSON.parse(data);
			 			$('[name="id-buku"]').val(buku[0].id_buku);
			 			$('[name="gbr-buku"]').val(buku[0].gambar);
			 		}
			 	})

		});



		$(document).on('click','.edit-data-buku',function(){
			let id = $(this).attr("data");
				$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Backend/Buku/GetByIdBuku",
					data 	:{id:id},
					success : function (edit){
						$('#modal-edit-data-buku').modal('show');
						let obj = JSON.parse(edit);
						$('[name="id-data-buku"]').val(obj[0].id_buku);
					}
				})
		});
		
						// $('[name="judul-buku-edit"]').val(obj[0].judul_buku);
						// $('[name="namapengarang-edit"] [value="'+obj[0].id_pengarang+'"]').attr('selected',true);
						// $('[name="namapenerbit-edit"] [value="'+obj[0].id_penerbit+'"]').attr('selected',true);
						// $('[name="nilai-rating-buku"] [value="'+obj[0].rating+'"]').attr("selected",true);
						// $('[name="kategoribuku-edit"] [value="'+obj[0].id_kategori+'"]').attr('selected',true);
						// $('[name="tahunterbit-edit"]').val(obj[0].tahun_terbit);
						// $('[data-stok="stok-buku"]').val(obj[0].stok);
						// $('[name="deskripsibuku-edit"]').val(obj[0].deskripsi);
						// $('.img-tampil-buku-edit').attr('src','<?= base_url().'upload/' ?>buku/'+obj[0].gambar+'');
		

		$('#nama-penerbit-buku').click(SendToThntrbit);

		function SendToThntrbit(){
			let id_penerbit = $(this).val();
				$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Backend/Buku/getByInputValue",
					data 	:{id_penerbit:id_penerbit},
					success : function  (data) {
						let obj = JSON.parse(data);
						$('#tahun-terbit-buku').val(obj[0].tahun_terbit);
					}
				})
		}

	});
</script>
<script type="text/javascript">
	setTimeout(function(){
		$('.form-edit-kategori').slideUp();
		$('.btn-hapus').slideUp();
		$('.hide-obj').slideUp();
		$('.msg-small').slideUp();
	},25000);

	$(function(){

		// record_data();

		$('#mytables').DataTable({
			"language" 	 :{
				"paginate":{
					"previous":"Kembali",
					"next":"Lanjut",
				},
				"sProcessing":"Loading...",
			},
			"processing" :true,
			"serverSide" :true,
			"ajax" 		 :{
					"type":"POST",
					"url" :BASEURL + "Backend/Buku/tampil_data_kategori",
			},
				"columns":[
					{"data":"id_kategori",
					render:function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
					{"data":"kategori"},
					{"data":"aksi"},
				// 	{"mData":function(data,type,dataToSet) {
				// 		return '<a data="'+data.id_kategori+'" class="text-dark edit-data" href="javascript:void(0)">'+data.kategori+'</a>';
				// 	}
				// },
				],
		});

		// function record_data(){

		// 	// Tampil Datatable
		// 	$.ajax({
		// 		type 	:"GET",
		// 		async 	:false,
		// 		url 	:BASEURL + "Backend/Buku/tampil_data_kategori",
		// 		success : function(data){
		// 			let tbody = '';
		// 			let obj = JSON.parse(data);
		// 			for (var i = 0; i < obj.length; i++) {
		// 				tbody += `<tr class="tr_tbody`+obj[i].id_kategori+`">
		// 						<td>`+i+`</td>
		// 						<td></td>
		// 						</tr>`;
		// 			}
		// 			$('#datarecord').html(tbody);
		// 		}
		// 	})






			$('#tambah-kategori_buku').on('submit',function(e){
					e.preventDefault();
						let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Tambah Kategori .. </div>';
						let msg_danger = '<div class="alert alert-danger bg-danger text-white">Gagal Tambah Kategori !!</div>';
					let kategori = $('[name="kategori-buku"]').val();
					$.ajax({
						type 	:"POST",
						url		:BASEURL + "Backend/Buku/tambah_kategori",
						data 	:{kategori_buku:kategori},
						success : function (){
							$('#mytables').DataTable().ajax.reload();
							$('#msg').html(msg_success);
							$('#tambah-kategori_buku').trigger('reset');
						}
					});
					setTimeout(function(){
						$('.alert').slideUp();
					},5000);
			});

			$(document).on('click','.edit-data',function(){
				let id = $(this).attr('data');
				$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Backend/Buku/getById",
					data 	:{id:id},
					success : function (e){
						let obj = JSON.parse(e);
						$('.id-data').val(obj[0].id_kategori);
						$('.input-edits').val(obj[0].kategori);
						$('.form-edit-kategori').show();
						$('.btn-hapus').show();
						$('.hide-obj').show();
						$('.msg-small').show();
						$('#nama-delete').html(obj[0].kategori);	
					}
				})
				// 	setTimeout(function(){
				// 	$('.form-edit-buku').slideUp();
				// 	return false;
				// },25000);
			});

			$(document).on('click','.hide-obj',function(){
				$('.form-edit-kategori').slideUp();
				$('.btn-hapus').slideUp();
				$('.hide-obj').slideUp();
				$('.msg-small').slideUp();
			});

			$('#proses-edit-kategori').submit(SendData);

			function SendData(e){
				e.preventDefault();
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Edit Kategori .. </div>';
						let msg_danger = '<div class="alert alert-danger bg-danger text-white">Gagal Edit Kategori !!</div>';
				let id_kategori = $('[name="id-kategori"]').val();
				let kategori_ubah = $('[name="kategori_buku_edit"]').val();
				$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Backend/Buku/proses_update_buku",
					data 	:{id_kategori:id_kategori,kategori_ubah:kategori_ubah},
					success : function (){
						$('#mytables').DataTable().ajax.reload();
						$('#msg').html(msg_success);
					}
				});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
			}

			$(document).on('click','.btnn-hapus',function(){
				$('#confirm-modal').modal('show').fadeIn();
			});

			$(document).on('click','.btn-hapus-action',function(){
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Delete Kategori .. </div>';
						let msg_danger = '<div class="alert alert-danger bg-danger text-white">Gagal Delete Kategori !!</div>';
				let id = $('.id-data').val();
					$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Backend/Buku/delete_kategori",
					data 	:{id:id},
					success : function (){
						$('#confirm-modal').modal('hide');
						$('#msg').html(msg_success);
						$('#mytables').DataTable().ajax.reload();
						$('.form-edit-kategori').slideUp();
						$('.btn-hapus').slideUp();
						$('.hide-obj').slideUp();
						$('.msg-small').slideUp();
					}
				});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
			});

		// Penutup Fungsi record_data yang => }
		// }

	});
</script>
<script type="text/javascript">
	setTimeout(function(){
		$('.form-edit').slideUp();
		$('.btn-hapus-penerbit').slideUp();
		$('.menu-hide').slideUp();
	},25000);
	$(function(){

			tampil_data();
			$('#mytables2').DataTable();
		function tampil_data(){
				
				// Tampil Datatable
			$.ajax({
				type 	:"GET",
				async 	:false,
				url 	:BASEURL + "Backend/Buku/tampil_data_penerbit",
				success : function(data){
					let tr = '';
					let obj = JSON.parse(data);
					for (var i = 0; i < obj.length; i++) {
						tr += `<tr class="tr-content-`+obj[i].id_penerbit+`">
								<td>`+i+`</td>
								<td><a data="`+obj[i].id_penerbit+`" class="text-dark klik-tampil" href="javascript:void(0)">`+obj[i].nama_penerbit+`</a></td>
								<td>`+obj[i].tahun_terbit+`</td>
								</tr>`;
					}
					$('#tampil_data').html(tr);
				}
			});

			$('#tambah-penerbit_buku').submit(proses_tambah);
			function proses_tambah(e){
				e.preventDefault();
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Tambah Penerbit .. </div>';
				let msg_danger = '<div class="alert alert-danger bg-danger text-white">Gagal Tambah Penerbit !!</div>';
				let npb = $('[name="penerbit-buku"]').val();
				let ttb = $('[name="tahun-terbit"]').val();
					$.ajax({
						type :"POST",
						url  :BASEURL + "Backend/Buku/tambah_penerbit",
						data :{npb:npb,ttb:ttb},
						success : function(){
							tampil_data();
							$('#msg').html(msg_success);
							$('#tambah-penerbit_buku').trigger('reset');
						},error : function(){
							$('#msg').html(msg_danger);
						}
					});
					setTimeout(function(){
						$('.alert').slideUp();
					},5000);
			}

			$(document).on('click','.klik-tampil',function(){
				let id = $(this).attr('data');
					$.ajax({
						type	:"POST",
						url 	:BASEURL + "Backend/Buku/getByIdPenerbit",
						data 	:{id:id},
						success : function (item) {
							let data = JSON.parse(item);
							$('.form-edit').show();
							$('.btn-hapus-penerbit').show();
							$('.menu-hide').show();
							$('#npb').val(data[0].nama_penerbit);
							$('#ttb').val(data[0].tahun_terbit);
							$('#nama-getdelete').html(data[0].nama_penerbit);
							$('#id-prbt_buku').val(data[0].id_penerbit);
						}
					})
			});

			$(document).on('click','.hide-items',function(){
				$('.form-edit').slideUp();
				$('.btn-hapus-penerbit').slideUp();
				$('.menu-hide').slideUp();
			});

			$('#edit-penerbit_buku').submit(ProcessSendupdt);

			function ProcessSendupdt(e){
				e.preventDefault();
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Ubah Penerbit .. </div>';
				let msg_danger  = '<div class="alert alert-danger bg-danger text-white">Gagal Ubah Penerbit !!</div>';
				let id_penerbit = $('#id-prbt_buku').val(); 
				let nm_penerbit = $('#npb').val(); 
				let thn_terbit  = $('#ttb').val();
						$.ajax({
							type :"POST",
							url  : BASEURL + "Backend/Buku/proses_update_penerbit",
							data :{idpenerbit:id_penerbit,nm_penerbit:nm_penerbit,thn_terbit:thn_terbit},
							success : function (){
								$('#msg').html(msg_success);
								tampil_data();
							}
						});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
			}

			$(document).on('click','.btn-hapus-penerbit',function(){
				$('#confirm-modal-penerbit').modal('show');
			});
			$(document).on('click','.btn-hapus-action-pnrbit',function(){
						let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Delete Penerbit .. </div>';
						let msg_danger  = '<div class="alert alert-danger bg-danger text-white">Gagal Delete Penerbit !!</div>';
						let id = $('#id-prbt_buku').val();
						$.ajax({
							type 	:"POST",
							url 	: BASEURL + "Backend/Buku/delete_pnrbit_buku",
							data 	:{id:id},
							success : function (){
								$('.tr-content-'+id+'').remove();
								$('#msg').html(msg_success);
								$('#confirm-modal-penerbit').modal('hide');
								$('.form-edit').slideUp();
								$('.btn-hapus-penerbit').slideUp();
								$('.menu-hide').slideUp();				
							},error : function (){
								$('#msg').html(msg_danger);
							}
						});
				setTimeout(function(){
						$('.alert').slideUp();
				},5000);
				return false;
			});
		// Penutup fungsi tampil_data => }	
		}

	});
</script>
<script type="text/javascript">
	setTimeout(function(){
		$('.form-edit-pengarang').slideUp();
		$('.btn-hapus-pengarang').slideUp();
		$('.setting-obj').slideUp();
	},25000);
	$(function(){

		reload_data();
		$('#mytables3').DataTable();
		function reload_data(){

					$.ajax({
							type	:"GET",
							async 	: false,
							url 	: BASEURL + "Backend/Buku/tampil_data_pengarang",
							success : function (records){
								let tr = '';
								let item = JSON.parse(records);
								for (var i = 0; i < item.length; i++) {
									tr += `<tr class="tr-data-`+item[i].id_pengarang+`">
												<td>`+i+`</td>
												<td><a class="text-dark btn-akssi" data="`+item[i].id_pengarang+`" href="javascript:void(0)">`+item[i].nama_pengarang+`</a></td>
										   </tr>`;
								}
								$('#data-pengarang').html(tr);
							}
					});

			$('#tambah-pengarang_buku').submit(ProcessSendTambah);
			function ProcessSendTambah(no_refresh){
				no_refresh.preventDefault();
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Tambah Pengarang Buku .. </div>';
				let msg_danger  = '<div class="alert alert-danger bg-danger text-white">Gagal Tambah Pengarang Buku !!</div>';
				let nmpb = $('[name="pengarang-buku"]').val();
					$.ajax({
						type 	:"POST",
						url 	:BASEURL + "Backend/Buku/tambah_pengarang",
						data 	:{nmpb:nmpb},
						success : function (){
								reload_data();
								$('#msg').html(msg_success);
								$('#tambah-pengarang_buku').trigger('reset');
						},error : function (){
								$('#msg').html(msg_danger);
						}
					});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
			}

			$(document).on('click','.btn-akssi',function(){
				let id = $(this).attr('data');
					$.ajax({
						type 	:"POST",
						url 	: BASEURL + "Backend/Buku/getByIdPengarang",
						data 	:{id:id},
						success : function (Send){
							let items = JSON.parse(Send);
							$('#id-data-pengarang').val(items[0].id_pengarang);
							$('[name="pengarang_buku_edit"]').val(items[0].nama_pengarang);
							$('#nama-delete-pngrng').html(items[0].nama_pengarang);
							$('.form-edit-pengarang').show();
							$('.btn-hapus-pengarang').show();
							$('.setting-obj').show();
						}
					})
			});

			$(document).on('click','.hide-obj-pngrng',function(){
							$('.form-edit-pengarang').slideUp();
							$('.btn-hapus-pengarang').slideUp();
							$('.setting-obj').slideUp();
			});

			$(document).on('click','.btn-hapus-pengarang',function(){
					$('#confirm-modal-pengarang').modal('show');
			});

			$(document).on('click','.btn-hapus-action-pngrng',function(){
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Delete Pengarang Buku .. </div>';
				let msg_danger  = '<div class="alert alert-danger bg-danger text-white">Gagal Delete Pengarang Buku !!</div>';
				let id = $('#id-data-pengarang').val();
					$.ajax({
						type 	:"POST",
						url 	:BASEURL + "Backend/Buku/delete_pngrng_buku",
						data  	:{id:id},
						success : function (){
							$('.tr-data-'+id+'').remove();
							$('#msg').html(msg_success);
							$('.form-edit-pengarang').slideUp();
							$('.btn-hapus-pengarang').slideUp();
							$('.setting-obj').slideUp();
							$('#confirm-modal-pengarang').modal('hide');
						},error : function (){
							$('#msg').html(msg_danger);
						}
					});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
				
			});

			$('#proses-edit-pengarang').submit(UpdateDataPengarangBuku);

			function UpdateDataPengarangBuku(asyncfalse){
				// asynchronus-False => Obj
				asyncfalse.preventDefault();
				// Message / Pesan
				let msg_success = '<div class="alert alert-success bg-success text-white">Berhasil Ubah Pengarang Buku .. </div>';
				let msg_danger  = '<div class="alert alert-danger bg-danger text-white">Gagal Ubah Pengarang Buku !!</div>';
				// data send ajax 
				let id_pengarang   = $('[name="id-pengarang"]').val();
				let pengarang_buku = $('[name="pengarang_buku_edit"]').val();
				 	$.ajax({
				 		type 	:"POST",
				 		url 	:BASEURL + "Backend/Buku/proses_update_pengarang_buku",
				 		data 	:{id_pengarang:id_pengarang,pengarang_buku:pengarang_buku},
				 		success : function (){
				 			reload_data();
				 			$('#msg').html(msg_success);
				 		},error : function (){
				 			$('#msg').html(msg_danger);
				 		}
				 	});
				setTimeout(function(){
					$('.alert').slideUp();
				},5000);
				return false;
			}

		// Penutup fungsi reload_data => }
		}

	});
</script>