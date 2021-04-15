<?php
class Konten_model extends CI_Model
{


	function log_user_show()
	{
		$data = $this->db->query("SELECT * FROM tb_log ORDER BY DATE & TIME DESC");
		return $data->result_array();
	}

	// ========================================= USER =========================================
	function user_show()
	{
		$data = $this->db->query("SELECT * FROM tb_user ");
		return $data->result_array();
	}

	public function user_akses($id)
	{

		$akses = $this->input->post('akses');
		$result = array();
		foreach ($akses as $key => $val) {
			$result[] = array(
				'id_user'   => $id,
				'akses'     => $akses[$key]
			);
		}
		return $this->db->insert_batch('tb_user_akses', $result);
	}

	function user_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_user where id='$id'");
		return $data->result_array();
	}

	function get_user_access($id_user)
	{
		$acc = array();
		$id = $this->db->escape_str($id_user);
		$query = $this->db->query(" SELECT * FROM tb_user_akses WHERE id_user='$id_user' ");
		$res = $query->result();
		if (count($res) > 0) {
			foreach ($res as $row) {
				$acc[$row->akses] = $row->akses;
			}
		}
		return $acc;
	}

	function set_cb($field, $id = '')
	{
		if ($id == '') {
			$default = '';
		} else {
			$acc = $this->get_user_access($id);
			if (isset($acc[$field])) $default = 'checked';
			else $default = '';
		}
		if ($this->input->post()) $default = '';

		$access = $this->input->post('akses');
		$ret = isset($access[$field]) ? 'checked' : $default;

		return $ret;
	}

	function update_user($id)
	{
		$data = array(
			"nama"      => $this->input->post('nama'),
			"email"     => $this->input->post('email'),
			"password"  => md5($this->input->post('password')),
			"status"    => $this->input->post('status'),
			"foto"      => $this->input->post('foto'),
		);
		$this->db->where('id', $id);
		$this->db->update('tb_user', $data);

		$this->db->where('id_user', $id);
		$this->db->delete('tb_user_akses');

		$akses = $this->input->post('akses');
		if ($akses and is_array($akses)) {
			foreach ($akses as $ac) {
				$d = array();
				$d['id_user'] = $id;
				$d['akses'] = $ac;
				$this->db->insert('tb_user_akses', $d);
			}
		}
	}

	function tambah_user()
	{
		$data = array(
			"nama"      => $this->input->post('nama'),
			"email"     => $this->input->post('email'),
			"username"  => $this->input->post('username'),
			"password"  => md5($this->input->post('password')),
			"status"    => $this->input->post('status'),
			"foto"      => $this->input->post('foto'),
		);
		$this->db->insert('tb_user', $data);
		$akses  = $this->input->post('akses');
		$UID    = $this->db->insert_id();

		if ($akses and is_array($akses)) {
			foreach ($akses as $ac) {
				$d = array();
				$d['id_user'] = $UID;
				$d['akses']   = $ac;
				$this->db->insert('tb_user_akses', $d);
			}
		}
	}

	function tambah_log_user()
	{
		$data = array(
			"nama"          => $this->input->post('nama'),
			"keterangan"    => $this->input->post('keterangan'),
			"id_user"       => $this->input->post('id_user'),
			"email"         => $this->input->post('email'),
			"password"      => md5($this->input->post('password')),
		);
		$this->db->insert('tb_user', $data);
	}

	function hapus_user($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function hapus_user_akses($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= BUKU =========================================
	function buku_show()
	{
		$data = $this->db->query("SELECT * FROM  tb_buku b, tb_sekolah s WHERE b.id_sekolah = s.id AND STATUS='1';");
		return $data->result_array();
	}

	function tambah_buku()
	{
		$data = array(
			"judul_buku"    => $this->input->post('judul'),
			"penerbit"      => $this->input->post('penerbit'),
			"pengarang"     => $this->input->post('pengarang'),
			"tahun"         => $this->input->post('tahun'),
			"kategori"      => $this->input->post('kategori'),
			"buku_kelas"    => $this->input->post('kelas'),
			"id_sekolah"    => $this->input->post('tingkat'),
			"file"          => $this->input->post('file'),
			"cover"         => $this->input->post('cover'),
			"status"        => $this->input->post('status'),
			"date_upload"   => date('Y-m-d H:i:s')
		);
		$this->db->insert('tb_buku', $data);
	}

	function buku_edit($id_buku)
	{
		$data = $this->db->query("SELECT * FROM tb_buku where id_buku='$id_buku'");
		return $data->result_array();
	}

	function update_buku($id_buku)
	{
		$data = array(
			"judul_buku"    => $this->input->post('judul'),
			"penerbit"      => $this->input->post('penerbit'),
			"pengarang"     => $this->input->post('pengarang'),
			"tahun"         => $this->input->post('tahun'),
			"kategori"      => $this->input->post('kategori'),
			"buku_kelas"    => $this->input->post('kelas'),
			"id_sekolah"    => $this->input->post('tingkat'),
			"file"          => $this->input->post('file'),
			"cover"         => $this->input->post('cover'),
			"status"        => $this->input->post('status'),
			"date_upload"   => date('Y-m-d H:i:s')
		);
		$this->db->where('id_buku', $id_buku);
		$this->db->update('tb_buku', $data);
	}
	function hapus_buku($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= SLIDE =========================================
	function slide_show()
	{
		$data = $this->db->query("SELECT * FROM  tb_slide;");
		return $data->result_array();
	}

	function tambah_slide()
	{
		$data = array(
			"name"        => $this->input->post('name'),
			"image"       => $this->input->post('image'),
			"description" => $this->input->post('description'),
			"created_at"  => date('Y-m-d H:i:s'),
			"updated_at"  => date('Y-m-d H:i:s'),
			"status"      => $this->input->post('status'),
		);
		$this->db->insert('tb_slide', $data);
	}

	function slide_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_SLIDE where id='$id'");
		return $data->result_array();
	}

	function update_slide($id)
	{
		$data = array(
			"name"        => $this->input->post('name'),
			"image"       => $this->input->post('image'),
			"description" => $this->input->post('description'),
			"updated_at"  => date('Y-m-d H:i:s'),
			"status"      => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('tb_slide', $data);
	}

	function hapus_slide($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KATEGORI =========================================
	function kategori_show()
	{
		$data = $this->db->query("SELECT * FROM tb_kategori;");
		return $data->result_array();
	}

	function kategori_id_show()
	{
		$data = $this->db->query("SELECT * FROM tb_kategori where status='1'");
		return $data->result_array();
	}

	function kelas_show()
	{
		$data = $this->db->query("SELECT * FROM tb_kelas");
		return $data->result_array();
	}
	function sekolah_show()
	{
		$data = $this->db->query("SELECT * FROM tb_sekolah");
		return $data->result_array();
	}

	function kategori_maxid()
	{
		$data = $this->db->query("SELECT max(id_kategori+1) AS id FROM tb_kategori;");
		return $data->result_array();
	}

	function tambah_kategori()
	{
		$data = array(
			"id_kategori" => $this->input->post('id_kategori'),
			"kategori"    => $this->input->post('kategori'),
			"kelas"    => $this->input->post('kelas'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->insert('tb_kategori', $data);
	}

	function kategori_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_kategori where id='$id'");
		return $data->result_array();
	}

	function update_kategori($id)
	{
		$data = array(
			"id_kategori" => $this->input->post('id_kategori'),
			"kategori"    => $this->input->post('kategori'),
			"kelas"    => $this->input->post('kelas'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_kategori', $data);
	}
	function hapus_kategori($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= KATEGORI VIDEO =========================================
	function kategori_video_show()
	{
		$data = $this->db->query("SELECT * FROM tb_video_kategori;");
		return $data->result_array();
	}

	function tambah_kategori_video()
	{
		$data = array(
			"kategori" => $this->input->post('kategori'),
			"slug"    => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('kategori')))
		);

		$this->db->insert('tb_video_kategori', $data);
	}

	function kategori_video_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_video_kategori where id='$id'");
		return $data->result_array();
	}

	function update_kategori_video($id)
	{
		$data = array(
			"kategori" => $this->input->post('kategori'),
			"slug"    => str_replace(array(" ", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "<", ">"), '_', strtolower($this->input->post('kategori')))
		);
		$this->db->where('id', $id);
		$this->db->update('tb_video_kategori', $data);
	}

	function hapus_kategori_video($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= SARAN BUKU =========================================
	function saran_buku_show()
	{
		$data = $this->db->query("SELECT * FROM tb_saran_buku;");
		return $data->result_array();
	}

	function tambah_saran_buku()
	{
		$data = array(
			"id_saran_buku" => $this->input->post('id_saran_buku'),
			"saran_buku"    => $this->input->post('saran_buku'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->insert('tb_saran_buku', $data);
	}

	function hapus_saran_buku($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= VIDEO EDUKASI =========================================
	function video_edukasi_show()
	{
		$data = $this->db->query("SELECT * FROM  tb_video v, tb_video_kategori vk WHERE v.video_kategori = vk.id ;");
		return $data->result_array();
	}

	function tambah_video_edukasi()
	{
		$data = array(
			"judul_video" => $this->input->post('judul'),
			"embed"        => $this->input->post('embed'),
			"link"        => $this->input->post('link'),
			"keterangan"  => $this->input->post('keterangan'),
			"video_kategori"    => $this->input->post('kategori'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->insert('tb_video', $data);
	}

	function video_edukasi_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_video where id='$id'");
		return $data->result_array();
	}

	function update_video_edukasi($id)
	{
		$data = array(
			"judul_video" => $this->input->post('judul'),
			"link"        => $this->input->post('link'),
			"embed"        => $this->input->post('embed'),
			"keterangan"  => $this->input->post('keterangan'),
			"video_kategori"    => $this->input->post('kategori'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_video', $data);
	}
	function hapus_video_edukasi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	// ========================================= PENGATURAN =========================================
	function pengaturan_show()
	{
		$data = $this->db->query("SELECT * FROM tb_home;");
		return $data->result_array();
	}

	function pengaturan_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_home where id='$id'");
		return $data->result_array();
	}

	function update_pengaturan($id)
	{
		$data = array(
			"nama_sekolah"    => $this->input->post('nama_sekolah'),
			"kepala_sekolah"  => $this->input->post('kepala_sekolah'),
			"foto"            => $this->input->post('foto'),
			"logo_login"      => $this->input->post('logo_login'),
			"logo"            => $this->input->post('logo'),
			"banner"          => $this->input->post('banner'),
			"selogan"         => $this->input->post('selogan'),
			"background"      => $this->input->post('background'),
			"maskot"          => $this->input->post('maskot'),
			"tentang_e_book"  => $this->input->post('tentang_e-book'),
			"meta"            => $this->input->post('meta'),
			"descriptions"    => $this->input->post('descriptions'),
			"date_update"     => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_home', $data);
	}


	// ========================================= PROFILE SEKOLAH =========================================
	function profile_sekolah_show()
	{
		$data = $this->db->query("SELECT * FROM tb_konten where id='1'");
		return $data->result_array();
	}

	function profile_sekolah_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_konten where id='$id'");
		return $data->result_array();
	}

	function update_profile_sekolah($id)
	{
		$data = array(
			"judul"         => $this->input->post('judul'),
			"isi"           => $this->input->post('isi'),
			"date_update"   => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_konten', $data);
	}

	// ========================================= VISI DAN MISI =========================================
	function visi_dan_misi_show()
	{
		$data = $this->db->query("SELECT * FROM tb_konten where id='2'");
		return $data->result_array();
	}

	function visi_dan_misi_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_konten where id='$id'");
		return $data->result_array();
	}

	function update_visi_dan_misi($id)
	{
		$data = array(
			"judul"         => $this->input->post('judul'),
			"isi"           => $this->input->post('isi'),
			"date_update"   => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_konten', $data);
	}

	// ========================================= GALERI =========================================
	function galeri_show()
	{
		$data = $this->db->query("SELECT * FROM tb_galeri;");
		return $data->result_array();
	}


	function tambah_galeri()
	{
		$data = array(
			"gambar"      => $this->input->post('gambar'),
			"keterangan"  => $this->input->post('keterangan'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->insert('tb_galeri', $data);
	}

	function galeri_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_galeri where id='$id'");
		return $data->result_array();
	}

	function update_galeri($id)
	{
		$data = array(
			"gambar"      => $this->input->post('gambar'),
			"keterangan"  => $this->input->post('keterangan'),
			"status"      => $this->input->post('status'),
			"date_upload" => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_galeri', $data);
	}
	function hapus_galeri($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ========================================= MEMBER =========================================
	function member_show()
	{
		$data = $this->db->query("SELECT * FROM tb_member ");
		return $data->result_array();
	}

	function member_kategori()
	{
		$data = $this->db->query("SELECT * FROM tb_member_kategori;");
		return $data->result_array();
	}

	function member_edit($id)
	{
		$data = $this->db->query("SELECT * FROM tb_member where id='$id'");
		return $data->result_array();
	}

	function update_member($id)
	{
		$data = array(
			"id_member" => $this->input->post('id_member'),
			"nama"      => $this->input->post('nama'),
			"email"     => $this->input->post('email'),
			"kategori"  => $this->input->post('kategori'),
			"status"    => $this->input->post('status'),
		);
		$this->db->where('id', $id);
		$this->db->update('tb_member', $data);
	}

	function update_password_member($id)
	{
		$data = array(
			"password" => md5($this->input->post('password')),
		);
		$this->db->where('id', $id);
		$this->db->update('tb_member', $data);
	}

	function tambah_member()
	{
		$data = array(
			"id_member"   => $this->input->post('id_member'),
			"password"    => md5($this->input->post('password')),
			"nama"        => $this->input->post('nama'),
			"email"       => $this->input->post('email'),
			"kategori"    => $this->input->post('kategori'),
			"status"      => $this->input->post('status'),
		);
		$this->db->insert('tb_member', $data);
	}

	function tambah_log_member()
	{
		$data = array(
			"id_member"   => $this->input->post('id_member'),
			"password"    => md5($this->input->post('password')),
			"nama"        => $this->input->post('nama'),
			"email"       => $this->input->post('email'),
			"kategori"    => $this->input->post('kategori'),
		);
		$this->db->insert('tb_member', $data);
	}

	function hapus_member($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
