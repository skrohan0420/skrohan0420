
const INITIAL_VELOCITY = 0.085
const VELOCITY_CHANGE_RATE = 0
const NUMBER_OF_BALLS = 10


class Ball {
	constructor(ballElem) {
		this.ballElem = ballElem
		this.reset()
	}
	get x() {
		return parseFloat(getComputedStyle(this.ballElem).getPropertyValue("--x"))
	}
	set x(value) {
		this.ballElem.style.setProperty("--x", value)
	}
	get y() {
		return parseFloat(getComputedStyle(this.ballElem).getPropertyValue("--y"))
	}
	set y(value) {
		this.ballElem.style.setProperty("--y", value)
	}
	rect() {
		return this.ballElem.getBoundingClientRect()
	}
	reset() {
		this.x = 50
		this.y = 50
		this.direction = {
			x: 0
		}
		while (Math.abs(this.direction.x) <= 0.1 || Math.abs(this.direction.x) >= 0.9) {
			const heading = randomNumberBetween(0, 2 * Math.PI)
			this.direction = {
				x: Math.cos(heading),
				y: Math.sin(heading)
			}
		}
		this.velocity = INITIAL_VELOCITY
	}
	update(delta) {
		this.x += this.direction.x * this.velocity * delta
		this.y += this.direction.y * this.velocity * delta
		const rect = this.rect()

		if (rect.bottom >= window.innerHeight || rect.top <= 0) {
			this.direction.y *= -1
		}
		if (rect.right >= window.innerWidth || rect.left <= 0) {
			this.direction.x *= -1
		}

		//background color
		// const hue = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--hue"));
		// document.documentElement.style.setProperty("--hue", hue + delta * 0.02)
	}
}

function randomNumberBetween(min, max) {
	return Math.random() * (max - min) + min
}

var ballarr = []
for (var i = 0; i < NUMBER_OF_BALLS; i++) {
	const ballEl = document.createElement('div');
	ballEl.classList.add('ball');
	document.body.appendChild(ballEl);
	const ball = new Ball(ballEl);
	ballarr.push(ball);
}

let lastTime

function updateTime(time) {
	if (lastTime != null) {
		const delta = time - lastTime
		ballarr.forEach(ball => ball.update(delta));
	}
	lastTime = time
	window.requestAnimationFrame(updateTime)

}

updateTime(lastTime);
