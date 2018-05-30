<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengajarModel extends CI_Model {
	// Fungsi untuk menampilkan semua data pengajar
	public function view(){
		return $this->db->get('pengajar')->result();
	}

	// Fungsi untuk menampilkan data pengajar berdasarkan Nomor Induknya
	public function view_by($KdPengajar){
		$this->db->where('KdPengajar', $KdPengajar);
		return $this->db->get('pengajar')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, Nomor Induk tidak harus divalidasi
		// Jadi Nomor Induk di validasi hanya ketika menambah data pengajar saja
		if($mode == "save")
			$this->form_validation->set_rules('input_KdPengajar', 'KdPengajar', 'required');
			$this->form_validation->set_rules('input_NamaPengajar', 'NamaPengajar', 'required');
			$this->form_validation->set_rules('input_KdBidangStudi', 'KdBidangStudi', 'required');
			$this->form_validation->set_rules('input_KdGradeSD', 'KdGradeSD', 'required');
			$this->form_validation->set_rules('input_KdGradeSMP', 'KdGradeSMP', 'required');
			$this->form_validation->set_rules('input_KdGradeSMA', 'KdGradeSMA', 'required');
			$this->form_validation->set_rules('input_NoTelepon', 'NoTelepon', 'required');
			$this->form_validation->set_rules('input_Alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('input_Pendidikan', 'Pendidikan', 'required');
			$this->form_validation->set_rules('input_GajiTotal', 'GajiTotal', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel pengajar
	public function save(){
		$data = array(
			"KdPengajar" => $this->input->post('input_KdPengajar'),
			"NamaPengajar" => $this->input->post('input_NamaPengajar'),
			"KdBidangStudi" => $this->input->post('input_KdBidangStudi'),
			"KdGradeSD" => $this->input->post('input_KdGradeSD'),
			"KdGradeSMP" => $this->input->post('input_KdGradeSMP'),
			"KdGradeSMA" => $this->input->post('input_KdGradeSMA'),
			"NoTelepon" => $this->input->post('input_NoTelepon'),
			"Alamat" => $this->input->post('input_Alamat'),
			"Pendidikan" => $this->input->post('input_Pendidikan'),
			"GajiTotal" => $this->input->post('input_GajiTotal'),
		);

		$this->db->insert('pengajar', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data pengajar berdasarkan Nomor Induknya
	public function edit($KdPengajar){
		$data = array(
			"KdPengajar" => $this->input->post('input_KdPengajar'),
			"NamaPengajar" => $this->input->post('input_NamaPengajar'),
			"KdBidangStudi" => $this->input->post('input_KdBidangStudi'),
			"KdGradeSD" => $this->input->post('input_KdGradeSD'),
			"KdGradeSMP" => $this->input->post('input_KdGradeSMP'),
			"KdGradeSMA" => $this->input->post('input_KdGradeSMA'),
			"NoTelepon" => $this->input->post('input_NoTelepon'),
			"Alamat" => $this->input->post('input_Alamat'),
			"Pendidikan" => $this->input->post('input_Pendidikan'),
			"GajiTotal" => $this->input->post('input_GajiTotal'),
		);

		$this->db->where('KdPengajar', $KdPengajar);
		$this->db->update('pengajar', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data pengajar berdasarkan berdasarkan Nomor Induknya
	public function delete($KdPengajar){
		$this->db->where('KdPengajar', $KdPengajar);
		$this->db->delete('pengajar'); // Untuk mengeksekusi perintah delete data
	}

	public function prosesLogin ($username, $password){
			$this->db->where('Username',$username);
			$this->db->where('Password',$password);
			return $this->db->get('pengajar')->row();
	}
}
