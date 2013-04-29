<?php 

class Customer_form_models extends CI_MODEL {
	
	private $CI;
	private $tableName='account_information';
	private $account_id;
	private $isUpdate;
	
	function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		$this->CI->load->helper('clean');
		$this->isUpdate = FALSE;
	}
	
	public function insertAccountInfo($formData,$recordId = FALSE){
		$formData = cleanArray($formData,$this->CI);
		$recordId = cleanElement($recordId,$this->CI);
		if($recordId){
			$this->isUpdate = TRUE;
			$formData['id'] = $recordId;
			$this->CI->db->where('id',$recordId);
			$this->CI->db->delete($this->tableName);
			$this->CI->db->insert($this->tableName,$formData);
			$this->account_id = $recordId;
		}else{
			$this->CI->db->insert($this->tableName,$formData);
			$this->account_id = $this->CI->db->insert_id();
		}
	}
	
	public function insertManyRelations($table,$formData){
		$formData = cleanArray($formData,$this->CI);
		
		if($this->isUpdate){
			$this->CI->db->where('account_id',$this->account_id);
			$this->CI->db->delete($table.'_many');	
		}
		
		foreach ($formData as $value) {
			$insertArray = array($table.'_id'=>$value,'account_id'=>$this->account_id);
			$this->CI->db->insert($table.'_many',$insertArray);	
		}	
	}
	
	public function getRecordBySurveyId($surveyId,$fieldInformation){
		$surveyId = cleanElement($surveyId,$this->CI);
		
		$accountQuery = $this->CI->db->get_where($this->tableName,array('id'=>$surveyId));
		
		if($accountQuery->num_rows == 0){
			return FALSE;
		}
		$accountSelections = array();
		// Construct Array
		foreach ($accountQuery->result() as $row) {
			foreach ($row as $field => $value) {
				if(substr($field, -3) == '_id'){
					$accountSelections[substr($field,0,strlen($field)-3)] = $value;
				}
				$accountSelections[$field] = $value;
			}	
		}
		// Add ManyToMany selections
		foreach ($fieldInformation as $field) {
			if ($field['type'] == 'many') {
				$accountSelections[$field['name']] = $this->getManyToManyValue($surveyId,$field['name']);
			}
		}
		return $accountSelections;
	}
	
	private function getManyToManyValue($surveyId,$fieldName){
		$manyToManyQuery = $this->CI->db->get_where($fieldName . '_many',array('account_id'=>$surveyId));
		$arraySelections = array();
		if($manyToManyQuery->num_rows > 0){
			foreach ($manyToManyQuery->result() as $record) {
				$name = $fieldName . '_id';
				array_push($arraySelections,$record->$name);
			}
		}
		
		return $arraySelections;
	}
	
	public function getRecordByCustomerId($customerId,$fieldInformation){
		$customerId = cleanElement($customerId,$this->CI);
		$query = $this->CI->db->get_where($this->tableName,array('member_number'=>$customerId));
		
		if($query->num_rows == 0){
			return FALSE;
		}
		
		$queryArray = $query->result();
		$queryArray = $queryArray[0];
		return $this->getRecordBySurveyId($queryArray->id, $fieldInformation);
	}
	
}
