<div class="row">
	<div class="span6 title">
		<h1>
			Search for Customer
		</h1>
	</div>
	<div class="span6 title">
		<h1>
			Create New Survey
		</h1>
	</div>
</div>

<div class="row">
	<?php echo form_open(''); ?>
	<div class="span6 center">
		<?php echo form_input(array('name'=>'survey','class'=>'input-block-level customer-search','placeholder'=>'Survey Id')); ?>
		<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
	</div>
</div>

<div class="row">
	<div class="span5 center">
		<h2>
			OR
		</h2>
	</div>
</div>

<div class="row">
	<div class="span6 center">
		<?php echo form_input(array('name'=>'customer_id','class'=>'input-block-level customer-search','placeholder'=>'Customer Id')); ?>
		<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
	</div>
</div>

<div class="row">
	<div class="span5 center">
		<?php echo form_submit(array('name'=>'submit','class'=>'btn btn-large btn-primary'), 'Search'); ?>
		<?php echo form_close(); ?>
	</div>
</div>


<div class="newCustomerCreate">
	<?php echo form_open(''); ?>
	<div class="span4 center">
		<?php echo form_input(array('name'=>'survey','class'=>'input-block-level customer-search','placeholder'=>'Name')); ?>
		<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40"/>
	</div>
</div>
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
		<?php echo form_input(array('name'=>'Company Since', 'id'=>'CompanySince', 'maxlength'=> '4', 'placeholder'=>'Company Since')); ?>
		
		<?php echo form_label('Date Registered','DateRegistered'); ?>
		<?php echo form_input(array('name'=>'Date Registered', 'id'=>'DateRegistered', 'placeholder'=>'Date Registered')); ?>
		
	</div>
	<div class="companyInfo span5">
		<?php echo form_label('Competitive Product','CompetitiveProduct'); ?>
		<?php echo form_input(array('name'=>'Competitive Product', 'id'=>'CompetitiveProduct', 'placeholder'=>'Competitive Product')); ?>
		
		<?php echo form_label('Annual Revenue','AnnualRevenue'); ?>
		<?php echo form_input(array('name'=>'Annual Revenue', 'id'=>'AnnualRevenue', 'placeholder'=>'Annual Revenue')); ?>
		
		<?php echo form_label('MSP Since','MSPSince'); ?>
		<?php echo form_input(array('name'=>'MSP Since', 'id'=>'MSPSince', 'placeholder'=>'MSP Since')); ?>
		
	</div>
</div>




