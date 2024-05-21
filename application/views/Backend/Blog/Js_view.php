<script type="text/javascript">
	setTimeout(function() {
		$('.alert').fadeOut();
	},5100);
	$(function() {
		$(document).on('click','.btntmbhblogs',function() {
			$("#modal-tambah-blog").modal('show');
		});


		// Change To Img ----------------
		$(document).on('change','.input-file-blog',function() {
			var file = URL.createObjectURL(event.target.files[0]);
			$(".img-file-blog").attr("src",file);
		});
		$(document).on('change','.input-file-blog-edit',function() {
			var file = URL.createObjectURL(event.target.files[0]);
			$(".img-file-blog-edit").attr("src",file);
		});
		// ------------------------------
	});
	function deleteDatablog(dataId){
		$('[name="data-id-blog"]').val(dataId);
		$("#confirm-modal-blog").modal('show');
	}
	function getDatablog(dataId) {
		$.ajax({
			type 	:"GET",
			url 	:"<?= base_url().'Backend/Blog/' ?>getDataById/"+dataId,
			success : function(respons) {
				$('#modal-update-blog').modal('show');
				var blog = JSON.parse(respons);
				$('[name="id-edit-blog"]').val(blog[0].id);
				$('[name="judul-edit"]').val(blog[0].judul);
				$('[name="nama-edit"]').val(blog[0].nama);
				$('[name="tanggal-edit"]').val(blog[0].tanggal);
				$('[name="url-edit"]').val(blog[0].url);
				$('[name="deskripsi-edit"]').val(blog[0].deskripsi);
				$(".img-file-blog-edit").attr('src','<?= base_url().'./upload/blog/' ?>'+blog[0].gambar+'');
			}
		})
	}
</script>