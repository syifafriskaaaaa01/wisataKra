<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $username = $this->input->post('username'); //database
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row(); //sedikit data

        if ($cek == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i> Tidak ada kecocokan username dan password !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
            ');
            redirect('auth');
        } else if ($password == $cek->password) { //password->database 
            $data = array(
                'id_user' => $cek->id_user,
                //databasse
                'username' => $cek->username,
                'level' => $cek->level,
                'nama' => $cek->nama,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i> Kesalahan Password  !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('auth');

        } //apabila sudah berhasil dan ada kecocokan antara usr dan password maka akan menjalankan session

    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');

    }

}