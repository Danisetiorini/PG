<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormTambah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Tambah Data Paket Bimbel</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("paketbimbel/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>Kode Paket</td>
				<td><input size="4" type="text" placeholder="Harus diawali PK dan diikuti 2 angka dibelakangnya" name="input_KdPaket" value="<?php echo set_value('input_KdPaket'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Paket</td>
				<td><input type="text" placeholder="Berisi Nama Paket" name="input_NamaPaket" value="<?php echo set_value('input_NamaPaket'); ?>"></td>
			</tr>
			<tr>
				<td>Kapasitas Kelas</td>
				<td><input type="text" placeholder="Berisi Kapasitas Kelas" name="input_KapasitasKelas" value="<?php echo set_value('input_KapasitasKelas'); ?>"></td>
			</tr><tr>
				<td>Jenis Siswa</td>
				<td><input type="text" placeholder="Berisi Jenis Siswa" name="input_JenisSiswa" value="<?php echo set_value('input_JenisSiswa'); ?>"></td>
			</tr><tr>
				<td>Harga Awal</td>
				<td><input type="text" placeholder="Berisi Harga Awal" name="input_HargaAwal" value="<?php echo set_value('input_HargaAwal'); ?>"></td>
			</tr><tr>
				<td>Harga dengan Angsuran 5x</td>
				<td><input type="text" placeholder="Berisi Harga dengan Angsuran 5x" name="input_Angsuran5x" value="<?php echo set_value('input_Angsuran5x'); ?>"></td>
			</tr><tr>
				<td>Harga Tunai setelah Diskon</td>
				<td><input type="text" placeholder="Berisi Harga Tunai setelah Diskon" name="input_TunaiDiskon" value="<?php echo set_value('input_TunaiDiskon'); ?>"></td>
			</tr>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
