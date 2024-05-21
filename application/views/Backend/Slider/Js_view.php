<script type="text/javascript">
	setTimeout(function() {
		$('.alert').slideUp();
	},5000);
		$(function() {
				
			$('#btn-tambah-slider').click(Tambah_slider);
			function Tambah_slider() {
				$('#modal-tambah').modal('show');
			}

			// Klik Tampil Gambar
			$(document).on('change','.input-carousel',function() {
				let file = URL.createObjectURL(event.target.files[0]);
				$('.img-carousel').attr("src",file);
			});
			// Edit
			$(document).on('change','.input-carousel-edit',function() {
				let file = URL.createObjectURL(event.target.files[0]);
				$('.img-carousel-edit').attr("src",file);
			});

			$(document).on('click','.btn-delete-slider',function() {
				let id = $(this).attr("data");
				$('#confirm-modal').modal('show');
				$('[name="dataByid"]').val(id);
			});

			$(document).on('click','.btn-edit-slider',function() {
				let id = $(this).attr("data-edit");
					$.ajax({
						type 	:"GET",
						url 	:"<?= base_url(); ?>Backend/Slider/GetDataById",
						data 	:{id:id},
						success : function(data) {
						$('#modal-edit').modal('show');
						let items = JSON.parse(data);
						$('[name="data-id-slider-edit"]').val(items[0].id);
						$('[name="data-gbr-slider-edit"]').val(items[0].gambar);
						$('[name="judul-edit-slider"]').val(items[0].judul);
						$('[name="promosi-edit"]').val(items[0].promosi);
						$('[name="deskripsi-edit"]').val(items[0].deskripsi);
						$('.img-carousel-edit').attr('src','<?= base_url().'./upload/' ?>slider/'+items[0].gambar+'');
						}
					});
			})

	})
</script>