<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormTambah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Tambah Data Pengajar</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("pengajar/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>Kode Pengajar</td>
				<td><input size="5" type="text" placeholder="Harus diawali PG dan diikuti 3 angka dibelakangnya" name="input_KdPengajar" value="<?php echo set_value('input_KdPengajar'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Pengajar</td>
				<td><input type="text" placeholder="Berisi Nama Pengajar" name="input_NamaPengajar" value="<?php echo set_value('input_NamaPengajar'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Bidang Studi</td>
				<td><input type="text" placeholder="Berisi Kode Bidang Studi" name="input_KdBidangStudi" value="<?php echo set_value('input_KdBidangStudi'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Grade SD</td>
				<td><input size="2" placeholder="Berisi Kode Grade SD" name="input_KdGradeSD" value="<?php echo set_value('input_KdGradeSD'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Grade SMP</td>
				<td><input size="2" placeholder="Berisi Kode Grade SMP" name="input_KdGradeSMP" value="<?php echo set_value('input_KdGradeSMP'); ?>"></td>
			</tr>
			<tr>
				<td>Kode Grade SMA</td>
				<td><input size="2" placeholder="Berisi Kode Grade SMA" name="input_KdGradeSMA" value="<?php echo set_value('input_KdGradeSMA'); ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" placeholder="Berisi No Telepon Pengajar" name="input_NoTelepon"><?php echo set_value('input_NoTelepon'); ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" placeholder="Berisi Alamat Pengajar" name="input_Alamat"><?php echo set_value('input_Alamat'); ?></td>
			</tr><tr>
				<td>Pendidikan</td>
				<td><input type="text" placeholder="Berisi Pendidikan Pengajar" name="input_Pendidikan"><?php echo set_value('input_Pendidikan'); ?></td>
			</tr><tr>
				<td>Gaji Total</td>
				<td><input type="text" placeholder="Berisi Gaji Total Pengajar" name="input_GajiTotal"><?php echo set_value('input_GajiTotal'); ?></td>
			</tr>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
