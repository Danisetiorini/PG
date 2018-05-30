<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PaketBimbelModel extends CI_Model {
	// Fungsi untuk menampilkan semua data paketbimbel
	public function view(){
		return $this->db->get('paketbimbel')->result();
	}

	// Fungsi untuk menampilkan data paketbimbel berdasarkan Nomor Induknya
	public function view_by($KdPaket){
		$this->db->where('KdPaket', $KdPaket);
		return $this->db->get('paketbimbel')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, Nomor Induk tidak harus divalidasi
		// Jadi Nomor Induk di validasi hanya ketika menambah data paketbimbel saja
		if($mode == "save")
			$this->form_validation->set_rules('input_KdPaket', 'KdPaket', 'required');
			$this->form_validation->set_rules('input_NamaPaket', 'NamaPaket', 'required');
			$this->form_validation->set_rules('input_KapasitasKelas', 'KapasitasKelas', 'required');
			$this->form_validation->set_rules('input_JenisSiswa', 'JenisSiswa', 'required');
			$this->form_validation->set_rules('input_HargaAwal', 'HargaAwal', 'required');
			$this->form_validation->set_rules('input_Angsuran5x', 'Angsuran5x', 'required');
			$this->form_validation->set_rules('input_TunaiDiskon', 'TunaiDiskon', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel paketbimbel
	public function save(){
		$data = array(
			"KdPaket" => $this->input->post('input_KdPaket'),
			"NamaPaket" => $this->input->post('input_NamaPaket'),
			"KapasitasKelas" => $this->input->post('input_KapasitasKelas'),
			"JenisSiswa" => $this->input->post('input_JenisSiswa'),
			"HargaAwal" => $this->input->post('input_HargaAwal'),
			"Angsuran5x" => $this->input->post('input_Angsuran5x'),
			"TunaiDiskon" => $this->input->post('input_TunaiDiskon'),
		);

		$this->db->insert('paketbimbel', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data paketbimbel berdasarkan Nomor Induknya
	public function edit($KdPaket){
		$data = array(
			"KdPaket" => $this->input->post('input_KdPaket'),
			"NamaPaket" => $this->input->post('input_NamaPaket'),
			"KapasitasKelas" => $this->input->post('input_KapasitasKelas'),
			"JenisSiswa" => $this->input->post('input_JenisSiswa'),
			"HargaAwal" => $this->input->post('input_HargaAwal'),
			"Angsuran5x" => $this->input->post('input_Angsuran5x'),
			"TunaiDiskon" => $this->input->post('input_TunaiDiskon'),
		);

		$this->db->where('KdPaket', $KdPaket);
		$this->db->update('paketbimbel', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data paketbimbel berdasarkan berdasarkan Nomor Induknya
	public function delete($KdPaket){
		$this->db->where('KdPaket', $KdPaket);
		$this->db->delete('paketbimbel'); // Untuk mengeksekusi perintah delete data
	}

}
