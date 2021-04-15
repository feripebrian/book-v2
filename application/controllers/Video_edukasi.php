<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_edukasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->visitor->cek_visitor();
	}

	public function index()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['cari_video']		= $this->interface_model->video_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header',$menu);
		$this->load->view('video_edukasi',$data);
		$this->load->view('footer');
	}

	function video_edukasi_show($id)
	{
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['show'] 			= $this->interface_model->video_show_id($id);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header',$menu);
		$this->load->view('lihat_video',$data);
		$this->load->view('footer');
	}
}
