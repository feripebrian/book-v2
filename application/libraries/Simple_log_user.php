<?php if (!defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_log_user
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI = &get_instance();
	}

	// Fungsi login
	public function login($id_member, $password, $kategori)
	{
		$cek = $this->CI->db->get_where('tb_member', array('id_member' => $id_member, 'status' => '1'));
		if ($cek->num_rows() == 1) {
			# code...
			$query = $this->CI->db->get_where('tb_member', array('id_member' => $id_member, 'password' => $password, 'kategori' => $kategori));
			if ($query->num_rows() == 1) {
				$admin 	= $query->row();
				$data = array(
					'id_member' => $admin->id_member,
					'nama' 		=> $admin->nama,
					'kategori'	=> $admin->kategori,
					'tanggal'	=> date('d'),
					'bulan'		=> date('F'),
					'tahun' 	=> date('Y'),
					'date' 		=> date('Y-m-d'),
					'time' 		=> date('H:i:s')
				);
				$this->CI->db->insert('tb_log', $data);
				$id 	= $admin->id_member;
				$this->CI->session->set_userdata('id', $id);
				redirect(base_url('cari_buku'));
			} else {

				$this->CI->session->set_flashdata('message', 'Oops... Periksa Username dan Password anda');
				redirect('');
			}
			return false;
		} else {
			$this->CI->session->set_flashdata('message', 'Oops... Periksa Username dan Password anda');
			redirect('');
		}
	}

	// Proteksi halaman
	public function cek_login($checkAccess = TRUE)
	{
		if ($this->CI->session->userdata('id') == '') {
			$this->CI->session->set_flashdata('message', 'Anda belum login');
			redirect(base_url('beranda'));
		}
	}

	// Fungsi logout
	public function logout()
	{
		session_destroy();
		$this->CI->session->set_flashdata('message', 'Anda berhasil logout');
		redirect('welcome');
	}
}
