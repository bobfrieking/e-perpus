<script type="text/javascript">
	$(function() {

		$('#Tables-Pengembalian').DataTable({
			"language":{
				"paginate":{
					"previous":"Kembali",
					"next" 	  :"Lanjut",
				},
			},
			 //"processing":true,
			//"serverSide":true,
			"ajax":{
				"type":"POST",
				"url" :"<?= base_url(); ?>Backend/Pengembalian_buku/get_all_data_pengembalian",
			},
			"columns":[
				{"data":"id_peminjaman",
					render:function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{"data":"foto",
					render:function(data,type) {
						if (data) {
							foto = data;
						}else{
							foto = 'user.jpg';
						}
						return `<img style="height:85px;width:85px;border-radius:50%;" src="<?= base_url(); ?>./upload/anggota/`+data+`" />`;
					}
				},
				{"data":"nama"},
				{"data":"tgl_pinjam"},
				{"data":"batas_pinjam"},
				{"data":"jml_pinjam"},
				{"data":"tgl_kembali"},
				{"data":"denda",
					render:function(data,type) {
						let rupiah = data;
						let	reverse = rupiah.toString().split('').reverse().join(''),
							rp 	= reverse.match(/\d{1,3}/g);
							rupiahh	= rp.join(',').split('').reverse().join('');
						if (data == 1) {
							return `<span class="badge badge-success">Tepat Waktu ..</span>`;
						}
						if (data == 0) {
							return `<span class="badge badge-warning">Tidak Ada Denda !!</span>`;
						}else{
							return `<span class="badge badge-danger">Rp. `+rupiahh+`</span>`;
						}
					}
				},
				{"data":"status"},
				{"data":"keterangan"},
				{"data":"btn-aksi"},
			],
		});

		$(document).on('click','.btn-hapus-data',function() {
			let data_id = $(this).attr("data-id");
			$('#confirm-modal-pengembalian').modal('show');
			$('#data_id_pengembalian').val(data_id);
		});

		$(document).on('click','.btn-hapus-action-pengembalian',function() {
			let data_id = $('#data_id_pengembalian').val();
				$.ajax({
					type 	:"POST",
					url 	:"<?= base_url(); ?>Backend/Pengembalian_buku/delete_data_pengembalian",
					data 	:{data_id:data_id},
					dataType:"json",
					success:function(respons) {
						$('#confirm-modal-pengembalian').modal('hide');
						$('#pesan-data-alert').html(respons.success);
						mytabel.ajax.reload();
					},error:function(respons) {
						$('#pesan-data-alert').html(respons.error);
					}
				});
				setTimeout(function() {
					$('.pesan-pengembalian').fadeOut();
				},5100);
		})

	});
</script>