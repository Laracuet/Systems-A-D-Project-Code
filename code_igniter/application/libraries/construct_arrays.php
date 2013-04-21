<?php

class Construct_arrays {
	
	private $account_type,$bdr_competition,$classification, $cloud_vendors, $crm_applications,$datacenter,$hosted_apps,
	$hypervisor_virtualization_platform,$industry_affiliates,$psa_vendor,$region,$rmm_adoption,$target_industry_verticals,
	$ticketing_application,$virtualization_platform;
	
	private $CI;
		
	function __construct(){
		// Table
		$this->account_type = createArray('account_type');
		$this->bdr_competition = createArray('bdr_competition',TRUE);
		$this->classification = createArray('classification');
		$this->cloud_vendors = createArray('cloud_vendors',TRUE);
		$this->crm_applications = createArray('crm_applications',TRUE);
		$this->datacenter = createArray('datacenter');
		$this->hosted_apps = createArray('hosted_apps',TRUE);
		$this->hypervisor_virtualization_platform = createArray('hypervisor_virtualization_platform',TRUE);
		$this->industry_affiliates = createArray('industry_affiliates',TRUE);
		$this->psa_vendor = createArray('psa_vendor');
		$this->region = createArray('region');
		$this->rmm_adoption = createArray('rmm_adoption',TRUE);
		$this->target_industry_verticals = createArray('target_industry_verticals',TRUE);
		$this->ticketing_application = createArray('ticketing_application');
		$this->virtualization_platform = createArray('virtualization_platform',TRUE);
		
		// get instance
		$this->CI =& get_instance();
	}
	
	public function getArray($attrName){
		return $this->$attrName;
	}
	
	private function createArray($tableName,$manyToMany = FALSE){
		$this->CI->load->model('construct_arrays_model');
		if($manyToMany){
			$tableName .= '_many';
		}
		$this->CI->construct_arrays_model->createArray($tableName);
		
	}
}
