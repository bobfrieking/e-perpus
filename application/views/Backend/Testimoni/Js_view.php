<script type="text/javascript">
	$(function() {
		var baseurl = "<?= base_url(); ?>";
		object_show();
		$('#table-testimn').DataTable();
		function object_show() {
			// Area Tampilkan Data --------------------------------------------------------------------------------
			$.ajax({
				type 	:"GET",
				url 	:baseurl + "Backend/Testimoni/showalldata",
				async 	:false,
				success : function(data) {
					var testimn = JSON.parse(data);
					var html = ''
					for (var i = 0; i < testimn.length; i++) {
						html += `
							<tr id="content-`+testimn[i].id+`">
	                            <td>`+i+`</td>
	                            <td><img style="height:150px;width:150px;border-radius:50%;" src="<?= base_url().'./upload/' ?>testimony/`+testimn[i].gambar+`" />
	                            </td>
	                            <td>`+testimn[i].nama+`</td>
	                            <td>`+testimn[i].komentar+`</td>
	                            <td>
	                            	<a onclick="getupdatetestimn(`+testimn[i].id+`)" href="javascript:void(0)" class="text-primary"><i class="mdi mdi-pencil"></i></a> | 
	                            	<a data_id="`+testimn[i].id+`" data_gbr="`+testimn[i].gambar+`" href="javascript:void(0)" class="text-danger btn-action-delete"><i class="mdi mdi-delete"></i></a>
	                            </td>
                        	</tr>
							`;
					}
					$('#contetsss').html(html);
				}
			});
			// End -----------------------------------------------------------------------------------------------
			// Area Send Input To Img-----------------------------------
			$('[name="testimn"]').change(thiSfiles);
			function thiSfiles() {
				var fileURL = URL.createObjectURL(event.target.files[0]);
				$('#testimn-avatar').attr("src",fileURL);
			}
			$('[name="testimn-edit"]').change(thiSfiless);
			function thiSfiless() {
				var filesURL = URL.createObjectURL(event.target.files[0]);
				$('#testimn-avatar-edit').attr("src",filesURL);
			}
			// End -----------------------------------------------------

			// Klik Modal Tambah ----------------------------------
			$(document).on('click','.btn-tambah-dataa',function() {
				$('#modal-tambah-testimn').modal('show');
			});
			// End ------------------------------------------------

			// Proses Tambah Data ----------------------------------
			$("#formTambahTestimn").submit(SendDataTambahTestimn);
			function SendDataTambahTestimn(e) {
					e.preventDefault()
				$.ajax({
					type 	:"POST",
					url 	:baseurl + "Backend/Testimoni/prosesTambahTestimn",
					data  	:new FormData(this),
					dataType:"json",
					contentType:false,
					processData:false,
					beforeSend : function(data) {
						$("#modal-tambah-testimn").modal('hide');
					},success : function(data) {
						// $("#table-testimn").load(location.href+" #table-testimn>*","");
						$("#pesanalert").html(data.success);
						object_show();
					},complete : function(data) {
						$("#formTambahTestimn").trigger('reset');
					},error : function(data) {
						$("#pesanalert").html(data.error);
					}
				});
				setTimeout(function() {
					$('.alert').fadeOut();
				},5000);
			}
			// End -------------------------------------------------
			// konfirm Delete Modal --------------------------------
			$(document).on('click','.btn-action-delete',function() {
				var data_id = $(this).attr("data_id");
				var data_gbr = $(this).attr("data_gbr");
				$("#data_id_delete_testimony").val(data_id);
				$("#data_gbr_delete_testimony").val(data_gbr);
				$('#confirm-modal-testimn').modal('show');
			});
			// End -------------------------------------------------
			// Proses Hapus Data Testimony --------------------------------
			$(document).on('click','.btn-hapus-action-testimn',function() {
				var data_id = $("#data_id_delete_testimony").val();
				var data_gbr = $("#data_gbr_delete_testimony").val();
				 	$.ajax({
				 		type 	:"GET",
				 		url 	:baseurl + "Backend/Testimoni/deleteById",
				 		data 	:{data_id:data_id,data_gbr:data_gbr},
				 		dataType:"json",
				 		beforeSend : function(mydata) {
				 			$("#confirm-modal-testimn").modal('hide');
				 		},success : function(mydata) {
				 			$('#content-'+data_id+'').remove();
				 			$("#pesanalert").html(mydata.success);
				 		},error : function(mydata) {
				 			$("#pesanalert").html(mydata.error);
				 		}
				 	});
				 	setTimeout(function() {
				 		$('.alert').slideUp();
				 	},5100);
			});
			// End --------------------------------------------------------
			// Proses Update Testimony -----------------------------------
			$("#formUpdateTestimn").submit(processDataUpdateTestimn);
			function processDataUpdateTestimn(e) {
					e.preventDefault();
					var form = this;
					$.ajax({
					type 	:"POST",
					url 	:baseurl + "Backend/Testimoni/prosessUpdateTestimn",
					data  	:new FormData(this),
					dataType:"json",
					contentType:false,
					processData:false,
					beforeSend : function(data) {
						$("#modal-edit-testimn").modal('hide');
						// $(".loader").show();
						// window.location.assign('Testimoni');
					},success : function(data) {
						$("#pesanalert").html(data.success);
						object_show();
						$("#formUpdateTestimn").trigger('reset');
						// $().load(location.href+" #content- >*","");
					},error : function(data) {
						$("#pesanalert").html(data.error);
					}
				});
					setTimeout(function() {
						$('.alert').fadeOut();
					},5300);
			}
			// End -------------------------------------------------------
		}
	});
	// Validasi Modal Tambah Testimoni ---------------------------------------------------------
	function setValidateData() {
		var namaTestimn = $("#nama-testimn").val(); 
		var textTestimn = $("#text-testimn").val();
		var msg 		= '<small class="text-danger msgvalidrequire"> Harap Isikan !!</small>'; 
		if (namaTestimn == "" || textTestimn == "") {
			$("#msgrequire").html(msg);
			$("#msgrequiree").html(msg);
			// $("#nama-testimn").css("border","1px solid red");
			// $("#text-testimn").css("border","1px solid red");
		}else{
			$(".msgvalidrequire").hide();
			$(".btnsformtmbh").attr("type","submit");
		}
	}
	// End -------------------------------------------------------------------------------------
			// getData Show Modal-------------------------------------------------------------------------------
			function getupdatetestimn(dataId) {
				$.ajax({
					type 	:"GET",
					url 	:"<?= base_url().'Backend/Testimoni/' ?>getByIdData/"+dataId,
					// dataType:"json",
					success : function(mydata) {
						var testimn = JSON.parse(mydata);
						$("#modal-edit-testimn").modal('show');
						$('[name="data-id-update-testimn"]').val(testimn[0].id);
						$('[name="data-gbr-update-testimn"]').val(testimn[0].gambar);
						$('[name="nama-testimn-edit"]').val(testimn[0].nama);
						$('[name="text-testimn-edit"]').val(testimn[0].komentar);
						$("#testimn-avatar-edit").attr('src','<?= base_url().'./upload/' ?>testimony/'+testimn[0].gambar);
					}
				});
			}
			// End ---------------------------------------------------------------------------------------------
</script>