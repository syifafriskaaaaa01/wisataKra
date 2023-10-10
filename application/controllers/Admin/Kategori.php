<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct(){
		parent:: __construct();
        if($this->session->userdata('level')==NULL){
          redirect('auth');
        }	
	}
	public function index()
	{
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array(); //menampung table user
		$data = array(
			'judul' => "Kategori Konten",
			'kategori' => $kategori
			); 
		$this->template->load('layout/template','admin/kategori1',$data);
	}
	public function simpan(){
			$data = array(
				'nama_kategori' => $this->input->post('nama_kategori')
			);
			$this->db->insert('kategori', $data);
			$this->session->set_flashdata('alert','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Ditambahkan ꒰ᵕ༚ᵕ⑅꒱
					<button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('admin/kategori');
		  }   
	public function update(){
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		  );
		  $data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
			  );
		  $this->db->update('kategori', $data, $where); //tabel, data apa saja yang diinputkan
		  $this->session->set_flashdata('alert','
		  <div class="alert alert-success alert-dismissible fade show" role="alert">
			  <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Di update ꒰ᵕ༚ᵕ⑅꒱
			  <button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		  redirect('admin/kategori');
		}
	public function hapus($id){
		$where = array ('id_kategori' => $id);
		$this->db->Delete('kategori', $where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			 ⦸ Anda berhasil menghapus data ini
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/kategori');
	}

}