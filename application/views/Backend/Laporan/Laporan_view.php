<!DOCTYPE html>
<html><head>
<title>Laporan</title>
	 <!-- App css -->
        <link href="<?= base_url().'assets/backend/css/app.min.css' ?>" rel="stylesheet" type="text/css" id="light-style" />
</head>
<body>
	  <!-- <img style="height:20px;width:70px" src="<?= base_url().'upload/app/'.$db['icon'] ?>"> -->
	<div class="text-center">
		<h2>Data Perpustakaan</h2>
		<hr class="mb-5">
	</div>
	<div class="col-md-12">
		<div class="row">
<h4 class="text-left mb-2"> Data Pengembalian</h4>
<table class="table table-bordered w-100">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th>Peminjam</th>
			<th>Tanggal Pinjam</th>
			<th>Batas Pinjam</th>
			<th width="70px">Jumlah Pinjam</th>
			<th>Di Kembalikan Pada</th>
			<th>Denda</th>
		</tr>
	</thead>
	<tbody>
			<?php $n=1; foreach ($datas->result_array() as $row) {
				echo '<tr>';
				echo '<td width="50px">'.($n++).'</td>';
				echo '<td>'.$row['nama'].'</td>';
				echo '<td>'.date("d/F/Y",strtotime($row['tgl_pinjam'])).'</td>';
				echo '<td>'.date("d/F/Y",strtotime($row['batas_pinjam'])).'</td>';
				echo '<td width="70px">'.$row['jml_pinjam'].'</td>';
				echo '<td>'.date("d/F/Y",strtotime($row['tgl_kembali'])).'</td>';
				if ($row['denda'] == 1) {echo '<td>'.'-'.'</td>';}else{echo '<td> Rp.'.number_format($row['denda']).'</td>';}
				echo '</tr>';
			} ?>
	</tbody>
</table>
</div>
	</div>
</body>
</html>