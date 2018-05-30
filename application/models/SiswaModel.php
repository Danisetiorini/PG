<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('siswa')->result();
	}

	// Fungsi untuk menampilkan data siswa berdasarkan Nomor Induknya
	public function view_by($NoInduk){
		$this->db->where('NoInduk', $NoInduk);
		return $this->db->get('siswa')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, Nomor Induk tidak harus divalidasi
		// Jadi Nomor Induk di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
			$this->form_validation->set_rules('input_NoInduk', 'NoInduk', 'required');
			$this->form_validation->set_rules('input_KdJadwal', 'KdJadwal', 'required');
			$this->form_validation->set_rules('input_KdPaket', 'KdPaket', 'required');
			$this->form_validation->set_rules('input_TglDaftar', 'TglDaftar', 'required');
			$this->form_validation->set_rules('input_StatusPembayaran', 'StatusPembayaran', 'required');
			$this->form_validation->set_rules('input_NamaSiswa', 'NamaSiswa', 'required');
			$this->form_validation->set_rules('input_AsalSekolah', 'AsalSekolah', 'required');
			$this->form_validation->set_rules('input_NoTelepon', 'NoTelepon', 'required');
			$this->form_validation->set_rules('input_TahunAjaran', 'TahunAjaran', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"NoInduk" => $this->input->post('input_NoInduk'),
			"KdJadwal" => $this->input->post('input_KdJadwal'),
			"KdPaket" => $this->input->post('input_KdPaket'),
			"TglDaftar" => $this->input->post('input_TglDaftar'),
			"StatusPembayaran" => $this->input->post('input_StatusPembayaran'),
			"NamaSiswa" => $this->input->post('input_NamaSiswa'),
			"AsalSekolah" => $this->input->post('input_AsalSekolah'),
			"NoTelepon" => $this->input->post('input_NoTelepon'),
			"TahunAjaran" => $this->input->post('input_TahunAjaran')
		);

		$this->db->insert('siswa', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan Nomor Induknya
	public function edit($NoInduk){
		$data = array(
			"NoInduk" => $this->input->post('input_NoInduk'),
			"KdJadwal" => $this->input->post('input_KdJadwal'),
			"KdPaket" => $this->input->post('input_KdPaket'),
			"TglDaftar" => $this->input->post('input_TglDaftar'),
			"StatusPembayaran" => $this->input->post('input_StatusPembayaran'),
			"NamaSiswa" => $this->input->post('input_NamaSiswa'),
			"AsalSekolah" => $this->input->post('input_AsalSekolah'),
			"NoTelepon" => $this->input->post('input_NoTelepon'),
			"TahunAjaran" => $this->input->post('input_TahunAjaran')
		);

		$this->db->where('NoInduk', $NoInduk);
		$this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan berdasarkan Nomor Induknya
	public function delete($NoInduk){
		$this->db->where('NoInduk', $NoInduk);
		$this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
	}

}
