<script type="text/javascript">
	$(function() {
		
		$('#contactformus').submit(SendDataKontak);
		function SendDataKontak(e) {
			e.preventDefault();
			let nama  = $('#name').val();
			let email = $('#email').val();
			let no_hp = $('#phone').val();
			let pesan = $('#message').val();

			$.ajax({
				type 	:"POST",
				url 	:"<?= base_url().'Frontend/Kontak/insertKontak' ?>",
				data  	:{nama:nama,email:email,no_hp:no_hp,pesan:pesan},
				dataType:"json",
				success : function(data) {
					$('#dataKontak').hide();
					$('#pesanSend').html(data.success);
					/*Clear Input Setelah Kirim Data*/
						$('#contactformus').trigger('reset');
				},error : function(data) {
					$('#pesanSend').html(data.error);
				}
			});
			setTimeout(function() {
				$('.alert').slideUp();
				$('#dataKontak').show();
			},5200);
		}
		$(document).on('click','.isDatasession',function() {
			let notif_sess = '<div class="alert alert-warning"> Tidak Bisa Di Ubah !! .. Untuk Ubah Di Menu Profile</div>';
			$('#pesanSend').html(notif_sess);
		})

	})
</script>