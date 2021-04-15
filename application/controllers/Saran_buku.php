<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran_buku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->visitor->cek_visitor();
	}

	public function index()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header',$menu);
		$this->load->view('saran',$data);
		$this->load->view('footer');
	}

	public function saran_buku_baru()
    {
	    if($this->input->post('submit')){ 
			$this->interface_model->saran_buku(); 
	    	$this->session->set_flashdata('success', 'Data berhasil di simpan');
	    	redirect('saran_buku');
	    }else{
	    	$this->session->set_flashdata('failed', 'Data gagal di simpan');
	    	redirect('saran_buku');
	    }
    }
}
