
<!-- Creating a new Survey should bring up this form -->
<br />
<div class="row newCustomerForm">
	<?php echo form_open(''); ?>
	<div class="companyInfo span5">
		
		<?php echo form_label('Name','Name');
		 echo form_input(array('name'=>'Name', 'id'=>'Name', 'placeholder'=>'Name'));
		
		 echo form_label('Cloud Vendors','cloud_vendors');
		 echo form_multiselect('cloud_vendors',$arrays->getArray('cloud_vendors'));
		
		 echo form_label('Account Type','account_type');
		 echo form_dropdown('account_type',$arrays->getArray('account_type'));
		 
		 echo form_label('BDR Competition','bdr_competition');
		 echo form_multiselect('bdr_competition',$arrays->getArray('bdr_competition'));
		 
		 echo form_label('Classification','classification');
		 echo form_dropdown('classification',$arrays->getArray('classification'));
		 
		 echo form_label('Company Since','CompanySince');
		 echo form_input(array('name'=>'Company Since', 'id'=>'CompanySince', 'maxlength'=> '4', 'placeholder'=>'mm/dd/yyyy'));
		
		 echo form_label('Competitive Product','CompetitiveProduct');
		 echo form_input(array('name'=>'Competitive Product', 'id'=>'CompetitiveProduct', 'placeholder'=>'Competitive Product'));
		
		 echo form_label('CRM Application','crm_applications');
		 echo form_multiselect('crm_applications',$arrays->getArray('crm_applications'));
		
		 echo form_label('Data Center','datacenter');
		 echo form_dropdown('datacenter',$arrays->getArray('datacenter'));
		 
		 echo form_label('Date Registered','DateRegistered');
		 echo form_input(array('name'=>'Date Registered', 'id'=>'DateRegistered', 'placeholder'=>'mm/dd/yyyy'));
		
		 echo form_label('Hosted Apps','hosted_apps');
		 echo form_multiselect('hosted_apps',$arrays->getArray('hosted_apps'));
		 
		 echo form_label('Hypervisor/Virtualization Platforms','hypervisor_virtualization_platform');
		 echo form_multiselect('hypervisor_virtualization_platform',$arrays->getArray('hypervisor_virtualization_platform'));
		 
		 echo form_label('Industry Affiliations','industry_affiliates');
		 echo form_multiselect('industry_affiliates',$arrays->getArray('industry_affiliates'));
		 
		 echo form_label('MSP Since','MSPSince');
		 echo form_input(array('name'=>'MSP Since', 'id'=>'MSPSince', 'placeholder'=>'mm/dd/yyyy'));
		
		 echo form_label('Annual Revenue','AnnualRevenue');
		 echo form_input(array('name'=>'Annual Revenue', 'id'=>'AnnualRevenue', 'placeholder'=>'Annual Revenue'));
		
		 echo form_label('Employee Count','EmployeeCount');
		 echo form_input(array('name'=>'Employee Count', 'id'=>'EmployeeCount', 'placeholder'=>'Employee Count'));
		
		 echo form_label('Active Client Count','ActiveClientCount');
		 echo form_input(array('name'=>'Active Client Count', 'id'=>'ActiveClientCount', 'placeholder'=>'Active Client Count'));
		
		 echo form_label('Average Client Size','AverageClientSize');
		 echo form_input(array('name'=>'Average Client Size', 'id'=>'AverageClientSize', 'placeholder'=>'Average Client Size'));
		
		 echo form_label('MSP Client Count','MSPClientCount');
		 echo form_input(array('name'=>'MSP Client Count', 'id'=>'MSPClientCount', 'placeholder'=>'MSP Client Count'));
		
		 echo form_label('Product Feedback','ProductFeedback');
		 echo form_textarea(array('name'=>'Product Feedback', 'id'=>'ProductFeedback', 'placeholder'=>'Product Feedback'));
		 
		 echo form_label('PSA Vendor','psa_vendor');
		 echo form_dropdown('psa_vendor',$arrays->getArray('psa_vendor'));
		
		 echo form_label('Region','region');
		 echo form_dropdown('region',$arrays->getArray('region'));
		 
		 echo form_label('RMM Adoption','rmm_adoption');
		 echo form_multiselect('rmm_adoption',$arrays->getArray('rmm_adoption'));
		 
		 echo form_label('RMM Competition','rmm_competition');
		 echo form_multiselect('rmm_competition',$arrays->getArray('rmm_competition'));?>
		 
		
	</div>
	
	
	<div class="companyInfo span5">
		
		<?php echo form_label('Service Delivery','ServiceDelivery'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Service Delivery', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Service Delivery', '0', False); ?>
		
		<?php echo form_label('Service Quality','ServiceQuality'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Service Quality', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Service Quality', '0', False); ?>
		
		<?php echo form_label('Technical Expertise','TechnicalExpertise'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Technical Expertise', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Technical Expertise', '0', False);
		
		 echo form_label('Technician Count','TechnicianCount');
		 echo form_input(array('name'=>'Technician Count', 'id'=>'TechnicianCount', 'placeholder'=>'Technician Count'));
		
		 echo form_label('Tech Ops Review Date','TechOpsReviewDate');
		 echo form_input(array('name'=>'Tech Ops Review Date', 'id'=>'TechOpsReviewDate', 'placeholder'=>'mm/dd/yyyy'));
        
		 echo form_label('Target Industry Verticals','target_industry_verticals');
		 echo form_dropdown('target_industry_verticals',$arrays->getArray('target_industry_verticals'));
				 
		 echo form_label('Total Server Agents','TotalServerAgents');
		 echo form_input(array('name'=>'Total Server Agents', 'id'=>'TotalServerAgents', 'placeholder'=>'Total Server Agents'));
		
		 echo form_label('Total Servers Managed','TotalServersManaged');
		 echo form_input(array('name'=>'Total Servers Managed', 'id'=>'TotalServersManaged', 'placeholder'=>'Total Servers Managed'));
		
		 echo form_label('Total Site Count','TotalSiteCount');
		 echo form_input(array('name'=>'Total Servers Managed', 'id'=>'TotalServersManaged', 'placeholder'=>'Total Servers Managed')); ?>
		
		
		<?php echo form_label('24x7 Support','24x7Support'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('24x7 Support', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('24x7 Support', '0', False); ?>
		
		<?php echo form_label('Brand Value and Market Visibility','BrandValueandMarketVisibility'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Brand Value and Market Visibility', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Brand Value and Market Visibility', '0', False); ?>
		
		<?php echo form_label('Mobile Support','MobileSupport'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Mobile Support', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Mobile Support', '0', False); ?>
		
		<?php echo form_label('Mac Support','MacSupport'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Mac Support', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Mac Support', '0', False); ?>
		
		<?php echo form_label('Client Ticketing','ClientTicketing'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Client Ticketing', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('ClientTicketings', '0', False); ?>
		
		<?php echo form_label('HelpDesk','HelpDesk'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('HelpDesk', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('HelpDesk', '0', False); ?>
		
		<?php echo form_label('Linux Support','LinuxSupport'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Linux Support', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Linux Support', '0', False); ?>
		
		<?php echo form_label('NOC','NOC'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('NOC', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('NOC', '0', False); ?>
		
		<?php echo form_label('NOC Communications','NOCCommunications'); ?>
		<?php echo form_textarea(array('name'=>'NOC Communications', 'id'=>'NOCCommunications', 'placeholder'=>'NOC Communications')); ?>
		
		<?php echo form_label('Office Count','OfficeCount'); ?>
		<?php echo form_input(array('name'=>'Office Count', 'id'=>'OfficeCount', 'placeholder'=>'Office Count')); ?>
		
		<?php echo form_label('Patch Mgmt','PatchMgmt'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Patch Mgmt', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Patch Mgmt', '0', False); ?>
		<?php 
		echo form_label('Ticketing Application','ticketing_application');
		echo form_dropdown('ticketing_application',$arrays->getArray('ticketing_application'));
		
		echo form_label('Satisfaction Rating','SatisfactionRating');
		echo form_dropdown('Satisfaction Rating', $oneToTen, '5');
		
		echo form_label('Satisfaction Rating Comments','SatisfactionRatingComments');
		echo form_textarea(array('name'=>'Satisfaction Rating Comments', 'id'=>'SatisfactionRatingComments', 'placeholder'=>'Comments')); 
		
		echo form_label('Total Client Count','TotalClientCount');
		echo form_input(array('name'=>'Total Client Count', 'id'=>'TotalClientCount', 'placeholder'=>'Total Client Count'));
		
		echo form_label('Total Desktop Agents','TotalDesktopAgents');
		echo form_input(array('name'=>'Total Desktop Agents', 'id'=>'TotalDesktopAgents', 'placeholder'=>'Total Desktop Agents'));
		
		echo form_label('Total Desktops Managed','TotalDesktopsManaged');
		echo form_input(array('name'=>'Total Desktops Managed', 'id'=>'TotalDesktopsManaged', 'placeholder'=>'Total Desktops Managed'));
		
		echo form_label('Virtualization','Virtualization'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Virtualization', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Virtualization', '0', False); ?>
		
		<?php
		echo form_label('Virtualization Platform','virtualization_platform');
		echo form_multiselect('virtualization_platform',$arrays->getArray('virtualization_platform'));
		
		?>
		
	</div>
	
</div>
<div class="row center">
	<?php echo form_submit(array('name'=>'submit','class'=>'btn btn-large btn-primary'), 'Submit'); ?>
	<?php echo form_close(); ?>
</div>