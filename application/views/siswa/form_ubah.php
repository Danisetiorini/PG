<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormUbah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Ubah Data Siswa</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("siswa/ubah/".$siswa->NoInduk); ?>
			<table cellpadding="8">
				<tr>
					<td>Nomor Induk Siswa</td>
					<td><input size="6" type="text" name="input_NoInduk" placeholder="Harus diawali SW dan diikuti 4 angka dibelakangnya" value="<?php echo set_value('input_NoInduk', $siswa->NoInduk); ?>"></td>
				</tr>
				<tr>
					<td>Kode Jadwal</td>
					<td><input size="8" type="text" name="input_KdJadwal" placeholder="Harus diawali J, diikuti waktu kelas, tingkatan kelas yang ditempuh" value="<?php echo set_value('input_KdJadwal', $siswa->KdJadwal); ?>"></td>
				</tr>
				<tr>
					<td>Kode Paket</td>
					<td><input size="4" type="text" name="input_KdPaket" placeholder="Harus diawali PK dan diikuti 2 angka dibelakangnya" value="<?php echo set_value('input_KdPaket', $siswa->KdPaket); ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Daftar</td>
					<td><input type="date" name="input_TglDaftar" placeholder="Berisi tanggal daftar siswa" value="<?php echo set_value('input_TglDaftar', $siswa->TglDaftar); ?>"></td>
				</tr>
				<tr>
					<td>Status Pembayaran</td>
					<td><input type="text" name="input_StatusPembayaran" placeholder="Berisi status pembayaran siswa apakah lunas atau belum lunas" value="<?php echo set_value('input_StatusPembayaran',  $siswa->StatusPembayaran); ?>"></td>
				</tr>
				<tr>
					<td>Nama Siswa</td>
					<td><input type="text" name="input_NamaSiswa" placeholder="Berisi nama siswa" value="<?php echo set_value('input_NamaSiswa', $siswa->NamaSiswa); ?>"></td>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td><input type="text" name="input_AsalSekolah" placeholder="Berisi asal sekolah siswa" value="<?php echo set_value('input_AsalSekolah', $siswa->AsalSekolah); ?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="input_NoTelepon" placeholder="Berisi nomor telepon siswa" value="<?php echo set_value('input_NoTelepon', $siswa->AsalSekolah); ?>"></td>
				</tr>
				<tr>
					<td>Tahun Ajaran</td>
					<td><input type="text" name="input_TahunAjaran" placeholder="Berisi tahun ajaran siswa" value="<?php echo set_value('input_TahunAjaran', $siswa->TahunAjaran); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
