document.addEventListener('mousemove', parallaxText);

function parallaxText(e) {
	this.querySelectorAll('.layer').forEach(Layer => {
		let x = (window.innerWidth - e.pageX * 2)/2;
		Layer.style.transform = `translateX(${x}px)`;
	})
}