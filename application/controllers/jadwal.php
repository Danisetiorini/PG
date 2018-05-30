<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('JadwalModel'); // Load JadwalModel ke controller ini
	}

	public function index(){
		$data['jadwal'] = $this->JadwalModel->view();
		$this->load->view('jadwal/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->JadwalModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->JadwalModel->save(); // Panggil fungsi save() yang ada di JadwalModel.php
				redirect('jadwal');
			}
		}

		$this->load->view('jadwal/form_tambah');
	}

	public function ubah($KdJadwal){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->JadwalModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->JadwalModel->edit($KdJadwal); // Panggil fungsi edit() yang ada di JadwalModel.php
				redirect('jadwal');
			}
		}

		$data['jadwal'] = $this->JadwalModel->view_by($KdJadwal);
		$this->load->view('jadwal/form_ubah', $data);
	}

	public function hapus($KdJadwal){
		$this->JadwalModel->delete($KdJadwal); // Panggil fungsi delete() yang ada di JadwalModel.php
		redirect('jadwal');
	}
}
