<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	public function flogin(){
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$cek = $this->user_model->prosesLogin($username, $password);
		$log = count($cek);
		if ($log > 0){
			redirect('user/index');
		}else{
			$this->session->set_flashdata('er','username atau password anda salah!');
			redirect('user/flogin');
		}
	}

	public function __construct(){
		parent::__construct();

		$this->load->model('PengajarModel'); // Load PengajarModel ke controller ini
	}

	public function index(){
		$data['pengajar'] = $this->PengajarModel->view();
		$this->load->view('pengajar/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengajarModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengajarModel->save(); // Panggil fungsi save() yang ada di PengajarModel.php
				redirect('pengajar');
			}
		}

		$this->load->view('pengajar/form_tambah');
	}

	public function ubah($KdPengajar){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengajarModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengajarModel->edit($KdPengajar); // Panggil fungsi edit() yang ada di PengajarModel.php
				redirect('pengajar');
			}
		}

		$data['pengajar'] = $this->PengajarModel->view_by($KdPengajar);
		$this->load->view('pengajar/form_ubah', $data);
	}

	public function hapus($KdPengajar){
		$this->PengajarModel->delete($KdPengajar); // Panggil fungsi delete() yang ada di PengajarModel.php
		redirect('pengajar');
	}
}
