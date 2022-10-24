		// HEX color


function getHexColor() {
	function getRandomHexColor(){

		function getRandomHexNum(){ 
			return Math.floor(Math.random() * 16).toString(16)
		}
		return '#' + Array.from({length: 6}).map(getRandomHexNum).join('')

	}


	var box = document.getElementById('box1')
	var text = document.getElementById('text1')

	var hexColor = `${getRandomHexColor()}`

	box.style.background = hexColor
	text.textContent = getRandomHexColor()
}






		// rgb color

function getRgbColor() {
	var box2 = document.getElementById('box2')
	var text2 = document.getElementById('text2')

	var red = Math.floor(Math.random() * 256).toString()
	var green = Math.floor(Math.random() * 256).toString()
	var blue = Math.floor(Math.random() * 256).toString()

	box2.style.background = `rgb(${red},${green},${blue})`
	text2.textContent = `rgb(${red},${green},${blue})`

}







		// Hsl color

function getHslColor() {
	var box3 = document.getElementById('box3')
	var text3 = document.getElementById('text3')

	var Hue	= Math.floor(Math.random() * 361).toString()
	var Saturation = Math.floor(Math.random() * 101).toString()
	var Lightness = Math.floor(Math.random() * 101).toString()

	box3.style.background = `hsl(${Hue},${Saturation}%,${Lightness}%)`
	text3.textContent = `hsl(${Hue},${Saturation}%,${Lightness}%)`
}