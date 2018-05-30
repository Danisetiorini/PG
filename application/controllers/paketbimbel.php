<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PaketBimbel extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PaketBimbelModel'); // Load PaketBimbelModel ke controller ini
	}

	public function index(){
		$data['paketbimbel'] = $this->PaketBimbelModel->view();
		$this->load->view('paketbimbel/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PaketBimbelModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PaketBimbelModel->save(); // Panggil fungsi save() yang ada di PaketBimbelModel.php
				redirect('paketbimbel');
			}
		}

		$this->load->view('paketbimbel/form_tambah');
	}

	public function ubah($KdPaket){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PaketBimbelModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PaketBimbelModel->edit($KdPaket); // Panggil fungsi edit() yang ada di PaketBimbelModel.php
				redirect('paketbimbel');
			}
		}

		$data['paketbimbel'] = $this->PaketBimbelModel->view_by($KdPaket);
		$this->load->view('paketbimbel/form_ubah', $data);
	}

	public function hapus($KdPaket){
		$this->PaketBimbelModel->delete($KdPaket); // Panggil fungsi delete() yang ada di PaketBimbelModel.php
		redirect('paketbimbel');
	}
}
