<script type="text/javascript">
	$(function(){
		let BASEURL = "<?= base_url() ?>";
		let SITEURL = "<?= site_url() ?>";
		// load scroll ajax
		// var batas = 3;
		// var mulai = 0;
		// scrollLoad(batas,mulai);

		// function scrollLoad(batas,mulai) {
			
		// }
		//  $(window).scroll(function() {
  //              if($(window).scrollTop() + $(window).height() == $(document).height()) {
  //                  $("#muatLainnya").html("MLainnya");
  //              }
  //           });
		// $("#muatLainnya").on('click',function() {
		// 	batas = 3;
		// 	mulai = mulai + 3;
		// 	scrollLoad(batas,mulai);
		// })

		  // var scrollTop = 0
	   // $(window).scroll(function(event) {
	   // 		let scrollT = $(this).scrollTop()
	   // 		if (scrollT > scrollTop) {
	   // 			batas = 3;
	   // 			mulai = scrollTop + batas;
	   // 			scrollLoad(batas,mulai);
	   // 		}else{

	   // 		}
	   // 		scrollTop = scrollT;
	   // });

		refresh_buku();
		function refresh_buku(){

			$.ajax({
				type 	:"POST",
				url 	:BASEURL + "Frontend/Buku/gettampilData/",
				dataType:"json",
			}).done (function(data){
					$('#tampil-data-buku').html(data.buku);
					$('#total-buku').html(data.totals);
			});

			$('#keyword-buku').keyup(searchBuku);
			function searchBuku(){
				let keyword = $(this).val();
					$.ajax({
						type 	:"POST",
						url 	:BASEURL + "Frontend/Buku/pencarian",
						data 	:{keyword:keyword},
						dataType:'json',
					}).done (function(data){
						$('#tampil-data-buku').html(data.keyword);
						$('#total-buku').html(data.total_data_buku_pencarian);
					});
			}

			$(document).on('click','.btn-detail-buku',function(){
				$('#detail-buku-modal').modal('show');
					let id = $(this).attr("data-detail-buku");
						$.ajax({
							type 	:"POST",
							url 	:BASEURL + "Frontend/Buku/getById",
							data 	:{id:id},
						}).done (function(data){
							let obj = JSON.parse(data);
							$('#gambar-detail').attr('src',BASEURL + 'upload/buku/'+obj[0].gambar+'');
							$('#judul-buku-detail').html(obj[0].judul_buku);
							$('#kategori-buku-detail').html(obj[0].kategori);
							$('#pengarang-buku-detail').html(obj[0].nama_pengarang);
							$('#penerbit-buku-detail').html(obj[0].nama_penerbit);
							$('#tahun-terbit-buku-detail').html(obj[0].tahun_terbit);
							// $('#rating-buku-detail').html(obj[0].rating);
							$('#deskripsi-buku-detail').html(obj[0].deskripsi);
						});
			});

			$('#filter-kategori-buku').click(GetDataToSendPencarianBukuKategori);

			function GetDataToSendPencarianBukuKategori(){
				$.ajax({
					type 	:"POST",
					url 	:BASEURL + "Frontend/Buku/filterDataKategoriBySelect",
					data 	:{filter_buku:$(this).val()},
					dataType:'json',
				}).done (function(filter){
					$('#tampil-data-buku').html(filter.filter);
					$('#total-buku').html(filter.total_data_filter_buku);
				});
			}

		$(document).on('click','.noakun',function(){
			$('#modal-login').modal('show');
		});

		$(document).on('click','.pinjambuku',function(){
			$('#modal-pinjam-buku').modal('show');
			let n =1;
			
			let nm_data = $(this).attr("data-pinjam-buku");
			let stok = $(this).attr("data-pinjam-stok-send-buku");
			let id_data_buku = $(this).attr("id-data-buku");
			$('[data-id-buku="data"]').val(id_data_buku);
			$('[name="judul-buku-pinjam"]').val(nm_data);
			$('#data-stok-buku').val(stok);
		});

		$(document).on('keyup','.batas-jmlPinjam-Buku',function(){
			// let data = 1;
			let jmlPinjamBuku = $(this).val();
			let stok = parseInt($('#data-stok-buku').val());   
			
			// var thiS_data = {jmlPinjamBuku:jmlPinjamBuku,stok:stok};
			// 		$.ajax({
			// 			type 	:"POST",
			// 			url 	:BASEURL + "Frontend/Buku/Valid_Ajax_buku",
			// 			data 	:thiS_data,
			// 			dataType:"json",
			// 			success:function(respons) {
			// 					$('#msgPinjam').html(respons.pesan);
			// 					$('#btnPinjam').attr("type","button");
			// 					$('.batas-jmlPinjam-Buku').css("border",respons.css);
			// 					$('#isipesanstok-buku').hide();
			// 					$('#isipesanrequired-buku').hide();
			// 					$('#isipesanrequire-msg').hide();							
			// 			}
			// 		});
				if (jmlPinjamBuku == "" || jmlPinjamBuku == null) {
					msgrequire = '<small style="color:#ff2727" id="isipesanrequire-msg">Harap Isikan Jumlah Pinjam !!</b></small>';
					$('#msgPinjam').html(msgrequire);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;	
				}else if (jmlPinjamBuku > stok) {
					msg = '<small style="color:#ff2727" id="isipesanstok-buku">Maaf Stok Buku Tersedia Sampai <b>'+stok+'</b> !! </small>';
					$('#msgPinjam').html(msg);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;
				}else if (jmlPinjamBuku < 1) {
					keywrdRequired = '<small style="color:#ff2727" id="isipesanrequired-buku">Maaf Harap Isikan Jumlah Pinjam Yang Benar !!!</b></small>';
					$('#msgPinjam').html(keywrdRequired);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;
				}else{
					$('.batas-jmlPinjam-Buku').css("border","1px solid #bcbcbc");
					$('#isipesanstok-buku').hide();
					$('#isipesanrequired-buku').hide();
					$('#isipesanrequire-msg').hide();
					$('#btnPinjam').attr("type","submit");
					return true;	
				}
		});

		// $(document).on('click', '.tp', function(){
		// 	let tp = $('#tp').value;
		// 	console.log(tp)
		// 	let bp = new Date().setDate(tp + 3);

		// 	// $(this).getElementById("bp").value = bp;
		// })

		

		$(document).on('click','.batas-jmlPinjam-Buku',function(){
			// let data = 1;
			let jmlPinjamBuku = $(this).val();
			let stok = parseInt($('[name="stok-buku"]').val());
			let msg = '<small style="color:#ff2727" id="isipesanstok-buku">Maaf Stok Buku Tersedia Sampai <b>'+stok+'</b> !! </small>';
			let keywrdRequired = '<small style="color:#ff2727" id="isipesanrequired-buku">Maaf Harap Isikan Jumlah Pinjam Yang Benar !!!</b></small>';   
			let msgrequire = '<small style="color:#ff2727" id="isipesanrequire-msg">Harap Isikan Jumlah Pinjam !!</b></small>';	
				if (jmlPinjamBuku == "" || jmlPinjamBuku == null) {
					$('#msgPinjam').html(msgrequire);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;	
				}else if (jmlPinjamBuku > stok) {
					$('#msgPinjam').html(msg);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;
				}else if (jmlPinjamBuku < 1) {
					$('#msgPinjam').html(keywrdRequired);
					$('.batas-jmlPinjam-Buku').css("border","1px solid #ff2727");
					$('#btnPinjam').attr("type","button");
					return false;
				}else{
					$('.batas-jmlPinjam-Buku').css("border","1px solid #bcbcbc");
					$('#isipesanstok-buku').hide();
					$('#isipesanrequired-buku').hide();
					$('#isipesanrequire-msg').hide();
					$('#btnPinjam').attr("type","submit");
					return true;	
				}
		});

		// Autocomplete --------------------------------------------------------
		// $('.dataa-bukuuuu').autocomplete({
		// 	source: "<?= site_url().'Frontend/Buku/get_autocomplete' ?>",
		// });
		// ---------------------------------------------------------------------




		// $('#Proses-Pinjam-Buku').submit(SendPinjamBukuProsess);
		// 			let data_idBukuPinjam = $('[name="id-buku-pinjam]').val();
		// 	function SendPinjamBukuProsess(e){
		// 		e.preventDefault();
		// 		$.ajax({
		// 			type 	:"POST",
		// 			url 	:BASEURL + "Frontend/Buku/proses_pinjam_buku",
		// 			data 	:{id_data:data_idBukuPinjam,
		// 					tgl_pinjam:$('[Send-tgl-Pinjam="tp"]').val(),
		// 					bts_pinjam:$('[Send-bts-pinjam="bp"]').val(),
		// 					jml_pinjam:$('[name="jumlah-pinjam-buku"]').val()},
		// 		}).done (function(data){
		// 			$('#modal-pinjam-buku').modal('hide');
		// 			alert("Berhasil Pinjam Buku");
		// 		});
		// 	}
		
		}

		// Pagination Menu---------------->
		// $('#pagination-data').on('click','a',function(e) {
		// 	e.preventDefault();
		// 	let paginasi = $(this).attr("data-ci-pagination-page");
		// 	loadPagination(0);
		// });
		// function loadPagination(paginasi) {
		// 		$.ajax({
		// 			type 	:"GET",
		// 			url 	: BASEURL + "Frontend/Buku/gettampilData/"+paginasi,
		// 			dataType:"json",
		// 		}).done(function(isData) {
		// 			$('#pagination-data').html(isData.pagination);
		// 			createObjData(isData.buku);
		// 		});
		// }
		// function createObjData(buku) {
		// 	$('#tampil-data-buku').html(buku);
		// }


	});
</script>