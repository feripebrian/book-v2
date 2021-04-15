<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Visitor {
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	function cek_visitor() { 
        $ip         = $this->CI->input->ip_address();
        $date       = date("Y-m-d");
        $waktu      = time(); 
        $timeinsert = date("Y-m-d H:i:s");
  
        $s  = $this->CI->db->query("SELECT * FROM tb_visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
        $ss = isset($s)?($s):0;

        if($ss == 0){
        $this->CI->db->query("INSERT INTO tb_visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
        }else{
        $this->CI->db->query("UPDATE tb_visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
        }
         
        
      }

    function show_visitor(){
        $date               = date("Y-m-d");
        $pengunjunghariini  = $this->CI->db->query("SELECT * FROM tb_visitor WHERE date='".$date."' GROUP BY ip")->num_rows();
        $dbpengunjung       = $this->CI->db->query("SELECT COUNT(hits) as hits FROM tb_visitor")->row(); 
        $totalpengunjung    = isset($dbpengunjung->hits)?($dbpengunjung->hits):0;
        $bataswaktu         = time() - 300;
        $pengunjungonline   = $this->CI->db->query("SELECT * FROM tb_visitor WHERE online > '".$bataswaktu."'")->num_rows();

        $data['pengunjunghariini']  = $pengunjunghariini;
        $data['totalpengunjung']    = $totalpengunjung;
        $data['pengunjungonline']   = $pengunjungonline;
    }  
}