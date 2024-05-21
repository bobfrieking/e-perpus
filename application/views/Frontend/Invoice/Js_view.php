<script type="text/javascript">
	$(document).ready(function(){

		setInterval(function() {
			$('#Mytablesss').DataTable().ajax.reload();
		},5000);

		$('#Mytablesss').DataTable({
			// "processing":true,
			// "serverSide":true,
			"ajax":{
				"url" :"<?= base_url(); ?>Frontend/Invoice/getalldata",
				"type":"POST",
			},
				"columns":[
					{"data":"id_peminjaman",
					render:function(data,type,row,meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
					{"data":"gambar",
					 	render:function(data,type,row,meta) {
						return `<img style="height:105px;width:80px;" src="<?= base_url(); ?>./upload/buku/`+data+`" />`;
					}
				},
					{"data":"judul_buku"},
					{"data":"tgl_pinjam"},
					{"data":"batas_pinjam"},
					{"data":"status",
						render : function(data,type,row,meta) {
							if (data == 0) {
								return `<span style="background-color:orange;" class="badge"> DiProses</span>`;
							}
							if (data == 1) {
								return `<span style="background-color:green;" class="badge"> DiPinjam</span>`;
							}
						}
				},
					{"mData":function(data,type,dataToSet) {
						if (data.status == 0) {
							return `<button data-idpnjm="`+data.id_peminjaman+`" data-status="`+data.status+`" style="border-radius:30px;background-color:orange;color:white;" class="btn btn-sm btn-default btn-pengembalian-buku" disabled> Kembalikan Buku</button>`;
						}
						if (data.status == 1) {
							return `<button data-idpnjm="`+data.id_peminjaman+``+data.status+`" style="border-radius:30px;" class="btn btn-sm btn-danger btn-pengembalian-buku"> Belum Kembalikan</button>`;
						}
					}
				},
				],
		});

		$(document).on('click','.btn-pengembalian-buku',function(){
			// $('#modal-pengembalian-buku').modal('show');
			let id   = $(this).attr("data-idpnjm");
			let status= $(this).attr("data-status");
			let btnNilai = $(this).val();
			var konfirmasi = confirm("Buku harap segera kembalikan ya!");
			if (konfirmasi == true) {
				$.ajax({
					type 	:"POST",
					url 	:"<?= base_url(); ?>Frontend/Invoice/Hitung_denda",
					data 	:{id:id,status:status},
					dataType:"json",
					success:function(data) {
						$('#alert-dataaa').html(data.success);
						// window.location.assign('Invoice');
						$('#Mytablesss').DataTable().ajax.reload();
					},error:function(data) {
						$('#alert-dataaa').html(data.error);
						// window.location.assign('Invoice');
					}
				});
				setTimeout(function() {
					$('.pesan-alert-pengembalian').fadeOut();
				},9000);
			}else{
				// alert("Tidak Jadi");
			}
		});

	});
</script>