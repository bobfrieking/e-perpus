<script type="text/javascript">
	var baseurl = "<?= base_url(); ?>";
	$('#aksi-btn-kontak').hide();
	$(function() {

		refresh_obj();
		$('#myTables').DataTable();
		function refresh_obj(){
			$.ajax({
				type 	:"GET",
				url 	:baseurl + "Backend/Kontak/getAllData",
				async 	:false,
			}).done(function(data) {
				let kontak = JSON.parse(data);
				for (var i = 0; i < kontak.length; i++) {
					$('tbody').append(
						`<tr class="kontent-`+kontak[i].id+`">
							<td>`+i+`</td>
							<td><a data-id="`+kontak[i].id+`" data-name="`+kontak[i].nama+`" data-email="`+kontak[i].email+`" data-no_hp="`+kontak[i].no_hp+`" data-msg="`+kontak[i].pesan+`" class="text-dark btnsss" href="javascript:void(0)">`+kontak[i].nama+`</a></td>
							<td>`+kontak[i].email+`</td>
							<td>`+kontak[i].no_hp+`</td>
							<td>`+kontak[i].pesan+`</td>
						</tr>`);
				}

			});
			$(document).on('click','.btnsss',KlikTampilbtn);
			function KlikTampilbtn() {
				var data_id = $(this).attr("data-id");
				var data_name = $(this).attr("data-name");
				var data_email = $(this).attr("data-email");
				var data_no_hp = $(this).attr("data-no_hp");
				var data_msg = $(this).attr("data-msg");
				$('#data-id-kontak-delete').val(data_id);
				$('[name="to-email-data"]').val(data_email);
				$('[name="psn-client"]').val(data_msg)
				$('#aksi-btn-kontak').show();
				// $('#btngmail').attr("href","https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to="+data_email+"").attr("target","_blank").attr("title","Send email with Gmail");
			}
		}

		$('#btngmail').on('click',function() {
			$('#modal-email').modal('show');
		});
		$('#SendMailto').submit(SenDataGmail);
		function SenDataGmail(e) {
			e.preventDefault();
			let email = $('[name="to-email-data"]').val();
			let subjek = $('[name="subjek-email"]').val();
			let pesan = $('[name="pesannn-email"]').val();
			let pesan_client = $('[name="psn-client"]').val();
			$.ajax({
				type 	:"POST",
				url 	:baseurl + "Backend/Kontak/SendDataEmail",
				data 	:{email:email,subjek:subjek,pesan:pesan,msg_client:pesan_client},
				dataType:"json",
				beforeSend : function(data) {
					$('#aksi-btn-kontak').hide();
				},success : function(data) {
					$('#pesankontak').html(data.success);
					$('#SenDataGmail').trigger('reset');
					$('#modal-email').modal('hide');
				},error : function(data) {
					$('#pesankontak').html(data.error);
				}
			});
			setTimeout(function() {
				$('.alert').slideUp();
			},7870); //<----787 detik
		}

		$(document).on('click','.btn-hapus-contact',function() {
				$('#confirm-modal-kontak').modal('show');
			});

		$(document).on('click','.btn-hapus-actions-kontak',function() {
			var data_id = $('#data-id-kontak-delete').val();
				$.ajax({
					type 	:"GET",
					url 	:baseurl + "Backend/Kontak/deleteById",
					data 	:{id:data_id},
					dataType:"json",
					success : function(mydata) {
						$('.kontent-'+data_id+'').remove();
						$('#confirm-modal-kontak').modal('hide');
						$('#aksi-btn-kontak').hide();
						$('#pesankontak').html(mydata.success);
					},error : function(mydata) {
						$('#pesankontak').html(mydata.error);
					}
				});
			setTimeout(function() {
				$('.alert').slideUp();
			},5100); //<<---- 51 Detik
		})

	})
</script>