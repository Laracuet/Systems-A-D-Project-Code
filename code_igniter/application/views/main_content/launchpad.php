<div class="row">
	<div class="span12 title">
		<h1>
			Search for Customer
		</h1>
	</div>
</div>
<div class="row">
	<?php echo form_open(uri_string()); ?>
	<div class="span5 center">
		<?php echo form_input(array('name'=>'survey','class'=>'input-block-level customer-search','placeholder'=>'Survey Id')); ?>
		<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
	</div>
	<div class="span2">
		<h2>
			OR
		</h2>
	</div>
	<div class="span5 center">
		<?php echo form_input(array('name'=>'customer_id','class'=>'input-block-level customer-search','placeholder'=>'Customer Id')); ?>
		<img src="<?php echo base_url('theme/img/question_mark.jpg');?>" height="40" width="40" />
	</div>
</div>