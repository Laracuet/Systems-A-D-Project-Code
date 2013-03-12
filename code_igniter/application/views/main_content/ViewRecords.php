<style>
#dynamicInput {
		margin-left: 50px;	
}

#addButton {
        position: relative;
        left: 50px; 
        font-size: 115%; 
}
</style>
<script src="/theme/js/addInput.js" language="Javascript" type="text/javascript"></script>
<form method="POST">
	<div id="dynamicInput">
			Account #1 <br><input type="text" name="myInputs[]">
	</div>
<input id="addButton" type="button" value="+" onClick="addInput('dynamicInput');">
</form>
