

	var	input = document.getElementById('input');
	//console.log(input.value);
	var output = document.getElementById('output');
	//output.innerHTML = 'true';
	Toggle();
	
function Toggle() {
    if (input.type === "password") {
       	input.type = "text";
    		document.getElementById('showHide').innerHTML = 'Hide'
       	}
       else {
        input.type = "password";
    		document.getElementById('showHide').innerHTML = 'Show'
       }
}


function encprypt(){
		
		var str = document.getElementById('input').value;

			for (var i = 0; i < str.length; i++) {
 			 	//console.log(str.charAt(i));

 			 	var singleStr = str.charAt(i);
 			 	var cipherText = [];

 			 	if (singleStr == 'a'){
 			 		document.write('00a0a')
 			 	}
 			 	else if (singleStr == 'b'){
 			 		document.write('11b1b')
 			 	}
 			 	else{
 			 		document.write('none')
 			 	}
 			 	document.write(cipherText.join('|'))
 			 	
 			 	break
 			}
 			

}

