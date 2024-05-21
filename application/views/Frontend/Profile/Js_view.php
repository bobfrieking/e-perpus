<script type="text/javascript">
	$("#objpassnew-profil").hide();

	$('#smbunyikanPass').hide();
	$(function(){
		$('#icon-eye-show').on('click',function(){ 
			$('#password-current').attr("type","text");
			$('#passwordnew').attr("type","text");
			$('#icon-eye-show').hide();
			$('#smbunyikanPass').show();
		});
		$('#smbunyikanPass').on('click',function(){
			$('#password-current').attr("type","password");
			$('#passwordnew').attr("type","password");
			$('#icon-eye-show').show();
			$('#smbunyikanPass').hide();
		});
		$(document).on('click','.btn-edit-profile',function(){
			$('#modal-edit-profile').modal('show');
		});

		$(document).on('click','.btn-changepass-profile',function() {
			$('#modal-change-pass-users').modal('show');
		})

		$(document).on('change','.input-edit-profil',function(){
			let ini    = $(this);
			let foto   = this.files;
			if (foto && foto[0]) {
				let tampil = new FileReader();
				tampil . onload = function (e) {
					ini.next('.img-edit-profil').attr('src', e.target.result).show();
				}
				tampil.readAsDataURL(foto[0]);
			} 
		});

		$('#password-current').keyup(passwrd);
		function passwrd() {
			let pass = $(this).val();
			let ada   = '<small style="color:green">Password Ditemukan ..</small>';
			let tidak_ada = '<small class="tidak-ada-akun" style="color:red">Password Tidak Ada ..</small>';
			let required = '<small style="color:orange">Password Harap Diisi !!</small>';
				if (pass == "" || pass == null || pass == 0) {
					$('#password-current').css("border","1px solid orange");
					$('#msg-passCurrent').html(required);
				}else{
						$.ajax({
						type 	:"GET",
						url 	:"<?= base_url(); ?>Frontend/Profile/cekGantiPass",
						data 	:{pass:pass},
						success : function (data){
							if (data == 0) {
								$('#password-current').css("border","1px solid red");
								$('#msg-passCurrent').html(tidak_ada);
								$('#btn-changePassUsrs').attr("type","button");
								return false;
							}else if (data == 1) {
								$("#objpassnew-profil").show();
								$('#password-current').css("border","1px solid green");
								$('#msg-passCurrent').html(ada);
								$('#btn-changePassUsrs').attr("type","submit");
								return true;
							}
						}
					});
				}
			}
			$('#passwordnew').keyup(passnew);
			function passnew() {
				let passnew = $(this).val();
				let passLama = $('#password-current').val();
				let PassSama = '<small class="msgpassnewww" style="color:red">Password Tidak Boleh Sama !!</small>';
				if (passnew == passLama) {
					$('#btn-changePassUsrs').attr("type","button");
					$('#passwordnew').css("border","1px solid red");
					$('#msg-PassNew').html(PassSama);
				}else{
					$('#passwordnew').css("border","1px solid #cecece");
					$('.msgpassnewww').hide();
					$('#btn-changePassUsrs').attr("type","submit");
				}
			}

			$("#gantipassword-anggota").submit(ProsesGantiPassAnggota);
			function ProsesGantiPassAnggota(e) {
					e.preventDefault();
					var pass = $("#passwordnew").val();
					var successChangePass = '<div class="alert alert-success"> Ganti Password Berhasil ..</div>';
					var errorChangePass = '<div class="alert alert-danger"> Ganti Password Gagal !!</div>';
					$.ajax({
					type 	:"POST",
					url 	:"<?= base_url(); ?>Frontend/Profile/gantiPasswordAnggota",
					data 	:{pass:pass},
					beforeSend : function(respons) {
						$("#btn-changePassUsrs").text("Loading ...");
					},success : function(respons) {
						$("#btn-changePassUsrs").attr('disabled',true);
						// $('#modal-change-pass-users').modal('hide');
						$("#msgChangePassUsersssssss").fadeIn().html(successChangePass);
					},complete : function(respons) {
						$("#gantipassword-anggota").trigger('reset');
						$("#btn-changePassUsrs").text("Ubah");
					},error : function(respons) {
						$("#msgChangePassUsersssssss").html(errorChangePass);
					}
				});
				setTimeout(function() {
					$('.alert').fadeOut();
				},5000);
			}
	});
</script>