<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends Logged_in {

	public function index(){
		
		$oneToTen = array('1'=>'1', '2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10');
		$this->load->library('construct_arrays');
		$context=array('arrays'=>$this->construct_arrays,'oneToTen'=>$oneToTen);
		
		// Construct arrays
		$this->load->view('templates/header');
		$this->load->view('customer_form',$context);
		$this->load->view('templates/footer');
	}
}
