<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<link href="<?php echo base_url('library/css/FormUbah.css')?>" rel="stylesheet">
	</head>
	<body>
		<h1>Form Ubah Data Jadwal</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("jadwal/ubah/".$jadwal->KdJadwal); ?>
			<table cellpadding="8">
				<tr>
					<td>Kode Jadwal</td>
					<td><input size="8" type="text" name="input_KdJadwal" placeholder="Harus diawali J, diikuti waktu kelas, tingkatan kelas yang ditempuh" value="<?php echo set_value('input_KdJadwal', $jadwal->KdJadwal); ?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="input_Kelas" placeholder="Berisi Kelas Primagama" value="<?php echo set_value('input_Kelas', $jadwal->Kelas); ?>"></td>
				</tr>
				<tr>
					<td>Kode Bidang Studi</td>
					<td><input size="5" type="text" name="input_KdBidangStudi" placeholder="Berisi Kode Bidang Studi" value="<?php echo set_value('input_KdBidangStudi', $jadwal->KdBidangStudi); ?>"></td>
				</tr>
				<tr>
					<td>Kode Pengajar</td>
					<td><input size="5" type="text" name="input_KdPengajar" placeholder="Berisi Kode Pengajar" value="<?php echo set_value('input_KdPengajar', $jadwal->KdPengajar); ?>"></td>
				</tr>
				<tr>
					<td>Hari</td>
					<td><input type="text" name="input_Hari" placeholder="Berisi Jadwal Hari" value="<?php echo set_value('input_Hari', $jadwal->Hari); ?>"></td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td><input type="text" name="input_Pukul" placeholder="Berisi Waktu Kursus Primagama" value="<?php echo set_value('input_Pukul', $jadwal->Pukul); ?>"></td>
				</tr>
				<tr>
					<td>Ruangan</td>
					<td><input type="text" name="input_Ruangan" placeholder="Berisi Nama Ruangan" value="<?php echo set_value('input_Ruangan', $jadwal->Ruangan); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
