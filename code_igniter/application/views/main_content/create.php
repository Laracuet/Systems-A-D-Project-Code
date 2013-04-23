<?php
echo form_open("");
?>
<div class="row center">
	<?php
		$form->createHtml();
	?>
</div>
<div class="row">
	<div class="center">
		<?php
			echo form_submit(array('name'=>'submit','value'=>'Submit','class'=>'btn btn-large btn-primary'));
		?>
	</div>
</div>
<?php
echo form_close();
?>