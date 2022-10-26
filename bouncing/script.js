// code for ball

const INITIAL_VELOCITY = 0.085
const VELOCITY_CHANGE_RATE = 0

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
    this.direction = {x : 0}

    while (Math.abs(this.direction.x) <= 0.1 || Math.abs(this.direction.x) >= 0.9) {

      const heading = randomNumberBetween(0, 2 * Math.PI)
      this.direction = { x: Math.cos(heading), y: Math.sin(heading) }

    }
    this.velocity = INITIAL_VELOCITY
  }



update(delta,index) {
console.log(delta,index)
    this.x += this.direction.x * this.velocity * delta
    this.y += this.direction.y * this.velocity * delta

    // this.velocity += VELOCITY_CHANGE_RATE * delta
    // this.velocity -= VELOCITY_CHANGE_RATE / delta

    const rect = this.rect()

    if (rect.bottom >= window.innerHeight || rect.top <= 0) {
      this.direction.y *= -1
    }
    if (rect.right >= window.innerWidth || rect.left <= 0) {
      this.direction.x *= -1
    }

    //background color
    const hue = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--hue"));
    document.documentElement.style.setProperty("--hue", hue + delta * 0.02)
  }
}

function randomNumberBetween(min, max) {
  return Math.random() * (max - min) + min
}













var ballarr = []

for(var i = 0; i <= 10; i++){
    document.querySelector('body').innerHTML +=  `<div class="ball" id="ball${i}"></div>`

    ballarr[i] = new Ball(document.querySelector(`#ball${i}`))
}



console.log(ballarr)






// const ball = new Ball(document.querySelector("#ball"))



let lastTime

function updateTime(time) {
  if (lastTime != null) {
    const delta = time -  lastTime
    
   ballarr.map((val, index) => {
   val.update(delta, index)
   
   })

   
  }
  lastTime = time
  window.requestAnimationFrame(updateTime)
}

window.requestAnimationFrame(updateTime)





