<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct(){ //tetap menjalankan fungsion, walaupun fungsion lain dijalankan
		parent:: __construct();
	}
  public function simpan(){
    $data = array(
        'username' => $this->input->post('username'),
        'nama' => $this->input->post('nama'),
        'password' => md5($this->input->post('password')),
        'level' => $this->input->post('level')
    );
    $this->db->insert('user', $data); //untuk menyimpan isian $data ke database user
    $this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Ditambahkan ꒰ᵕ༚ᵕ⑅꒱
			<button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
  }

   
}