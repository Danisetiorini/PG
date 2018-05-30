<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormTambah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Tambah Data Jadwal</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("jadwal/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>Kode Jadwal</td>
				<td><input size="8" type="text" placeholder="Harus diawali J, diikuti waktu kelas, tingkatan kelas yang ditempuh" name="input_KdJadwal" value="<?php echo set_value('input_KdJadwal'); ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" placeholder="Berisi Kelas Primagama" name="input_Kelas" value="<?php echo set_value('input_Kelas'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Bidang Studi</td>
				<td><input size="5" type="text" placeholder="Berisi Kode Bidang Studi" name="input_KdBidangStudi" value="<?php echo set_value('input_KdBidangStudi'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Pengajar</td>
				<td><input size="5" type="text" placeholder="Berisi Kode Pengajar" name="input_KdPengajar" value="<?php echo set_value('input_KdPengajar'); ?>"></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td><input type="text" placeholder="Berisi Jadwal Hari" name="input_Hari" value="<?php echo set_value('input_Hari'); ?>"></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" placeholder="Berisi Waktu Kursus Primagama" name="input_Pukul" value="<?php echo set_value('input_Pukul'); ?>"></td>
			</tr>
			<tr>
				<td>Ruangan</td>
				<td><input type="text" placeholder="Berisi Nama Ruangan" name="input_Ruangan" value="<?php echo set_value('input_Ruangan'); ?>"></td>
			</tr>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
