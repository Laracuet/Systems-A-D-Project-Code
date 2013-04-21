<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	protected function makePage($view, $context = null){
		$this->load->view('templates/header');
		$this->load->view('main_content/' . $view, $context);
		$this->load->view('templates/footer');
	}
	
}

class Logged_in extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->checkLoggedIn();
	}
	
	private function checkLoggedIn(){
		if(!$this->session->userdata('loggedIn')){
			redirect(site_url());
		}
	}
	
	
}
