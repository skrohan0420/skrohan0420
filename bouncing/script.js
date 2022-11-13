
const INITIAL_VELOCITY = 0.055
const VELOCITY_CHANGE_RATE = 0
const NUMBER_OF_BALLS = 30


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
		
		this.direction = {
			x: 0,
            y: 0
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

function sub(a,b) {
    if(a > b){
        return a - b
    }else{
        return b - a
    }
}

function pythagorean(a, b){
  return Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2))
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
		ballarr.forEach(ball1 => {
			ball1.update(delta)
            let x1 = ball1.x
            let y1 = ball1.y
            ballarr.forEach(ball2 => {
                
                let x2 = ball2.x
                let y2 = ball2.y

                // console.log('x','==>', x1,'-', x2 ,'==', sub(x1,x2),
                //             '|~~~~~~~~~~~~|',
                //             'y','==>', y1,'-', y2 ,'==', sub(y1,y2))

                let distance = Math.round(pythagorean(sub(x1,x2), sub(y1,y2)))

                // console.log(distance)
                if(distance < 2){
                    ball1.direction.x *= -1
                    ball1.direction.y *= -1
                    ball2.direction.x *= -1
                    ball2.direction.y *= -1
                }
                

            })
		});
	}
	lastTime = time
	window.requestAnimationFrame(updateTime)

}

updateTime(lastTime);
