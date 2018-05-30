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
		<h1>Data Siswa</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a>
		<br><br>
		<div class="ex2">
				<table class="table table-hover" border="0" cellpadding="4">
					<tr>
						<th>No Induk</th>
						<th>Kode Jadwal</th>
						<th>Kode Paket</th>
						<th>Tanggal Daftar</th>
						<th>Status Pembayaran</th>
		        <th>Nama Siswa</th>
		        <th>Asal Sekolah</th>
		        <th>No Telepon</th>
		        <th>Tahun Ajaran</th>
						<th colspan="2">Aksi</th>
					</tr>

					<?php
					if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
						foreach($siswa as $data){
							echo "<tr>
							<td>".$data->NoInduk."</td>
							<td>".$data->KdJadwal."</td>
							<td>".$data->KdPaket."</td>
							<td>".$data->TglDaftar."</td>
							<td>".$data->StatusPembayaran."</td>
							<td>".$data->NamaSiswa."</td>
		          <td>".$data->AsalSekolah."</td>
		          <td>".$data->NoTelepon."</td>
		          <td>".$data->TahunAjaran."</td>
							<td><a class='btn_ubah'  href='".base_url("siswa/ubah/".$data->NoInduk)."'>Ubah</a></td>
							<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("siswa/hapus/".$data->NoInduk)."'>Hapus</a></td>
							</tr>";
						}
					}else{ // Jika data siswa kosong
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
