<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        } //atau selaina admin tidak boleh menjalankan
    }
    public function index()
    {
        $judul = array(
            'judul' => "Dashboard"
        );
        $this->template->load('layout/template', 'admin/dashboard', array_merge($judul)); //meenggunakan banyak variable kedalam view ->array
    }
}