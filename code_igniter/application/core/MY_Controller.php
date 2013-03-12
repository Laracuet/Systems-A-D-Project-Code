<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	protected function makePage($view){
		$this->load->view('templates/header');
		$this->load->view('main_content/' . $view);
		$this->load->view('templates/footer');
	}
	
}
