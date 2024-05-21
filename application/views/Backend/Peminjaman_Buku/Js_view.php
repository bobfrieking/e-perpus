<script type="text/javascript">
	$(document).ready(function(){

		setInterval(function() {
			$('#myTabless').DataTable().ajax.reload();
		},5200);

		// $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
  //     {
  //         return {
  //             "iStart": oSettings._iDisplayStart,
  //             "iEnd": oSettings.fnDisplayEnd(),
  //             "iLength": oSettings._iDisplayLength,
  //             "iTotal": oSettings.fnRecordsTotal(),
  //             "iFilteredTotal": oSettings.fnRecordsDisplay(),
  //             "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
  //             "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
  //         };
  //     };

		$('#myTabless').DataTable({
				"language":{
					"paginate":{
						"previous":'<i class="mdi mdi-chevron-left"><i>',
						"next":'<i class="mdi mdi-chevron-right"><i>',
					},
					// "keys" 	 	:true,
					// "draw" 		:1,
					// "sProcessing":'<i class="mdi mdi-spin mdi-loading"></i> Loading',
				},
				// "processing":true,
				// "serverSide":true,
				"order" 	:[],
				"ajax":{
				"url" 	:"<?= base_url().'Backend/Peminjaman_buku/getalldata' ?>",
				"type"  :"POST", 	
				},
				"columns":[
				{"data":"id_peminjaman",
					render :function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{"mData":"foto",
					render:function(data,type,row,meta) {
						if (data) {
							return `<img style="height:55px;width:55px;border-radius:50%;" src="<?= base_url(); ?>./upload/anggota/`+data+`" />`;
						}else{
							return `<img style="height:55px;width:55px;border-radius:50%;" src="<?= base_url(); ?>./assets/document/user.jpg" />`;
						}
					}
				},
				{"data":"nama"},
				{"data":"judul_buku"},
				{"data":"tgl_pinjam"},
				{"data":"batas_pinjam"},
				{"data":"jml_pinjam"},
				{"mData":function(data,type) {
						if (data.status==0) {
							return "<button data-buku-id='"+data.id_peminjaman+"' data-buku-status='"+data.status+"' class='btn btn-warning btn-sm btnaksi-status'> DiProses</button";
						}else if (data.status==1) {
							return "<button data-buku-id='"+data.id_peminjaman+"' data-buku-status='"+data.status+"' class='btn btn-success btn-sm btnaksi-status'> DiPinjam</button";
						}
					}
				},

				{"data":"btn"}


				],
		});

		$(document).on('click','.btnaksi-status',function(){
			$('#modal-aksistatus').modal('show');
			let idSendData = $(this).attr("data-buku-id");
			var status = $(this).attr("data-buku-status");
			$('[name="id-btn-aksi-peminjaman"]').val(idSendData);
			$('#select-status-peminjaman [value="'+status+'"]').attr('selected',true);
		});

		$(document).on('click','.btnaksi-hapus',function() {
			$('#confirm-modal-peminjaman').modal('show').fadeIn();
			var dataId = $(this).attr("data-buku-id");
			$('[name="dataByidPeminjaman"]').val(dataId);
		});

		$('#formDeletePeminjaman').submit(ProsesHapusDataPeminjaman);
		function ProsesHapusDataPeminjaman(e) {
			e.preventDefault();
			// var dataIdPeminjaman = $('[name="dataByidPeminjaman"]').val();
			let pesan_success = '<div id="pesan-hapus-peminjaman" class="alert alert-success bg-success text-white"> Berhasil Hapus Data Peminjaman ..</div>';
			let pesan_error   = '<div id="pesan-hapus-peminjaman" class="alert alert-danger bg-danger text-white"> Gagal Hapus Data Peminjaman !!</div>';
				$.ajax({
					type 	:"POST",
					url 	:"<?= base_url().'Backend/Peminjaman_buku/HapusDataPeminjaman' ?>",
					data 	:new FormData(this),
					cache 	:false,
					processData:false,
					contentType:false,
					beforeSend:function(respons) {
						$('#confirm-modal-peminjaman').modal('hide').fadeOut();
					},success:function(respons) {
						$('#isi-msg-peminjaman').html(pesan_success);
					},complete:function(respons) {
						$('#myTabless').DataTable().ajax.reload();
					},error:function(respons) {
						$('#isi-msg-peminjaman').html(pesan_error);
					}
				});
				setTimeout(function() {
					$('#pesan-hapus-peminjaman').fadeOut();
				},5100);
		}

		$('#stspeminjaman').on('submit',function(e){
			e.preventDefault();
			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url(); ?>Backend/Peminjaman_buku/Aksibtnpeminjaman",
				data 	:new FormData(this),
				dataType:"json",
				processData:false,
				cache 	:false,
				contentType:false,
				success:function(respons) {
					$('#myTabless').DataTable().ajax.reload();
					$('#isi-msg-peminjaman').html(respons.success);
				},complete:function(respons) {
					$('#modal-aksistatus').modal('hide');
					$('#stspeminjaman').trigger('reset');
				},error:function(respons) {
					$('#isi-msg-peminjaman').html(respons.error);
				}
			});
			setTimeout(function() {
				$('.alert').fadeOut();
			},5000);
		});

	});
</script>