<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JadwalModel extends CI_Model {
	// Fungsi untuk menampilkan semua data jadwal
	public function view(){
		return $this->db->get('jadwal')->result();
	}

	// Fungsi untuk menampilkan data jadwal berdasarkan Nomor Induknya
	public function view_by($KdJadwal){
		$this->db->where('KdJadwal', $KdJadwal);
		return $this->db->get('jadwal')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, Nomor Induk tidak harus divalidasi
		// Jadi Nomor Induk di validasi hanya ketika menambah data jadwal saja
		if($mode == "save")
			$this->form_validation->set_rules('input_KdJadwal', 'KdJadwal', 'required');
			$this->form_validation->set_rules('input_Kelas', 'Kelas', 'required');
			$this->form_validation->set_rules('input_KdBidangStudi', 'KdBidangStudi', 'required');
			$this->form_validation->set_rules('input_KdPengajar', 'KdPengajar', 'required');
			$this->form_validation->set_rules('input_Hari', 'Hari', 'required');
			$this->form_validation->set_rules('input_Pukul', 'Pukul', 'required');
			$this->form_validation->set_rules('input_Ruangan', 'Ruangan', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel jadwal
	public function save(){
		$data = array(
			"KdJadwal" => $this->input->post('input_KdJadwal'),
			"Kelas" => $this->input->post('input_Kelas'),
			"KdBidangStudi" => $this->input->post('input_KdBidangStudi'),
			"KdPengajar" => $this->input->post('input_KdPengajar'),
			"Hari" => $this->input->post('input_Hari'),
			"Pukul" => $this->input->post('input_Pukul'),
			"Ruangan" => $this->input->post('input_Ruangan'),
		);

		$this->db->insert('jadwal', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data jadwal berdasarkan Nomor Induknya
	public function edit($KdJadwal){
		$data = array(
			"KdJadwal" => $this->input->post('input_KdJadwal'),
			"Kelas" => $this->input->post('input_Kelas'),
			"KdBidangStudi" => $this->input->post('input_KdBidangStudi'),
			"KdPengajar" => $this->input->post('input_KdPengajar'),
			"Hari" => $this->input->post('input_Hari'),
			"Pukul" => $this->input->post('input_Pukul'),
			"Ruangan" => $this->input->post('input_Ruangan'),
		);

		$this->db->where('KdJadwal', $KdJadwal);
		$this->db->update('jadwal', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data jadwal berdasarkan berdasarkan Nomor Induknya
	public function delete($KdJadwal){
		$this->db->where('KdJadwal', $KdJadwal);
		$this->db->delete('jadwal'); // Untuk mengeksekusi perintah delete data
	}

}
