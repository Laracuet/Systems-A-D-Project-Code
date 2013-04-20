<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_authentication {
	
	private $CI;
	
	function __construct(){
		$this->CI =&get_instance();
		$this->CI->load->model('user_authentication_model');
		$this->CI->load->helper('security');
		$this->CI->load->helper('clean');
	}
	
	public function verifyCredentials($username,$password){
		$username = cleanElement($username,$this->CI);
		$results = $this->CI->user_authentication_model->retrieveUserCredentials($username);
		if(is_null($results) || !$this->checkPassword($password,$results['password'],$results['salt'])){
			return FALSE;
		}
		return TRUE;
	}
	
	private function checkPassword($password,$dbPassword,$salt){
		return do_hash($password . $salt) == $dbPassword;
	}
	
}
