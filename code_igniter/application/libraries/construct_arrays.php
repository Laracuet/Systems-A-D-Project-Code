<?php

class Construct_arrays {
	
	private $account_type,$bdr_competition,$classification, $cloud_vendors, $crm_applications,$datacenter,$hosted_apps,
	$hypervisor_virtualization_platform,$industry_affiliates,$psa_vendor,$region,$rmm_adoption,$target_industry_verticals,
	$ticketing_application,$virtualization_platform;
	
	private $CI;
		
	function __construct(){
		// get instance
		$this->CI =& get_instance();
		// Table
		$this->account_type = $this->createArray('account_type');
		$this->bdr_competition = $this->createArray('bdr_competition',TRUE);
		$this->classification = $this->createArray('classification');
		$this->cloud_vendors = $this->createArray('cloud_vendors',TRUE);
		$this->crm_applications = $this->createArray('crm_applications',TRUE);
		$this->datacenter = $this->createArray('datacenter');
		$this->hosted_apps = $this->createArray('hosted_apps',TRUE);
		$this->hypervisor_virtualization_platform = $this->createArray('hypervisor_virtualization_platform',TRUE);
		$this->industry_affiliates = $this->createArray('industry_affiliates',TRUE);
		$this->psa_vendor = $this->createArray('psa_vendor');
		$this->region = $this->createArray('region');
		$this->rmm_adoption = $this->createArray('rmm_adoption',TRUE);
		$this->rmm_competition = $this->createArray('rmm_competition',TRUE);
		$this->target_industry_verticals = $this->createArray('target_industry_verticals',TRUE);
		$this->ticketing_application = $this->createArray('ticketing_application');
		$this->virtualization_platform = $this->createArray('virtualization_platform',TRUE);
	}
	
	public function getArray($attrName){
		return $this->$attrName;
	}
	
	private function createArray($tableName,$manyToMany = FALSE){
		$this->CI->load->model('construct_arrays_model');
		$array = $this->CI->construct_arrays_model->createArray($tableName);
		
		if(is_null($array)){
			return array();
		}elseif(!$manyToMany){
			$array['select'] = '--Select--';
		}
		return $array;
	}
}
