<?php 

class Construct_arrays_model extends CI_MODEL {
	
	private $CI;
	
	function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		$this->CI->load->helper('clean');
	}
	
	public function createArray($tableName){
		$tableName = cleanElement($tableName,$this->CI);
		
		$query = $this->CI->db->get($tableName);
		
		if($query->num_rows == 0){
			$resultArray = null;
		}else{
			foreach ($query->result() as $row) {
				$resultArray[$row->id] = $row->name;
			}	
		}
		return $resultArray;
	} 
	
	
}
