<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->visitor->cek_visitor();
	}

	public function index()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$data['jumlah_buku'] 	= $this->interface_model->jumlah_book_show();
		
		$this->load->view('header',$menu);
		$this->load->view('welcome_message',$data);
		$this->load->view('footer');
	}

	function show_kategori($kategori)
	{
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['show'] 			= $this->interface_model->kategori_id($kategori);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header',$menu);
		$this->load->view('kategori_buku',$data);
		$this->load->view('footer');
	}
}
