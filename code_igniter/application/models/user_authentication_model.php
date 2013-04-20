<?php

class User_authentication_model extends CI_MODEL {
	
	private $tblName = 'users';
	private $CI;
	
	function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->helper('clean');
	}
	
	
	public function retrieveUserCredentials($username){
		
		$username = cleanElement($username,$this->CI);
		$query = $this->CI->db->get_where($this->tblName,array('username'=>$username));
		$result = $query->result();
		
		if($query->num_rows != 1){
			return null;
		}
		return array('username'=>$result[0]->username,'password'=>$result[0]->password,'salt'=>$result[0]->salt);
	}
	
	
	
}
