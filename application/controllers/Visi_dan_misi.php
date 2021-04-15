<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_dan_misi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->visitor->cek_visitor();
	}

	public function index()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['visi_dan_misi'] 	= $this->interface_model->visi_dan_misi_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header',$menu);
		$this->load->view('visi_dan_misi',$data);
		$this->load->view('footer');
	}

	function baca_buku($id_buku)
	{
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['baca'] 	= $this->interface_model->baca_buku($id_buku);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header',$menu);
		$this->load->view('baca_buku',$data);
		$this->load->view('footer');
	}
}
