<?php 

class Construct_arrays_model extends CI_MODEL {
	
	private $CI;
	
	function __construct(){
		parent::construct();
		$this->CI =& get_instance();
		$this->CI->load->helper('clean');
	}
	
	public function createArray($tableName){
		$tableName = cleanElement($tableName);
		
		$query = $this->CI->db->get($tableName);
		
		$resultArray = null;
		foreach ($query as $row) {
			$resultArray[$row->id] = $row->name;
		}
		
		return $resultArray;
	} 
	
	
}
