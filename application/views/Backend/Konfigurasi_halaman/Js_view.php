<script type="text/javascript">
	setTimeout(function() {
		$('.alert').slideUp();
	},4950);
	$(function() {
		$(document).on('change','.input-icon',function() {
			let is_files = URL.createObjectURL(event.target.files[0]);
			$('.img-icon').attr("src",is_files);
		});
		$(document).on('click','.btn-deltIcon',function() {
			let icon = $('#data-icon-app').val(); 
			let knfirm = confirm("Anda Yakin ingin Hapus Icon tsb ??");
			if (knfirm == true) {
					$.ajax({
						type 	:"GET",
						url 	:"<?= base_url().'Backend/Config_admin/hapus_icon' ?>",
						data 	:{icon:icon},
						dataType:"json",
						success : function(data) {
							alert(data.success);
							window.location.assign("Konfigurasi_halaman");
						},error : function(data) {
							alert(data.error);
							window.location.assign("Konfigurasi_halaman");
						}
					})
			}
		});
		$(document).on('change','.input-files',SendToIMG);
		function SendToIMG() {
			var img = URL.createObjectURL(event.target.files[0]);
			$('#img-backround').attr('src',img);
		}
		$('#form-bg').submit(ProsesBg);
		function ProsesBg(e) {
			e.preventDefault()
			let gbrKosong = $('.data-gbr_lama').val();
			if (gbrKosong == "") {
				alert("Gambar Kosong !!");
				return false;
			}else{
					$.ajax({
					type 	:"POST",
					url 	:"<?= base_url().'Backend/Config_admin/proses_edit_bg' ?>",
					data 	:new FormData(this),
					contentType: false,
			    	processData: false,
					dataType:"json",
					success : function(data) {
					alert(data.success);
					// window.location.assign("Konfigurasi_halaman");
						},error : function(data) {
					alert(data.error);
					// window.location.assign("Konfigurasi_halaman");
						}
					});
			}
		}
	})
</script>