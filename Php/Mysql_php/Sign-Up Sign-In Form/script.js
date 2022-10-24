

const signinBtn = document.querySelector('.signinBtn') 
const signupBtn = document.querySelector('.signupBtn')
const formBx = document.querySelector('.formBx')
const body = document.querySelector('body')

const uName = document.getElementById('name')
const uEmail = document.getElementById('email')
const uNumber = document.getElementById('number')
const uPassword = document.getElementById('password')
const uConpassword = document.getElementById('conPassword')


const alName = document.getElementById('alertName')
const alEmalil = document.getElementById('alertEmail')
const alNumber = document.getElementById('alertNumber')
const alpass = document.getElementById('alertPassword')

const signin_form = document.getElementById('Signin-form')
const signup_form = document.getElementById('Signup-form')

const Signup_btn = document.getElementById("Signup-btn")
const Signin_btn = document.getElementById("Signin-btn")




signupBtn.onclick = function() {
	formBx.classList.add('active')
	body.classList.add('active')
}
signinBtn.onclick = function(){
	formBx.classList.remove('active')
	body.classList.remove('active')
}



function pass(pass) {
	if (uPassword.value == uConpassword.value){
		alpass.innerText = 'Matched'
		alpass.style = 'color:green'
	}
	else{	
		alpass.style = 'color:red'
		alpass.innerText = 'Passwords Dont Match'
	}

	
	if (uPassword.value == 0 && uConpassword.value == 0) {
		alpass.innerText = ''
	}
}

function passclear(){
	alpass.innerText = ''
}






function show(){
	let pass = document.getElementById('login_pass')


	if (pass.type == 'password'){
		pass.type = 'text'
		document.getElementById('show').textContent = 'hide'
	}
	else{
		pass.type = 'password';
		document.getElementById('show').textContent = 'show'

	}	

}
function showSignUp(){
	let cpass = document.getElementById('conPassword')


	if (cpass.type == 'password'){
		cpass.type = 'text'
		document.getElementById('showSign').textContent = 'hide'
	}
	else{
		cpass.type = 'password';
		document.getElementById('showSign').textContent = 'show'

	}	

}	



