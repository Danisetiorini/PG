<?php

class Login extends CI_Controller{

	public function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login($username,$password);
        $log= count ($cek);
		if($log > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect("login/home");

		}else{
			$this->session->set_flashdata("Username dan password salah !");
            redirect('login/index');

		}
	}

    function home(){
        $this->load->view('home');
    }

	function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
