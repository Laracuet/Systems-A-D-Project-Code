<div class="row">
	<div class="span6">
		<div class="row title">
			<div class="center">
				<h1>
					Search for Customer
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="center">
				<?php echo form_open(''); ?>
				<?php echo form_input(array('name'=>'survey','class'=>'input-block-level customer-search','placeholder'=>'Survey Id')); ?>
				<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
			</div>
		</div>
		<div class="row">
			<div class="center">
				<h2>
					OR
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="center">
				<?php echo form_input(array('name'=>'customer_id','class'=>'input-block-level customer-search','placeholder'=>'Customer Id')); ?>
				<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
			</div>
		</div>
		<div class="row">
			<div class="center">
				<?php echo form_submit(array('name'=>'submit','class'=>'btn btn-large btn-primary'), 'Search'); ?>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="row title">
			<h1>
				Create New Survey
			</h1>
		</div>
		<div class="row">
			<div class="center">
				<a href="<?php echo site_url('customers/add/'); ?>" class="btn btn-large btn-primary"> Create</a>
			</div>
		</div>
	</div>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
<div class="newCustomerCreateSubmit">
	<?php echo form_submit(array('name'=>'submit','class'=>'btn btn-large btn-primary'), 'Create'); ?>
	<?php echo form_close(); ?>
</div>



<!-- Creating a new Survey should bring up this form -->
<br />
<div class="newCustomerForm">
	<?php echo form_open(''); ?>
	<div class="companyInfo span5">
		
		<?php echo form_label('Name','Name'); ?>
		<?php echo form_input(array('name'=>'Name', 'id'=>'Name', 'placeholder'=>'Name')); ?>
		
		<?php echo form_label('Company Since','CompanySince'); ?>
		<?php echo form_input(array('name'=>'Company Since', 'id'=>'CompanySince', 'maxlength'=> '4', 'placeholder'=>'mm/dd/yyyy')); ?>
		
		<?php echo form_label('Date Registered','DateRegistered'); ?>
		<?php echo form_input(array('name'=>'Date Registered', 'id'=>'DateRegistered', 'placeholder'=>'mm/dd/yyyy')); ?>
		
		<?php echo form_label('Competitive Product','CompetitiveProduct'); ?>
		<?php echo form_input(array('name'=>'Competitive Product', 'id'=>'CompetitiveProduct', 'placeholder'=>'Competitive Product')); ?>
		
		<?php echo form_label('Annual Revenue','AnnualRevenue'); ?>
		<?php echo form_input(array('name'=>'Annual Revenue', 'id'=>'AnnualRevenue', 'placeholder'=>'Annual Revenue')); ?>
		
		<?php echo form_label('MSP Since','MSPSince'); ?>
		<?php echo form_input(array('name'=>'MSP Since', 'id'=>'MSPSince', 'placeholder'=>'mm/dd/yyyy')); ?>
		
		<?php echo form_label('Employee Count','EmployeeCount'); ?>
		<?php echo form_input(array('name'=>'Employee Count', 'id'=>'EmployeeCount', 'placeholder'=>'Employee Count')); ?>
		
		<?php echo form_label('Active Client Count','ActiveClientCount'); ?>
		<?php echo form_input(array('name'=>'Active Client Count', 'id'=>'ActiveClientCount', 'placeholder'=>'Active Client Count')); ?>
		
		<?php echo form_label('Average Client Size','AverageClientSize'); ?>
		<?php echo form_input(array('name'=>'Average Client Size', 'id'=>'AverageClientSize', 'placeholder'=>'Average Client Size')); ?>
		
		<?php echo form_label('MSP Client Count','MSPClientCount'); ?>
		<?php echo form_input(array('name'=>'MSP Client Count', 'id'=>'MSPClientCount', 'placeholder'=>'MSP Client Count')); ?>
		
		<?php echo form_label('Product Feedback','ProductFeedback'); ?>
		<?php echo form_textarea(array('name'=>'Product Feedback', 'id'=>'ProductFeedback', 'placeholder'=>'Product Feedback')); ?>
		
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
		<?php echo form_radio('Technical Expertise', '0', False); ?>
		
		<?php echo form_label('Technician Count','TechnicianCount'); ?>
		<?php echo form_input(array('name'=>'Technician Count', 'id'=>'TechnicianCount', 'placeholder'=>'Technician Count')); ?>
		
		<?php echo form_label('Tech Ops Review Date','TechOpsReviewDate'); ?>
		<?php echo form_input(array('name'=>'Tech Ops Review Date', 'id'=>'TechOpsReviewDate', 'placeholder'=>'mm/dd/yyyy')); ?>
		
		<?php echo form_label('Total Server Agents','TotalServerAgents'); ?>
		<?php echo form_input(array('name'=>'Total Server Agents', 'id'=>'TotalServerAgents', 'placeholder'=>'Total Server Agents')); ?>
		
		<?php echo form_label('Total Servers Managed','TotalServersManaged'); ?>
		<?php echo form_input(array('name'=>'Total Servers Managed', 'id'=>'TotalServersManaged', 'placeholder'=>'Total Servers Managed')); ?>
		
		<?php echo form_label('Total Site Count','TotalSiteCount'); ?>
		<?php echo form_input(array('name'=>'Total Servers Managed', 'id'=>'TotalServersManaged', 'placeholder'=>'Total Servers Managed')); ?>
		
		
	</div>
	
	
	<div class="companyInfo span5">
		
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
		
		<?php echo form_label('Satisfaction Rating','SatisfactionRating'); ?>
		<?php echo form_dropdown('Satisfaction Rating', $oneToTen, '5'); ?>
		
		<?php echo form_label('Satisfaction Rating Comments','SatisfactionRatingComments'); ?>
		<?php echo form_textarea(array('name'=>'Satisfaction Rating Comments', 'id'=>'SatisfactionRatingComments', 'placeholder'=>'Comments')); ?>
		
		<?php echo form_label('Total Client Count','TotalClientCount'); ?>
		<?php echo form_input(array('name'=>'Total Client Count', 'id'=>'TotalClientCount', 'placeholder'=>'Total Client Count')); ?>
		
		<?php echo form_label('Total Desktop Agents','TotalDesktopAgents'); ?>
		<?php echo form_input(array('name'=>'Total Desktop Agents', 'id'=>'TotalDesktopAgents', 'placeholder'=>'Total Desktop Agents')); ?>
		
		<?php echo form_label('Total Desktops Managed','TotalDesktopsManaged'); ?>
		<?php echo form_input(array('name'=>'Total Desktops Managed', 'id'=>'TotalDesktopsManaged', 'placeholder'=>'Total Desktops Managed')); ?>
		
		<?php echo form_label('Virtualization','Virtualization'); ?>
		<p1>Yes</p1>
		<?php echo form_radio('Virtualization', '1', False); ?>
		<p1>No</p1>
		<?php echo form_radio('Virtualization', '0', False); ?>
		
		
	</div>
	
</div>

=======
>>>>>>> cbe5c6f7873596e476d683b8ce0a86a09563f790
=======
>>>>>>> cbe5c6f7873596e476d683b8ce0a86a09563f790



