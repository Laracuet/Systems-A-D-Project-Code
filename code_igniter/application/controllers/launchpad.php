<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Launchpad extends Logged_in {

	public function index(){
		
		// Construct arrays
		$this->load->library('construct_arrays');
		$oneToTen = array('1'=>'1', '2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10');
		$context = array('arrays'=>$this->construct_arrays,'oneToTen'=>$oneToTen);
		$this->load->view('templates/header');
		$this->load->view('main_content/launchpad');
		$this->load->view('templates/footer');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */