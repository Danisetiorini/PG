<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormUbah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Ubah Data Pengajar</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("pengajar/ubah/".$pengajar->KdPengajar); ?>
			<table cellpadding="8">
				<tr>
					<td>Kode Pengajar</td>
					<td><input size="5" type="text" name="input_KdPengajar" placeholder="Harus diawali PG dan diikuti 3 angka dibelakangnya"><?php echo set_value('input_KdPengajar', $pengajar->KdPengajar); ?>"></td>
				</tr>
				<tr>
					<td>Nama Pengajar</td>
					<td><input type="text" name="input_NamaPengajar" placeholder="Berisi Nama Pengajar"><?php echo set_value('input_NamaPengajar', $pengajar->NamaPengajar); ?>"></td>
				</tr>
				<tr>
					<td>Kode Bidang Studi</td>
					<td><input type="text" name="input_KdBidangStudi" placeholder="Berisi Kode Bidang Studi" ><?php echo set_value('input_KdBidangStudi', $pengajar->KdBidangStudi); ?>"></td>
				</tr>
				<tr>
					<td>Kode Grade SD</td>
					<td><input size="2" name="input_KdGradeSD" placeholder="Berisi Kode Grade SD"><?php echo set_value('input_KdGradeSD', $pengajar->KdGradeSD); ?>"></td>
				</tr>
				<tr>
					<td>Kode Grade SMP</td>
					<td><input size="2" name="input_KdGradeSMP" placeholder="Berisi Kode Grade SMP"><?php echo set_value('input_KdGradeSMP', $pengajar->KdGradeSMP); ?>"></td>
				</tr>
				<tr>
					<td>Kode Grade SMA</td>
					<td><input size="2" name="input_KdGradeSMA" placeholder="Berisi Kode Grade SMA"><?php echo set_value('input_KdGradeSMA', $pengajar->KdGradeSMA); ?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="input_NoTelepon" placeholder="Berisi No Telepon Pengajar" ><?php echo set_value('input_NoTelepon', $pengajar->NoTelepon); ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="input_Alamat" placeholder="Berisi Alamat Pengajar"><?php echo set_value('input_Alamat', $pengajar->Alamat); ?></td>
				</tr>
				<tr>
					<td>Pendidikan</td>
					<td><input type="text" name="input_Pendidikan" placeholder="Berisi Pendidikan Pengajar" ><?php echo set_value('input_Pendidikan', $pengajar->Pendidikan); ?></td>
				</tr>
				<tr>
					<td>Gaji Total</td>
					<td><input type="text" name="input_GajiTotal" placeholder="Berisi Gaji Total Pengajar" ><?php echo set_value('input_GajiTotal', $pengajar->GajiTotal); ?></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
