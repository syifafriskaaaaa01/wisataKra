<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); //memanggil fungsion pada usermodel
        if ($this->session->userdata('level') <> 'Admin') {
            redirect('auth');
        }
        //session dibuat setelah login, mengecek apakah sudah login
    }
    public function index()
    {
        $this->db->from('user'); //tabel
        $this->db->order_by('username', 'ASC');
        $user = $this->db->get()->result_array(); //menampung table user
        $data = array(
            'users' => $user,
            'judul' => "Pengguna"

        );
        $this->template->load('layout/template', 'admin/input_lihat', $data);
    }

    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cek = $this->db->get()->result_array(); //jika cek bernilai  null atau kosong boleh menginputkan atau menjalankan perintah dibawahnya,tapi jika berisi tidak boleh
        if ($cek <> NULL) {
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i> username Konten Telah Di Gunakan !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
            redirect('admin/auth');
        }
        $this->User_model->simpan();
        redirect('admin/user');
    }

    public function update()
    {
        $this->User_model->update();
        redirect('admin/user');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);
        $this->db->Delete('user', $where);
        $this->session->set_flashdata('alert', '
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
            ⦸ Anda berhasil menghapus data ini
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('admin/user');
    }

}