<div class="row" id="log-in-form">
	<div class="span5 offset1">
		<h2>
			Welcome!
		</h2>
		<p>
			Hello Acoount Managers. Here is where you can record and update your survey results
			 from current and/or prospective customers. Please login in order to continue.
		</p>
	</div>
	
	<div class="span5 offset1">
		<?php
			echo form_open(uri_string(),array('class' => 'form-signin'));
		?>
		<h1>
			Log In
		</h1>
		<?php
			echo form_input(array('name'=>'username','class'=>'input-block-level','placeholder'=>'Username'));
			echo form_password(array('name'=>'password','class'=>'input-block-level','placeholder'=>'Password'));
			
			echo form_submit(array('name'=>'submit','value'=>'Log In','class'=>'btn btn-large btn-primary'));
			echo form_close();
		?>
	</div>
</div>