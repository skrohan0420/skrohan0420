function ite(){

	var	itCount = Number(document.getElementById('iteCount').value);

	var r0 = document.getElementById('rand0');
	var r1 = document.getElementById('rand1');
	var r2 = document.getElementById('rand2');
	var r3 = document.getElementById('rand3');
	var r4 = document.getElementById('rand4');
	var r5 = document.getElementById('rand5');
	var r6 = document.getElementById('rand6');
	var r7 = document.getElementById('rand7');
	var r8 = document.getElementById('rand8');
	var r9 = document.getElementById('rand9');


	for(x=1; x<=itCount; x++){
		var rand = Math.floor(Math.random()*10);

		if (rand == 0){
			r0.innerHTML = r0.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 1){
			r1.innerHTML = r1.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 2){
			r2.innerHTML = r2.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 3){
			r3.innerHTML = r3.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 4){
			r4.innerHTML = r4.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 5){
			r5.innerHTML = r5.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 6){
			r6.innerHTML = r6.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 7){
			r7.innerHTML = r7.innerHTML + '<span>' + x + '</span>';
		}
		else if (rand == 8){
			r8.innerHTML = r8.innerHTML + '<span>' + x + '</span>';
		}
		else{
			r9.innerHTML = r9.innerHTML + '<span>' + x + '</span>';
		}
	}
}