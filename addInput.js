var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Account #" + (counter + 1) + " <br><input type='text' name='accountsRequested[]'>";
    	document.getElementById(divName).appendChild(newdiv);
        counter++;
     }
     var testDiv = document.createElement('div'); 
     /*for(var i=0;i<dropDown.length;i++){
		document.write("<b>dropDown["+i+"] is </b>=>"+dropDown[i]+"<br>");
	 } 
	 document.getElementById(divName).appendChild(testDiv); */
}