<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormUbah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Ubah Data Paket Bimbel</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("paketbimbel/ubah/". $paketbimbel->KdPaket); ?>
			<table cellpadding="8">
				<tr>
					<td>Kode Paket</td>
					<td><input size="4" type="text" name="input_KdPaket" placeholder="Harus diawali PK dan diikuti 2 angka dibelakangnya" value="<?php echo set_value('input_KdPaket', $paketbimbel->KdPaket); ?>"></td>
				</tr>
				<tr>
					<td>Nama Paket</td>
					<td><input type="text" placeholder="Berisi Nama Paket" name="input_NamaPaket" value="<?php echo set_value('input_NamaPaket', $paketbimbel->NamaPaket); ?>"></td>
				</tr>
				<tr>
					<td>Kapasitas Kelas</td>
					<td><input type="text" name="input_KapasitasKelas" placeholder="Berisi Kapasitas Kelas" value="<?php echo set_value('input_KapasitasKelas', $paketbimbel->KapasitasKelas); ?>"></td>
				</tr><tr>
					<td>Jenis Siswa</td>
					<td><input type="text" name="input_JenisSiswa" placeholder="Berisi Jenis Siswa" value="<?php echo set_value('input_JenisSiswa', $paketbimbel->JenisSiswa); ?>"></td>
				</tr><tr>
					<td>Harga Awal</td>
					<td><input type="text" name="input_HargaAwal" placeholder="Berisi Harga Awal" value="<?php echo set_value('input_HargaAwal', $paketbimbel->HargaAwal); ?>"></td>
				</tr><tr>
					<td>Harga dengan Angsuran 5x</td>
					<td><input type="text" name="input_Angsuran5x" placeholder="Berisi Harga dengan Angsuran 5x" value="<?php echo set_value('input_Angsuran5x', $paketbimbel->Angsuran5x); ?>"></td>
				</tr><tr>
					<td>Harga Tunai setelah Diskon</td>
					<td><input type="text" name="input_TunaiDiskon" placeholder="Berisi Harga Tunai setelah Diskon" value="<?php echo set_value('input_TunaiDiskon', $paketbimbel->TunaiDiskon); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
