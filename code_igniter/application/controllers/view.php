<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends MY_Controller {

	public function index()
	{
		$this->makePage('ViewRecords');
	}
}