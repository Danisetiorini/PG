<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormTambah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Tambah Data Siswa</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("siswa/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>Nomor Induk</td>
				<td><input size="6" type="text" placeholder="Harus diawali SW dan diikuti 4 angka dibelakangnya" name="input_NoInduk" value="<?php echo set_value('input_NoInduk'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Jadwal</td>
				<td><input size="8" type="text" placeholder="Harus diawali J, diikuti waktu kelas, tingkatan kelas yang ditempuh" name="input_KdJadwal" value="<?php echo set_value('input_KdJadwal'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Paket</td>
				<td><input size="4" type="text" placeholder="Harus diawali PK dan diikuti 2 angka dibelakangnya" name="input_KdPaket" value="<?php echo set_value('input_KdPaket'); ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Pendaftaran</td>
				<td><input type="date" placeholder="Berisi tanggal daftar siswa" name="input_TglDaftar" value="<?php echo set_value('input_TglDaftar'); ?>"></td>
			</tr>
			<tr>
				<td>Status Pembayaran</td>
				<td><input type="text" placeholder="Berisi status pembayaran siswa apakah lunas atau belum lunas" name="input_StatusPembayaran" value="<?php echo set_value('input_StatusPembayaran'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" placeholder="Berisi nama siswa" name="input_NamaSiswa" value="<?php echo set_value('input_NamaSiswa'); ?>"></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td><input type="text" placeholder="Berisi asal sekolah siswa" name="input_AsalSekolah" value="<?php echo set_value('input_AsalSekolah'); ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" placeholder="Berisi nomor telepon siswa" name="input_NoTelepon"><?php echo set_value('input_NoTelepon'); ?></td>
			</tr>
			<tr>
				<td>Tahun Ajaran</td>
				<td><input type="text" placeholder="Berisi tahun ajaran siswa" name="input_TahunAjaran"><?php echo set_value('input_TahunAjaran'); ?></td>
			</tr>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
