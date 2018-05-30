<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

     public function cek_login ($username, $password){
        $this->db->where('Username',$username);
        $this->db->where('Password',$password);
        return $this->db->get("admin")->row();
    }
}
