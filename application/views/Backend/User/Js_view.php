<script type="text/javascript">
	let B_URL = "<?= base_url() ?>";
	// redirect Halaman
	let redirectData = window.location;
	// Fitur Profile ganti
	$('.change-profile-no').hide();

	// show Pass Login ----------------------
	$("#show-pass").change(showpassss);
	function showpassss() {
		if ($(this).is(':checked')) {
			$('#passlogin').attr("type","text");
		}else{
			$('#passlogin').attr("type","password");
		}
	}
	// End ----------------------------------
	$('#sembunyikan-data').hide();
	// ------->>>>>
	// Fitur Profile Social
	$('#social-hidden').hide();
	// ------------------->
	$('#passCurrenthide').hide();
	$('#passNewhide').hide();
	$('#btntampilorhide').hide();
	$('#btnPass').hide();
	$(function() {
		// Klik Aksi Ganti Password
		$(document).on('click','.change-password',function() {
			$('#passCurrent').hide();
			$('#passNew').show();
			$('.change-password').hide();
			$('#passCurrenthide').show();
			$('#passNewhide').hide();
			$('#btnPass').show();
			$('#btntampilorhide').show();
			$('.change-password-no').show();
		});
		$(document).on('click','.change-password-no',function() {
			$('#passCurrent').show();
			$('#passNew').show();
			$('.change-password').show();
			$('#passCurrenthide').hide();
			$('#passNewhide').hide();
			$('#btnPass').hide();
			$('#btntampilorhide').hide();
			$('.change-password-no').hide();
		});
		// ---------End---------->>

		$(document).on('change','[name="profile"]',function() {
			let DataFiles = URL.createObjectURL(event.target.files[0]);
			$('#img-avatar').attr('src',DataFiles);
		});

		// Fitur Profile Area
		$(document).on('click','.change-profile',function() {
			$('#sembunyikan-data').show();
			$('#tampil-data').hide();
			$('.change-profile').hide();
			$('.change-profile-no').show();
		});
		$(document).on('click','.change-profile-no',function() {
			$('#sembunyikan-data').hide();
			$('#tampil-data').show();
			$('.change-profile').show();
			$('.change-profile-no').hide();
		});
			ProsesProfile();
			function ProsesProfile() {
				// body...
			}
			// Proses Area Edit Profile
			$('#btnsubmit-Editprofile').click(SendGantiProfile);
				function SendGantiProfile() {
					let required = '<span class="text-danger"><i>Harap Isikan Data Tersebut !!</i></span>'
				 	let nama  =  $('#nama-profile').val();
				 	let email =  $('#email-profile').val();
				 	let alamat=  $('#alamat-profile').val();
				 	 	if (nama == "" || email == "" || alamat == "") {
				 	 		$('#pesanvalidasi').html(required);
				 	 		$('#btnsubmit-Editprofile').attr("type","button");
				 	 		$('#nama-profile').css("border","1px solid red");
				 	 		$('#email-profile').css("border","1px solid red");
				 	 		$('#alamat-profile').css("border","1px solid red");
				 	 	}else{
				 	 		$('#btnsubmit-Editprofile').attr("type","button");
					 	 		$.ajax({
						 	 		type 	:"GET",
						 	 		url 	:"<?= base_url().'Backend/Profile/profile_ubah_data' ?>",
						 	 		contentType: false,
						 	 		data 	:{nama:nama,email:email,alamat:alamat},
						 	 		dataType:"json",
									success : function (is_data) {
										alert(is_data.berhasil);
						 	 			window.location.assign('Profile');
						 	 				$('#nama-profile').css("border","1px solid #c9c9c9");
								 	 		$('#email-profile').css("border","1px solid #c9c9c9");
								 	 		$('#alamat-profile').css("border","1px solid #c9c9c9");
						 	 		},error:function(is_data) {
						 	 			alert(is_data.gagal);
						 	 			window.location.assign('Profile');
						 	 		}
					 	 		});
					 	 		// setTimeout(function() {
					 	 		// 	$('.data-success-profile').slideUp();
					 	 		// },4000);
				 	 		 }
				 } 
			// ---------------------->>
		// ---------------->>

		// Fitur Ganti Password
		$('#btnPass').click(prosesUbahPassword);
		function prosesUbahPassword() {
			let required = '<small class="text-danger data-requiredpass"><i>Harap Isikan !!!</i></small>';
			let PassCurrent = $(this).attr("data-passCurrent");
			let PassCurrent2 = $('#passCurrenthide').val();
			let Passnew = $('#passNewhide').val();
				if (PassCurrent2 == "" || PassCurrent2 == null) {
					$('#passCurrenthide').css("border","1px solid red");
					$('#msgCurrentPass').html(required);
				}else{
					$('#passCurrenthide').css("border","1px solid #c9c9c9");
					$('.data-requiredpass').hide();
				}if (Passnew == "" || Passnew == null) {
					$('#passNewhide').css("border","1px solid red");
					$('#msgNewPass').html(required);
				}else{
					$('#passNewhide').css("border","1px solid #c9c9c9");
					$('.data-requiredpass').hide();
				}
		}
		// -------------->>>>>>
		// Validasi Fitur Ganti Password
			// Password Lama 
			$('#passCurrenthide').keyup(PassLama);
			function PassLama() {
				let pwdLama = $(this).val();
				let msgRequired = '<small class="text-danger"><i>Harap Isikan !!</i></small>';
					if (pwdLama == "" || pwdLama == null) {
						$('#passCurrent').val(pwdLama);
						$('#passCurrenthide').css("border","1px solid red");
						$('#btnPass').attr("type","button");
						$('#msgCurrentPass').html(msgRequired);
						return false;
					}else{
						$.ajax({
							type 	:"GET",
							url 	:B_URL + "Backend/Profile/cekPassLama",
							data 	:{passCurrent:pwdLama},
							dataType:"json", 	
						}).done (function(mydata) {
								if (mydata.data == 0) {
									$('#passCurrent').val(pwdLama);
									$('#passNewhide').hide();
									$('#passNew').show();
									$('#passCurrenthide').css("border","1px solid orange");
									$('#btnPass').attr("type","button");
									$('#msgCurrentPass').html(mydata.tidak_ada);
									return false;
								}else{
									$('#passCurrent').val(pwdLama);
									$('#passNewhide').show();
									$('#passNew').hide();
									$('#passCurrenthide').css("border","1px solid #9ef7a3");
									$('#msgCurrentPass').html(mydata.ada);
									$('#btnPass').attr("type","submit");
									return true;
								}
						}).error (function(mydata) {
							alert(mydata.error);
							return false;
						})
					}
			}
			// Password Baru
			$('#passNewhide').keyup(PassBaru);
			function PassBaru() {
				let pwdBaru = $(this).val();
				var pwdLama = $('#passCurrenthide').val();
				let min_baris = '<small class="text-danger minimsLength"><i>Password Minimal Lebih Dari 3 Baris !!</i></small>';
				let passcurrentRequired = '<small class="text-danger msgValPasscurrentrequired"><i>Password Lama Tidak Ditemukan !!</i></small>';
				let msgRequired = '<small class="text-danger msgValPassNew"><i>Harap Isikan !!</i></small>';
				let msg_tbs = '<small class="text-danger msgValPassNew"><i>Password Tidak Boleh Sama !!</i></small>'
					if (pwdBaru == "" || pwdBaru == null || pwdBaru == 0) {
						let object = $('#passNewhide');
						let msg = $('#msgNewPass');

								object.css("border","1px solid red");
								msg.html(msgRequired);
								$('#passNew').val(pwdBaru);
							return false;
					}else if (pwdBaru == pwdLama) {
						$('#passNew').val(pwdBaru);
						$('#passNewhide').css("border","1px solid red");
						$('#msgNewPass').html(msg_tbs);
						$('#btnPass').attr("type","button");
						return false;
					}else if (pwdBaru.length < 3+1) {
						$('#msgNewPass').html(min_baris);
						$('#btnPass').attr("type","button");
					}else{
						$('#passNew').val(pwdBaru);
						$('#passNewhide').css("border","1px solid #c9c9c9");
						$('#btnPass').attr("type","submit");
						$('.msgValPassNew').hide();
						$('.minimsLength').hide();
						return true;
					}
			}
		// -----------End------------>
			// --------End---------------->>
			// Klik Tampil Password type
			$(document).on('click','.btnlihatpass',function() {
				$('#passCurrent').attr("type","text");
				$('#passCurrenthide').attr("type","text");
				$('#passNewhide').attr("type","text");
				$('#passNew').attr("type","text");
				$('.btnlihatpass').hide();
				$('.btnhidepass').show();
			});
			$(document).on('click','.btnhidepass',function() {
				$('#passCurrent').attr("type","password");
				$('#passCurrenthide').attr("type","password");
				$('#passNewhide').attr("type","password");
				$('#passNew').attr("type","password");
				$('.btnlihatpass').show();
				$('.btnhidepass').hide();
			});
			// --------------End-------->
		// Klik Social Profile
		$(document).on('click','.change-profile-social',function() {
			$('#social-hidden').show();
			$('#social-show').hide();
			$('.change-profile-social-no').show();
			$('.change-profile-social').hide();
		});
		$(document).on('click','.change-profile-social-no',function() {
			$('#social-hidden').hide();
			$('#social-show').show();
			$('.change-profile-social-no').hide();
			$('.change-profile-social').show();
		});
		// ------End--------->
		// Fungsi Proses Ganti Password
		$('#form-ganti-password-profile').submit(SendChangePassword);
		function SendChangePassword() {
				$.ajax({
					type 	:"POST",
					url 	:B_URL + "Backend/Profile/ubah_profile_pass",
					data 	:{passwordBaru:$('#passNewhide').val()},
					dataType:"json",
					success : function(mydata) {
						alert(mydata.success);
						redirectData.assign('Profile');
					},error : function(mydata) {
						alert(mydata.error);
						redirectData.assign('Profile');
					}
				});
		}
		// ----------End------------>>>
		// Fungsi Proses Ganti Avatar
		$('#Send-edit-Avatar_Profile').submit(SendProcessAvatar);
		function SendProcessAvatar(e) {
			e.preventDefault()
			$.ajax({
				type 	:"POST",
				url 	:B_URL + "Backend/Profile/ubah_profile_avatar",
				data 	:new FormData(this),
				contentType: false,
			    processData: false,
			    dataType:"json",
			    success : function(mydata) {
			    	alert(mydata.success);
			    	redirectData.assign('Profile');
			    },error : function(mydata) {
			    	alert(mydata.error);
			    	redirectData.assign('Profile');
			    }
			})
		}
		// ----------End---------->>>
	})
</script>