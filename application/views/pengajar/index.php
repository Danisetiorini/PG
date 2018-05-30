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
		<h1>Data Pengajar</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pengajar/tambah"); ?>'>Tambah Data</a>
		<br><br>
		<div class="ex2">
				<table class="table table-hover" border="0" cellpadding="4">
					<tr>
						<th>Kode Pengajar</th>
						<th>Nama Pengajar</th>
						<th>Kode Bidang Studi</th>
						<th>Kode Grade SD</th>
						<th>Kode Grade SMP</th>
						<th>Kode Grade SMA</th>
		        <th>No Telepon</th>
		        <th>Alamat</th>
		        <th>Pendidikan</th>
		        <th>Gaji Total</th>
						<th colspan="2">Aksi</th>
					</tr>

					<?php
					if( ! empty($pengajar)){ // Jika data pengajar tidak sama dengan kosong, artinya jika data pengajar ada
						foreach($pengajar as $data){
							echo "<tr>
							<td>".$data->KdPengajar."</td>
							<td>".$data->NamaPengajar."</td>
							<td>".$data->KdBidangStudi."</td>
							<td>".$data->KdGradeSD."</td>
							<td>".$data->KdGradeSMP."</td>
							<td>".$data->KdGradeSMA."</td>
		          <td>".$data->NoTelepon."</td>
		          <td>".$data->Alamat."</td>
		          <td>".$data->Pendidikan."</td>
		          <td>".$data->GajiTotal."</td>
							<td><a class='btn_ubah'  href='".base_url("pengajar/ubah/".$data->KdPengajar)."'>Ubah</a></td>
							<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("pengajar/hapus/".$data->KdPengajar)."'>Hapus</a></td>
							</tr>";
						}
					}else{ // Jika data pengajar kosong
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
