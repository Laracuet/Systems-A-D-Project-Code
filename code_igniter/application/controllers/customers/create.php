<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends Logged_in {
	
	private $form;

	public function index(){
		$this->load->library('customer_form');
		$this->form = $this->customer_form;
		if($this->post()){
			$this->load->view('templates/header');
			$this->load->view('main_content/create_success');
			$this->load->view('templates/footer');
		}else{
			$context=array('form'=>$this->form);
			// Construct arrays
			$this->load->view('templates/header');
			$this->load->view('main_content/create',$context);
			$this->load->view('templates/footer');	
		}
	}
	
	private function post(){
		if($this->input->server('REQUEST_METHOD') == "POST"){
			if($this->form->validateForm($this->input->post())){
				$this->form->save();
				return TRUE;
			}
		}
		return FALSE;
	}
}
