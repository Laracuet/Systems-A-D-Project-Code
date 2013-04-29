<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends Logged_in {
	
	private $form;
	
	public function index(){
		$result = $this->post();
		if($result == 'saved'){
			$this->load->view('templates/header');
			$this->load->view('main_content/create_success');
			$this->load->view('templates/footer');
			return;
		} 
		elseif($result == 'non-validated_form'){
			$context=array('form'=>$this->form);
			$this->load->view('templates/header');
			$this->load->view('main_content/edit',$context);
			$this->load->view('templates/footer');
			return;
		}else{
			// Construct arrays
			$this->load->view('templates/header');
			$this->load->view('main_content/no_record_error');
			$this->load->view('templates/footer');	
		}
	}
	
	private function post(){
		if($this->input->server('REQUEST_METHOD') == "POST"){
			$this->load->library('customer_form',$this->input->post());
			$this->form = $this->customer_form;
			if(($this->input->post('survey_id_search') || $this->input->post('customer_id_search'))){
				if(!$this->form->getInstance()){
					return FALSE;	
				}
				return "non-validated_form";
			}else{
				if($this->form->validateForm()){
					$this->form->save();
					return 'saved';
				}
				return "non-validated_form";
			}
		}
		return FALSE;
	}
}