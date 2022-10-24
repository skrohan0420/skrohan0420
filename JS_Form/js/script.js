function firstName(name){
	let format1 = /[A-Za-z][ ][A-Za-z]/;
	let format2 = /[0-9]/;

	let firstName = document.getElementById('inFirstName').value;
	let alertFirstName = document.getElementById('alertFirstName');

	if (firstName.length == 0){
		alertFirstName.innerHTML = ' *enter your first name';
	}
	else if (format2.test(name)) {
		alertFirstName.innerHTML = " *numbers not allowed";
	}	

	validate();
}
	function firstNameO(){
		//This is to hide alerts on click

		alertFirstName.innerHTML = '';

		 validate();
	}






function lastName(name){
	let format1 = /[A-Za-z][ ][A-Za-z]/;
	let format2 = /[0-9]/;

	let lastName = document.getElementById('inLastName').value;
	let alertLastName = document.getElementById('alertLastName');

	if (lastName.length == 0){
		alertLastName.innerHTML = ' *enter your last name';
	}
	else if (format2.test(name)) {
		alertLastName.innerHTML = " *numbers not allowed";
	}

	validate();
}
	function lastNameO(){
		//This is to hide alerts on click

			alertLastName.innerHTML = '';
			 validate();

	}







function email(email){
	let format = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	let Email = document.getElementById('inEmail').value;
	let alertEmail = document.getElementById('alertEmail');

	if (email.length == 0){
		alertEmail.innerHTML = ' *enter your email';
	}
	else if (format.test(email)){
		alertEmail.innerHTML = '';
	}
	else{
		alertEmail.innerHTML = ' *enter a valid email';
	}

	validate();

}
	function emailO(){
		//This is to hide alerts on click

		alertEmail.innerHTML = '';
		 validate();

	}







function phone(phone){
	let Phone = document.getElementById('inPhone').value;
	let alertPhone = document.getElementById('alertPhone');

	if ((phone.length < 10 || phone.length > 10) && (phone.length > 0)){
		alertPhone.innerHTML = ' *not a valid number';
	}
	else if (phone.length == 0){
		alertPhone.innerHTML = ' *enter a number';
	}
	else if (phone[0] == 6 || phone[0] == 7 || phone[0] == 8 || phone[0] == 9){
		alertPhone.innerHTML = '';
	}
	else if (phone[0] == 1 || phone[0] == 2 || phone[0] == 3 || phone[0] == 4 || phone[0] == 5 || phone[0] == 0) {
		alertPhone.innerHTML = ' *not a valid number';
	}

	validate();
}
	function phoneO(){
		//This is to hide alerts on click
		
		alertPhone.innerHTML = '';
		 validate();

	}






function cpass(cpass, pass){
	let alertPass = document.getElementById('alertPass');
	let Pass = document.getElementById('inPass').value;

	let alertcPass = document.getElementById('alertCPass');
	let cPass = document.getElementById('inCPass').value;

	if (pass.length == 0) {
		alertPass.innerHTML = ' *enter a password';
	}
	else if (cpass.length == 0){
		alertcPass.innerHTML = ' *re-enter password';
	}	
	else if (pass == cpass){
		alertcPass.innerHTML = '';
	}
	else{
		alertcPass.innerHTML = ' *password not matched';
	}

	validate();
}
	function cpassO(){
		//This is to hide alerts on click
		let alertPass = document.getElementById('alertPass');
		let Pass = document.getElementById('inPass').value;

		let alertcPass = document.getElementById('alertCPass');
		let cPass = document.getElementById('inCPass').value;


		alertcPass.innerHTML = '';
		 validate();


	}	





function pass(pass){
	let alertPass = document.getElementById('alertPass');
	let Pass = document.getElementById('inPass').value;

	let alertcPass = document.getElementById('alertCPass');
	let cPass = document.getElementById('inCPass').value;

	if (pass.length == 0){
		alertPass.innerHTML = ' *enter a password';
	}
	else{
		if (pass.length >= 8){
			alertPass.innerHTML = '';
		}
		else{
			alertPass.innerHTML = ' *mininun 8 chareters';
		}	
	}	

	cpass(cpass, pass)
	validate();

}
	function passO(){
		//This is to hide alerts on click

		let alertPass = document.getElementById('alertPass');
		alertPass.innerHTML = '';
		 validate();

	}





function show()
{
	let cPass = document.getElementById('inCPass');


	if (cPass.type == 'password') {
		cPass.type = 'text';
	}
	else{
		cPass.type = 'password';
	}	

}	






function getBirthDay(){
	let days = document.getElementById('birthday').value;
	console.log(days);
}

function getBirthMonth(){
	let months = document.getElementById('birthmonth').value;
	console.log(months);
}

function getBirthYear(){
	let years = document.getElementById('birthyear').value;
	console.log(years);
}








function gender(){
    let gen = document.getElementsByName('Gender');
              
    for(i = 0; i < gen.length; i++){
        if(gen[i].checked == true){

        	console.log(gen[i].value)

    	}
    }
}







function optbirth(){
	document.getElementById('alertBirthday').innerHTML =  '*optional';
	document.getElementById('alertBirthday').style.position = 'absolute';
	document.getElementById('alertBirthday').style.color = 'green';
}







function validate(){
	let efname = document.getElementById('alertFirstName').innerHTML.length;
	let elname = document.getElementById('alertLastName').innerHTML.length;
	let eemail = document.getElementById('alertEmail').innerHTML.length;
	let ephone = document.getElementById('alertPhone').innerHTML.length;
	let epass  = document.getElementById('alertPass').innerHTML.length;
	let ecpass = document.getElementById('alertCPass').innerHTML.length;

	let infname = document.getElementById('inFirstName').value.length;
	let inlname = document.getElementById('inLastName').value.length;
	let inemail = document.getElementById('inEmail').value.length;
	let inphone = document.getElementById('inPhone').value.length;
	let inpass  = document.getElementById('inPass').value.length;
	let incpass = document.getElementById('inCPass').value.length;

	//let terms = document.getElementById('inTerms')


	if (efname == 0 && infname > 0 && elname == 0 && inlname > 0 && eemail == 0 && inemail > 0 && ephone == 0 && inphone > 0 && epass == 0 && inpass > 0 && ecpass == 0 && incpass > 0){
		document.getElementById('crtBtn').disabled = false;
	}
	else{
		document.getElementById('crtBtn').disabled = true;
	}	
	
	
	
}







// function valueac(){



// 	let infnamev = document.getElementsByName('userFirstName').value;
// 	let inlnamev = document.getElementsByName('userLastName').value;
// 	let inemailv = document.getElementsByName('userEmail').value;
// 	let inphonev = document.getElementsByName('userPhoneNumber').value;	
// 	let inpassv  = document.getElementsByName('userPassword').value;
// 	let incpassv = document.getElementsByName('usercPassword').value;
// 	let checkBox = document.getElementById('inTerms');


// 		// document.getElementById('after-submit').style.display = 'block';
// 		// document.getElementById('mainForm').style.display = 'none';

// 		document.getElementById('Name').innerHTML  = infnamev + ' ' + inlnamev;
// 		document.getElementById('Email').innerHTML = inemailv;
// 		document.getElementById('Phone').innerHTML = inphonev;
// 		//document.getElementById('password').innerHTML = Inpassv;
	
// }
