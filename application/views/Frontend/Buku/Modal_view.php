<!--- Warning Alert Modal -->
<div id="detail-buku-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <button class="close" data-dismiss="modal" aria-hidden="true" type="button">x</button>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <img height="350" width="250" id="gambar-detail">
                        </div>
                        <div class="col-md-6">
                            <h4 id="judul-buku-detail"></h4><hr>
                            <div class="text-center">
                                Kategori  : <span id="kategori-buku-detail"></span><br>
                                Pengarang : <span id="pengarang-buku-detail"></span><br>
                                Penerbit  : <span id="penerbit-buku-detail"></span><br>
                                Tahun Terbit  : <span id="tahun-terbit-buku-detail"></span><br>
                                <!-- Rating / Ulasan : <span id="rating-buku-detail"></span> <i class="fa fa-star" style="color: orange"></i><br> -->
                                Deskripsi : <p id="deskripsi-buku-detail"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--- Warning Alert Modal -->
<div id="modal-pinjam-buku" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <button class="close" data-dismiss="modal" aria-hidden="true" type="button">x</button>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="<?= base_url().'Proses-Pinjam-Buku' ?>">
                            <input type="hidden" data-id-buku="data" name="id-buku-pinjam">
                            <div class="form-group">
                            <label>Nama Buku</label>
                            <input class="form-control" type="text" name="judul-buku-pinjam" readonly="on">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pinjam</label>
                                <input class="form-control tp" id='tp' type="date" name="tp" required>
                            </div>
                            <div class="form-group">
                                <label>Batas Pinjam</label>
                                <input class="form-control bp" id='bp' type="date" name="bp" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Pinjam</label>
                                <input type="hidden" id="data-stok-buku">
                                <input class="form-control batas-jmlPinjam-Buku" type="number" name="jumlah-pinjam-buku" placeholder="Isikan Jumlah Pinjam Buku.." required>
                                <i><small id="msgPinjam"></small></i>
                            </div>
                            <button id="btnPinjam" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Pinjam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
const tp = document.querySelector('#tp');
const bp = document.querySelector('#bp');

tp.addEventListener('change', () => {
    const currentDate = new Date(tp.value);
    currentDate.setDate(currentDate.getDate() + 3);
    bp.setAttribute('value', currentDate.toISOString().split('T')[0]) 
});

</script>