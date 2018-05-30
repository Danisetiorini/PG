<html>
	<head>
		<title>CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/index.css')?>" rel="stylesheet">
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h1>Data Paket Bimbel</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("paketbimbel/tambah"); ?>'>Tambah Data</a>
		<br><br>
		<div class="ex2">
				<table class="table table-hover" border="0" cellpadding="4">
					<tr>
						<th>Kode Paket</th>
						<th>Nama Paket</th>
						<th>Kapasitas Kelas</th>
						<th>Jenis Siswa</th>
		        <th>Harga Awal</th>
		        <th>Harga dengan Angsuran 5x</th>
		        <th>Harga Tunai setelah Diskon</th>
						<th colspan="2">Aksi</th>
					</tr>

					<?php
					if( ! empty($paketbimbel)){ // Jika data jadwal tidak sama dengan kosong, artinya jika data jadwal ada
						foreach($paketbimbel as $data){
							echo "<tr>
							<td>".$data->KdPaket."</td>
							<td>".$data->NamaPaket."</td>
							<td>".$data->KapasitasKelas."</td>
							<td>".$data->JenisSiswa."</td>
							<td>".$data->HargaAwal."</td>
							<td>".$data->Angsuran5x."</td>
							<td>".$data->TunaiDiskon."</td>
							<td><a class='btn_ubah'  href='".base_url("paketbimbel/ubah/".$data->KdPaket)."'>Ubah</a></td>
							<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("paketbimbel/hapus/".$data->KdPaket)."'>Hapus</a></td>
							</tr>";
						}
					}else{ // Jika data jadwal kosong
						echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
					}
					?>

					<!-- Konfirmasi delete -->
					<script>
					function doconfirm(){
						job=confirm("Apakah anda yakin ingin menghapus data ini?");
						if(job!=true){
							return false;
						}
					}
					</script>
				</table>
			</div>
	</body>
</html>
