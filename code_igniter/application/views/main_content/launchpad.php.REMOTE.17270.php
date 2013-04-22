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



