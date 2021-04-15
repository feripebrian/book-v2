<?php
class  M_account extends CI_Model{

    function daftar($data) {   
        $this->db->insert('users',$data);   
    }  
   
   //Start: method tambahan untuk reset code  
   public function getUserInfo($id_member)  
   {  
     $q = $this->db->get_where('tb_member', array('id_member' => $id_member), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }else{  
       error_log('no user found getUserInfo('.$id_member.')');  
       return false;  
     }  
   }  
   
  public function getUserInfoByEmail($email)
  {  
    $q = $this->db->get_where('tb_member', array('email' => $email), 1);   
      if($this->db->affected_rows() > 0){  
        $row = $q->row();  
        return $row;  
      }  
  }  
   
   public function insertToken($id_member)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'    => $token,  
         'id_member'  => $id_member,  
         'created'  => $date  
       );  
     $query = $this->db->insert_string('tb_tokens',$string);  
     $this->db->query($query);  
     return $token . $id_member;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('tb_tokens', array(  
       'tb_tokens.token'   => $tkn,   
       'tb_tokens.id_member' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created     = $row->created;  
       $createdTS   = strtotime($created);  
       $today       = date('Y-m-d');   
       $todayTS     = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserInfo($row->id_member);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('id_member', $post['id_member']);  
     $this->db->update('tb_member', array('password' => $post['password']));      
     return true;  
   }   
    
 }