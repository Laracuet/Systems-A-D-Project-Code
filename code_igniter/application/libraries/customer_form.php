<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_form {
	
	private $fieldInformation;
	private $arrays;
	private $formErrors;
	private $cleanedData;
	private $CI;
	private $model;
	private $formData;
	private $instance;
	
	public function __construct($params = null){
		$this->CI =& get_instance();
		
		// Load Libraries
		$this->CI->load->model('customer_form_models');
		$this->model = $this->CI->customer_form_models;
		$this->CI->load->library('construct_arrays');
		$this->arrays = $this->CI->construct_arrays;
		
		$oneToTen = array('null'=>'--Select','1'=>'1', '2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10');
		
		// Create Array of info
		$this->fieldInformation = array(
			'name'=>array('name'=>'name','label'=>'Name','placeholder'=>'Company Name','type'=>'text','dataType'=>'text','required'=>TRUE),
			'member_number'=>array('name'=>'member_number','label'=>'Member Id','type'=>'text','dataType'=>'number'),
			'cloud_vendors'=>array('name'=>'cloud_vendors','label'=>'Cloud Vendors','type'=>'many','dataType'=>'many'),
			'account_type'=>array('name'=>'account_type','label'=>'Account Type','type'=>'key','dataType'=>'key','required'=>TRUE),
			'bdr_competition'=>array('name'=>'bdr_competition','label'=>'BDR Competition','type'=>'many','dataType'=>'many'),
			'classification'=>array('name'=>'classification','label'=>'Classification','type'=>'key','dataType'=>'key'),
			'company_since'=>array('name'=>'company_since','label'=>'Company Since', 'type'=>'text','placeholder'=>'mm/dd/yyyy','dataType'=>'date'),
			'crm_applications'=>array('name'=>'crm_applications','label'=>'CRM Applications','type'=>'many','dataType'=>'many'),
			'datacenter'=>array('name'=>'datacenter','label'=>'Data Center','type'=>'key','dataType'=>'key'),
			'date_registered'=>array('name'=>'date_registered','label'=>'Date Registered','type'=>'text','placeholder'=>'mm/dd/yyyy','dataType'=>'date'),
			'hosted_apps'=>array('name'=>'hosted_apps','label'=>'Hosted Apps','type'=>'many','dataType'=>'many'),
			'hypervisor_virtualization_platform'=>array('name'=>'hypervisor_virtualization_platform','label'=>'Hypervisor/Virtualization Platform','type'=>'many','dataType'=>'many'),
			'industry_affiliates'=>array('name'=>'industry_affiliates','label'=>'Industry Affiliates','type'=>'many','dataType'=>'many'),
			'msp_since'=>array('name'=>'msp_since','label'=>'MSP Since','type'=>'text','placeholder'=>'mm/dd/yyyy','dataType'=>'date'),
			'annual_revenue'=>array('name'=>'annual_revenue','label'=>'Annual Revenue','type'=>'text','dataType'=>'number'),
			'employee_count'=>array('name'=>'employee_count','label'=>'Employee Count','type'=>'text','dataType'=>'number'),
			'active_client_count'=>array('name'=>'active_client_count','label'=>'Active Client Count','type'=>'text','dataType'=>'number'),
			'average_client_size'=>array('name'=>'average_client_size','label'=>'Average Client Size','type'=>'text','dataType'=>'number'),
			'msp_client_count'=>array('name'=>'msp_client_count','label'=>'MSP Client Count','type'=>'text','dataType'=>'number'),
			'product_feedback'=>array('name'=>'product_feedback','label'=>'Product Feedback','type'=>'textArea','dataType'=>'text'),
			'psa_vendor'=>array('name'=>'psa_vendor','label'=>'PSA Vendor','type'=>'key','dataType'=>'key'),
			'region'=>array('name'=>'region','label'=>'Region','type'=>'key','dataType'=>'key'),
			
			// second page
			'service_delivery'=>array('name'=>'service_delivery','label'=>'Service Delivery','type'=>'boolean','dataType'=>'boolean'),
			'service_quality'=>array('name'=>'service_quality','label'=>'Service Quality','type'=>'boolean','dataType'=>'boolean'),
			'technical_expertise'=>array('name'=>'technical_expertise','label'=>'Technical Expertise','type'=>'boolean','dataType'=>'boolean'),
			'technician_count'=>array('name'=>'technician_count','label'=>'Technician Count','type'=>'text','dataType'=>'number'),
			'tech_ops_review_date'=>array('name'=>'tech_ops_review_date','label'=>'Tech Ops Review Date','type'=>'text','placeholder'=>'mm/dd/yyyy','dataType'=>'date'),
			'target_industry_verticals'=>array('name'=>'target_industry_verticals','label'=>'Target Industry Verticals','type'=>'many','dataType'=>'many'),
			'total_server_agents'=>array('name'=>'total_server_agents','label'=>'Total Server Agents','type'=>'text','dataType'=>'number'),
			'total_servers_managed'=>array('name'=>'total_servers_managed','label'=>'Total Serves Managed','type'=>'text','dataType'=>'number'),
			'total_site_count'=>array('name'=>'total_site_count','label'=>'Total Site Count','type'=>'text','dataType'=>'number'),
			'24x7_support'=>array('name'=>'24x7_support','label'=>'24x7 Support','type'=>'boolean','dataType'=>'boolean'),
			'brand_value_and_market_visibility'=>array('name'=>'brand_value_and_market_visibility','label'=>'Brand Value and Market Visibility','type'=>'boolean','dataType'=>'boolean'),
			'mobile_support'=>array('name'=>'mobile_support','label'=>'Mobile Support','type'=>'boolean','dataType'=>'boolean'),
			'mac_support'=>array('name'=>'mac_support','label'=>'MAC Support','type'=>'boolean','dataType'=>'boolean'),
			'client_ticketing'=>array('name'=>'client_ticketing','label'=>'Client Ticketing','type'=>'boolean','dataType'=>'boolean'),
			'helpdesk'=>array('name'=>'helpdesk','label'=>'Helpdesk','type'=>'boolean','dataType'=>'boolean'),
			'linux_support'=>array('name'=>'linux_support','label'=>'Linux Support','type'=>'boolean','dataType'=>'boolean'),
			'noc'=>array('name'=>'noc','label'=>'NOC','type'=>'boolean','dataType'=>'boolean'),
			'noc_communications'=>array('name'=>'noc_communications','label'=>'NOC Communications','type'=>'textArea','dataType'=>'text'),
			'office_count'=>array('name'=>'office_count','label'=>'Office Count','type'=>'text','dataType'=>'number'),
			'patch_mgmt'=>array('name'=>'patch_mgmt','label'=>'Patch Mgmt','type'=>'boolean','dataType'=>'boolean'),
			'ticketing_application'=>array('name'=>'ticketing_application','label'=>'Ticketing Application','type'=>'key','dataType'=>'key'),
			'satisfaction_rating'=>array('name'=>'satisfaction_rating','label'=>'Satisfaction Rating','type'=>'dropdown', 'array'=>$oneToTen,'dataType'=>'number'),
			'satisfaction_rating_comments'=>array('name'=>'satisfaction_rating_comments','label'=>'Satisfaction Rating Comments','type'=>'textArea','dataType'=>'text'),
			'total_client_count'=>array('name'=>'total_client_count','label'=>'Total Client Count','type'=>'text','dataType'=>'number'),
			'total_desktop_agents'=>array('name'=>'total_desktop_agents','label'=>'Total Desktop Agents','type'=>'text','dataType'=>'number'),
			'total_desktops_managed'=>array('name'=>'total_desktops_managed','label'=>'Total Desktops Managed','type'=>'text','dataType'=>'number'),
			'virtualization'=>array('name'=>'virtualization','label'=>'Virtualization','type'=>'boolean','dataType'=>'boolean'),
			'virtualization_platform'=>array('name'=>'virtualization_platform','label'=>'Virtualization Platform','type'=>'many','dataType'=>'many'),
		);
		
		// Deal with input parameters
		if(is_null($params)){
			$this->formData = null;
			$this->instance = null;	
		}else{
			if($this->CI->input->post('survey_id_search')){
				$this->instance = $this->model->getRecordBySurveyId($params['survey_id_search'],$this->fieldInformation);
				$this->formData = null;
			}elseif($this->CI->input->post('customer_id_search')){
				$this->instance = $this->model->getRecordByCustomerId($params['customer_id_search'],$this->fieldInformation);
				$this->formData = null;
			}elseif(array_key_exists('submit_create', $params)){
				$this->instance = null;
				$this->formData = $params;
			}elseif(array_key_exists('submit_edit', $params)){
				$this->instance = null;
				$this->formData = $params;
			}
		}
		$this->formErrors = array();
		$this->cleanedData = array();
	}

	// Getters 
	public function getErrors(){ return $this->formErrors;}
	public function getData(){ return $this->formData;}
	public function getCleanedData(){ return $this->cleanedData; }
	public function getInstance(){ return $this->instance; }

	/*
	 * --------------------------- Create Form Html --------------------------------------------
	*/
	
	
	
	public function createHtml(){
		$count = 0;
		echo '<div class="span5">';
		// Include hidden field for survey id
		if(!is_null($this->instance)){
			echo form_hidden('account_id', $this->instance['id']);
		}
		foreach ($this->fieldInformation as $field) {
			if($count == 23){
				echo '</div><div class="span5">';
			}
			
			
			if($field['type'] == 'key'){
				$this->createDropdown($field['name'], $field['label']);
			}elseif($field['type'] == 'many'){
				$this->createMultiselect($field['name'], $field['label']);
			}elseif($field['type'] == 'text'){
				if(array_key_exists('placeholder', $field)){
					$this->createTextInput($field['name'], $field['label'], $field['placeholder']);
				}else{
					$this->createTextInput($field['name'], $field['label']);	
				}
			}elseif($field['type'] == 'textArea'){
				if(array_key_exists('placeholder', $field)){
					$this->createTextArea($field['name'], $field['label'], $field['placeholder']);
				}else{
					$this->createTextArea($field['name'], $field['label']);	
				}
			}elseif($field['type'] == 'boolean'){
				$this->createBooleanRadio($field['name'], $field['label']);
			}elseif($field['type'] == 'dropdown'){
				$this->createDropdown($field['name'], $field['label'], $field['array']);
			}
			$count++;
		}
		echo "</div>";
	}

	private function displayError($fieldName){
		if(array_key_exists($fieldName, $this->formErrors)){
			echo '<div class="error" style="color:red;font-size:16px;">'.$this->formErrors[$fieldName].'</div>';	
		}
		return;
	}
	
	private function defaultValue($fieldName, $booleanValue = null){
		if(!is_null($this->instance)){
			if($this->fieldInformation[$fieldName]['type'] == 'boolean'){
				return $this->instance[$fieldName] == $booleanValue;
			}elseif($this->fieldInformation[$fieldName]['dataType'] == 'date'){
				if($this->instance[$fieldName] != NULL){
					$dateSegments = preg_split('/[-]/',$this->instance[$fieldName]);
					return $dateSegments[1].'/'.$dateSegments[2].'/'.$dateSegments[0];
				}else{
					return '';
				}
			}elseif($this->fieldInformation[$fieldName]['type'] == 'key' && $this->instance[$fieldName] == null){
				return 'select';		
			}
			return $this->instance[$fieldName];
		}elseif(!is_null($this->formData)){
			if($this->fieldInformation[$fieldName]['type'] == 'boolean'){
				return $this->instance[$fieldName] == $booleanValue;
			}elseif($this->fieldInformation[$fieldName]['type'] == 'many'){
				return;
			}
			return $this->formData[$fieldName];
		}
		
		if($this->fieldInformation[$fieldName]['type'] == 'key' || $this->fieldInformation[$fieldName]['type'] == 'dropdown'){
			return 'select';
		}elseif($this->fieldInformation[$fieldName]['type'] == 'many'){
			return '[]';
		}elseif($this->fieldInformation[$fieldName]['type'] == 'boolean'){
			return FALSE;
		}
		return;
	}
	
	private function createDropdown($fieldName,$label,$array = null){
		echo form_label($label,$fieldName);
		$this->displayError($fieldName);
		if(is_null($array)){
			
			echo form_dropdown($fieldName,$this->arrays->getArray($fieldName),'select');//$this->defaultValue($fieldName));
		}else{
			echo form_dropdown($fieldName,$array,'select');//$this->defaultValue($fieldName));	
		}
	}
	
	private function createMultiselect($fieldName,$label){
		echo form_label($label,$fieldName);
		$this->displayError($fieldName);
		if(array_key_exists($fieldName, $this->formErrors)){
			echo '<div class="error" style="color:red">'.$this->formErrors[$fieldName].'</div>';	
		}
		echo form_multiselect($fieldName.'[]',$this->arrays->getArray($fieldName),$this->defaultValue($fieldName));
	}
	
	private function createTextInput($fieldName,$label,$placeHolder=null,$maxLength = null){
		echo form_label($label,$fieldName);
		$this->displayError($fieldName);
		echo form_input(array('name'=>$fieldName, 'id'=>$fieldName, 'placeholder'=>$placeHolder, 'maxlength'=>$maxLength, 'value'=>$this->defaultValue($fieldName)));
	}
	
	private function createTextArea($fieldName,$label,$placeHolder=null,$maxLength = null){
		echo form_label($label,$fieldName);
		$this->displayError($fieldName);
		echo form_textarea(array('name'=>$fieldName, 'id'=>$fieldName, 'placeholder'=>$placeHolder, 'value'=>$this->defaultValue($fieldName)));
	}
	
	private function createBooleanRadio($fieldName,$label){
		echo form_label($label,$fieldName);
		$this->displayError($fieldName);
		echo "<p1>Yes</p1>";
		echo form_radio($fieldName, '1', $this->defaultValue($fieldName,'1'));
		echo "<p1>No</p1>";
		echo form_radio($fieldName, '0', $this->defaultValue($fieldName,'0'));
	}
	
	/*
	 * --------------------------- FORM VALIDATION --------------------------------------------
	*/
	public function validateForm(){
		$formPost = $this->formData;
		foreach ($this->fieldInformation as $key=>$field) {
			if( array_key_exists('required', $field) && (!array_key_exists($field['name'], $formPost) 
			|| (array_key_exists($field['name'], $formPost) && 
			($formPost[$field['name']] == 'null' || myClean($formPost[$field['name']],$this->CI) == "")))){
				$this->formErrors[$field['name']] = 'This field is required';
				continue;
			}
			elseif(!array_key_exists($field['name'], $formPost) || myClean($formPost[$field['name']],$this->CI) == ""){
				continue;
			}
			else{
				$formPost[$field['name']] = myClean($formPost[$field['name']],$this->CI);
				
				if($field['dataType'] == 'text'){
					$this->validateText($formPost[$field['name']],$field['name']);
				}elseif($field['dataType'] == 'number'){
					$this->validateNumber($formPost[$field['name']],$field['name']);
				}elseif($field['dataType'] == 'date'){
					$this->validateDate($formPost[$field['name']],$field['name']);
				}elseif($field['dataType'] == 'key'){
					$this->validateKey($formPost[$field['name']],$field['name']);
				}elseif($field['dataType'] == 'boolean'){
					$this->validateBoolean($formPost[$field['name']],$field['name']);
				}elseif($field['dataType'] == 'many'){
					$this->validateMany($formPost[$field['name']],$field['name']);
				}
			}
		}
		if($this->formErrors == array()){
			return TRUE;
		}
		return FALSE;
	}

	private function validateText($data,$fieldName){
		$data = myClean($data,$this->CI);
		if($data != ""){
			$this->cleanedData[$fieldName] = $data;
		}
		return;
	}
	
	private function validateNumber($data,$fieldName){
		$data = myClean($data,$this->CI);
		if(is_numeric($data)){
			$this->cleanedData[$fieldName] = $data;
			return;
		}elseif($data == "" || $data == 'null'){
			return;
		}
		$this->formErrors[$fieldName] = 'Enter a number';
		return;
	}
	
	private function validateDate($data,$fieldName){
		$data = myClean($data,$this->CI);
		if(preg_match('/\d{2}\/\d{2}\/\d{4}/',$data)){
			$segments = preg_split('/\//',$data);
			$this->cleanedData[$fieldName] = $segments[2].'-'.$segments[0].'-'.$segments[1];
			return;
		}elseif($data == ""){
			return;
		}
		$this->formErrors[$fieldName] = 'Enter a date of the form mm/dd/yyyy';
		return;
	}
	
	private function validateKey($data,$fieldName){
		$data = myClean($data,$this->CI);
		if($data == 'null'){
			return;
		}	
		elseif(ctype_digit($data)){		
				if(array_key_exists($data, $this->arrays->getArray($fieldName))){
					$this->cleanedData[$fieldName] = $data;
					return;
				}
		}
		$this->formErrors[$fieldName] = 'You did not submit one of the specified values.';
		return;
	}
	
	private function validateMany($data,$fieldName){
		$data = myClean($data,$this->CI);
		if($data == 'null'){
					return;
		}elseif(is_array($data)){
			$array = array();
			$error = FALSE;
			foreach ($data as $value) {
				if(!array_key_exists($value, $this->arrays->getArray($fieldName))){
					$error = TRUE;
					break;
				}
				array_push($array,$value);
			}
			if(!$error){
				$this->cleanedData[$fieldName] = $array;
				return;
			}
		}
		
		$this->formErrors[$fieldName] = 'At least one submitted values was not acceptable.';
		return;
	}
	
	private function validateBoolean($data,$fieldName){
		if($data == '0' || $data == '1'){
			$this->cleanedData[$fieldName] = $data;
			return;
		}
		$this->formErrors[$fieldName] = 'You did not submit one of the specified values.';
		return;
	}
	
	/*
	 * --------------------------- INPUTTING DATA TO DATABASE --------------------------------------------
	*/
	
	public function save(){
		if($this->formErrors != array()){
			return FALSE;
		}
		$manyToManyRelations = null;
		$accountInfo = null;
		
		foreach($this->fieldInformation as $value){
			if(array_key_exists($value['name'], $this->cleanedData)){
				if($value['type'] == 'many'){
					$manyToManyRelations[$value['name']] = $this->cleanedData[$value['name']];
				}elseif($value['type'] == 'key'){
					$accountInfo[$value['name'].'_id'] = $this->cleanedData[$value['name']];
				}else{
					$accountInfo[$value['name']] = $this->cleanedData[$value['name']];
				}
			}
		}
		if(array_key_exists('account_id',$this->formData)){
			$this->model->insertAccountInfo($accountInfo,$this->formData['account_id']);
		}else{
			$this->model->insertAccountInfo($accountInfo);	
		}
		if(!is_null($manyToManyRelations)){
			foreach ($manyToManyRelations as $key => $value) {
				$this->model->insertManyRelations($key,$value);
			}	
		}
		
	}
	
		
}
