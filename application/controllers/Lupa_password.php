<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_account');
	}

	public function index()
	{
		$this->form_validation->set_rules('email',	'Email', 'required|valid_email',array('required' => '%s Harus di isi.'));
		  if($this->form_validation->run() == FALSE) {
		 	  $this->session->set_flashdata('failed', 'Password gagal reset');  
        $this->load->view('loguser/header');
  			$this->load->view('loguser/lupa_password');
  			$this->load->view('loguser/footer');
          }else{  
             $email 	= $this->input->post('email');   
             $clean 	= $this->security->xss_clean($email);  
             $userInfo 	= $this->m_account->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('failed', 'email address salah, silakan coba lagi.');  
               redirect(site_url('log_user/lupa_password'),'refresh');   
             }    
               
             //build token   
                       
             $token 	= $this->m_account->insertToken($userInfo->id_member);              
             $qstring = $this->base64url_encode($token);           
             $url 		= site_url() . 'lupa_password/reset_password/token/' . $qstring;  
             $link 		= '<a href="' . $url . '">' . $url . '</a>';   
               
             $message 	= '';             
             $message 	.= '<strong>Hai, anda menerima pesan ini karena ada permintaan untuk memperbaharui password anda.</strong><br>';  
             $message 	.= '<strong>Silakan klik link ini:</strong> ' . $link;         
   
             echo $message; //send this through mail  
             exit;  
           
         } 
		
	}
	public function reset_password()  
    {  
    	$token 		= $this->base64url_decode($this->uri->segment(4));           
      $cleanToken = $this->security->xss_clean($token);  
      $user_info 	= $this->m_account->isTokenValid($cleanToken); //either false or array();          
         
       	if(!$user_info){  
         	$this->session->set_flashdata('failed', 'Token tidak valid atau kadaluarsa');  
         	redirect(site_url('log_user'),'refresh');   
       	}    
   
       	$data = array(  
         	'nama'	=> $user_info->nama,   
         	'email'	=> $user_info->email,   
     		 'token'	=> $this->base64url_encode($token)  
        );  
         
    	$this->form_validation->set_rules('password', 'Password', 				     'required|min_length[5]',array('required' => '%s Harus di isi.'));
		  $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',array('required' => '%s Harus di isi.','matches'=>'%s Harus sama dengan password'));         
         
       	if ($this->form_validation->run() == FALSE) {   
       		$this->load->view('loguser/header');
	       	$this->load->view('loguser/reset_password',$data); 
			$this->load->view('loguser/footer');
       	}else{  
                           
         $post 					= $this->input->post(NULL, TRUE);          
         $cleanPost 			= $this->security->xss_clean($post);          
         $hashed 				= md5($cleanPost['password']);          
         $cleanPost['password']	  = $hashed;  
         $cleanPost['id_member'] 	= $user_info->id_member;  
         unset($cleanPost['passconf']);          
         	if(!$this->m_account->updatePassword($cleanPost)){  
           		$this->session->set_flashdata('failed', 'Update password gagal.');  
         	}else{  
           		$this->session->set_flashdata('success', 'Password anda sudah diperbaharui. Silakan login.');  
         	}  
         	redirect(site_url('log_user'),'refresh');         
       	}	  
    }
       

 	public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
  }   
   
  public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
  }    

}
