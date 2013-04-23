<?php 

class Customer_form_models extends CI_MODEL {
	
	private $CI;
	private $tableName='account_information';
	private $account_id;
	
	function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		$this->CI->load->helper('clean');
	}
	
	public function insertAccountInfo($formData){
		$formData = cleanArray($formData,$this->CI);
		$this->CI->db->insert($this->tableName,$formData);
		$this->account_id = $this->CI->db->insert_id();
	}
	
	public function insertManyRelations($table,$formData){
		$formData = cleanArray($formData,$this->CI);
		foreach ($formData as $value) {
			$insertArray = array($table.'_id'=>$value,'account_id'=>$this->account_id);
			$this->CI->db->insert($table.'_many',$insertArray);	
		}	
	}
	
}
