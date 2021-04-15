<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_login {
 	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('tb_user',array('username'=>$username,'password' => $password));
		if($query->num_rows() == 1) {
				$row 	= $this->CI->db->query('SELECT * FROM tb_user where username = "'.$username.'"');
				$admin 	= $row->row();
				$id 	= $admin->id;
				$nama 	= $admin->nama;
				$foto 	= $admin->foto;
				$this->CI->session->set_userdata('id', $id);
				$this->CI->session->set_userdata('username', $username);
				$this->CI->session->set_userdata('nama', $nama);
				$this->CI->session->set_userdata('foto', $foto);
				$this->CI->session->set_userdata('id_login', uniqid(rand()));
				redirect(base_url('admin/dasbor'));
		}else{
			
			$this->CI->session->set_flashdata('message','Oops... Periksa Username dan Password anda');
			redirect(base_url('admin/login'));
		}
			return false;
		}
	
	// Proteksi halaman
	public function cek_login($checkAccess = TRUE) {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('message','Anda belum login');
			redirect(base_url('admin/login'));
		}
		// if( $checkAccess )$this->has_access();
		 
	}

	function current_user()
	{
		if($username = $this->CI->session->userdata('id'))
		{
			$CU = $this->CI->konten_model->get_user_by_id($username);
			return $CU;
		}
		else
		{
			return (object) array();
		}
	}

	function has_access()
	{
		$ci					= get_instance();
		$default_controller = isset($ci->router->routes['default_controller']) ? $ci->router->routes['default_controller'] : 'welcome';
		$default_method = 'index';

		$controller = $ci->uri->segment(2, $default_controller);
		$action = $ci->uri->segment(4, $default_method);

		$default_access = array(
			$default_controller => $default_controller,
			$default_controller.'/'.$default_method => $default_controller.'/'.$default_method,
			$controller.'/json'		=> $controller.'/json',
			$controller.'/iframe'	=> $controller.'/iframe'
		);

		// $CU = $ci->current_user();
		$id_user = $this->CI->session->userdata('id');
		$acc = $ci->konten_model->get_user_access($id_user);
		$acc = array_merge($default_access,$acc);

		if( ! isset($acc[$controller.'/'.$action]) ){
			$ci->session->set_userdata('message','Anda tidak diijinkan mengakses / melakukan aksi pada halaman yang anda tuju.<br><br>Silakan hubungi administrator.');
			$ci->session->set_userdata('message_type','error');
			$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url();
			redirect($ref);
			die();
		}
	}
	
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('foto');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('message','Anda berhasil logout');
		redirect(base_url('admin/login'));
	}
}