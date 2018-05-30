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
		<h1>Data Jadwal</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("jadwal/tambah"); ?>'>Tambah Data</a>
		<br><br>
		<div class="ex2">
				<table class="table table-hover" border="0" cellpadding="4">
					<tr>
						<th>Kode Jadwal</th>
						<th>Kelas</th>
						<th>Kode Bidang Studi</th>
						<th>Kode Pengajar</th>
		        <th>Hari</th>
		        <th>Pukul</th>
		        <th>Ruangan</th>
						<th colspan="2">Aksi</th>
					</tr>

					<?php
					if( ! empty($jadwal)){ // Jika data jadwal tidak sama dengan kosong, artinya jika data jadwal ada
						foreach($jadwal as $data){
							echo "<tr>
							<td>".$data->KdJadwal."</td>
							<td>".$data->Kelas."</td>
							<td>".$data->KdBidangStudi."</td>
							<td>".$data->KdPengajar."</td>
							<td>".$data->Hari."</td>
							<td>".$data->Pukul."</td>
							<td>".$data->Ruangan."</td>
							<td><a class='btn_ubah'  href='".base_url("jadwal/ubah/".$data->KdJadwal)."'>Ubah</a></td>
							<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("jadwal/hapus/".$data->KdJadwal)."'>Hapus</a></td>
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
