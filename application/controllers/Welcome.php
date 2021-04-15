<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->load->library('pagination');
		$this->visitor->cek_visitor();
	}

	public function index()
	{
		$menu['slide'] 			= $this->interface_model->slide_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$data['jumlah_buku'] 	= $this->interface_model->jumlah_book_show();

		$this->load->view('header', $menu);
		$this->load->view('welcome_message', $data);
		$this->load->view('footer');
	}

	public function profil_sekolah()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['profile'] 		= $this->interface_model->profile_show();
		// $data['kategori'] 		= $this->interface_model->kategori_show();
		// $data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header', $menu);
		$this->load->view('form_login');
		$this->load->view('profil_sekolah', $data);
		// $this->load->view('sidebar',$data);
		$this->load->view('footer');
	}

	public function visi_dan_misi()
	{
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$data['visi_dan_misi'] 	= $this->interface_model->visi_dan_misi_show();
		// $data['kategori'] 		= $this->interface_model->kategori_show();
		// $data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header', $menu);
		$this->load->view('form_login');
		$this->load->view('visi_dan_misi', $data);
		// $this->load->view('sidebar',$data);
		$this->load->view('footer');
	}

	public function cari_buku()
	{
		$this->simple_log_user->cek_login();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['cari_buku'] 		= $this->interface_model->book_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header2', $menu);
		$this->load->view('cari_buku', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	function baca_buku($id_buku)
	{
		$this->simple_log_user->cek_login();
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['baca'] 			= $this->interface_model->baca_buku($id_buku);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header2', $menu);
		$this->load->view('baca_buku', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	function show_kategori($kategori)
	{
		$this->simple_log_user->cek_login();
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['show'] 			= $this->interface_model->kategori_id($kategori);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header2', $menu);
		$this->load->view('kategori_buku', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
	function show_kategori_video($kategori)
	{
		$this->simple_log_user->cek_login();
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['video_show'] 	= $this->interface_model->kategori_video_id($kategori);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header2', $menu);
		$this->load->view('kategori_video', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	public function saran_buku()
	{
		$this->simple_log_user->cek_login();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header2', $menu);
		$this->load->view('saran', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	public function video_edukasi()
	{
		$this->simple_log_user->cek_login();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['cari_video']		= $this->interface_model->video_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header2', $menu);
		$this->load->view('video_edukasi', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	function video_edukasi_show($id)
	{
		$this->simple_log_user->cek_login();
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['show'] 			= $this->interface_model->video_show_id($id);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header2', $menu);
		$this->load->view('lihat_video', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	public function galeri()
	{
		$this->simple_log_user->cek_login();
		//konfigurasi pagination
		$config['base_url'] = site_url('welcome/galeri/index'); //site url
		$config['total_rows'] = $this->db->count_all('tb_galeri'); //total row
		$config['per_page'] = 12;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['galeri'] = $this->interface_model->get_galeri_list($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();


		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		// $data['galeri'] 		= $this->interface_model->galeri_show();
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();

		$this->load->view('header2', $menu);
		$this->load->view('galeri', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}

	function kategori($id_kategori)
	{
		$this->simple_log_user->cek_login();
		// $data['banner_halaman'] = $this->interface_model->banner_liturgi_show();
		$menu['kategori'] 		= $this->interface_model->kategori_show();
		$menu['kategori_video'] = $this->interface_model->kategori_video_show();
		$data['show'] 			= $this->interface_model->kategori_id($id_kategori);
		$data['kategori'] 		= $this->interface_model->kategori_show();
		$data['koleksi_buku'] 	= $this->interface_model->book_new_show();
		$this->load->view('header2', $menu);
		$this->load->view('kategori_buku', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
}
