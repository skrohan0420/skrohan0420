
		//Scroll Header Effect

window.addEventListener('scroll', function(){
	var header = document.querySelector('header');

	header.classList.toggle('sticky', window.scrollY > 50);
	
});

		//Toggleable Menu Bar 

function toggleMenu() {
	var menuToggle = document.querySelector('.toggle');
	var menu = document.querySelector('.menu');

	menuToggle.classList.toggle('active');
	menu.classList.toggle('active');
};






window.addEventListener('scroll', function(){
	var lines1 = document.querySelector('.line1');
	var lines2 = document.querySelector('.line2');
	var lines3 = document.querySelector('.line3');
	var lines4 = document.querySelector('.line4');


	lines1.classList.toggle('active', window.scrollY > 600);
	lines2.classList.toggle('active', window.scrollY > 600);
	lines3.classList.toggle('active', window.scrollY > 600);
	lines4.classList.toggle('active', window.scrollY > 600);
	
});



	