 

let milseconds = document.getElementById('mil');
let seconds = document.getElementById('sec');
let minute = document.getElementById('mnt')
let hours = document.getElementById('hr')
let days = document.getElementById('day')

let ms = 0
let sec = 0
let min = 0
let hr = 0
let day = 0 


function timer(){
    ms++
    if (ms >= 100){
        sec++
        ms = 0
    }
    if (sec === 60){
        min++
    	sec = 0
    }
    if (min === 60){
   		hr++
   		min = 0
   	}
   	if (hr === 24){
   		day++
   		ms,sec,min,hr = 0;
   	}

  	let a = ms < 10 ? `0`+ ms : ms;
    let b = sec < 10 ? `0`+ sec : sec;
    let c = min < 10 ? `0` + min : min;
    let d = hr < 10 ? `0` + hr : hr;
    let e = day < 10 ? `0` + day : day;

    milseconds.textContent = a     
    seconds.textContent = b     
    minute.textContent = c     
    hours.textContent = d    
 	days.textContent = e  

 	  
}
function style(){
	seconds.classList.add('a')
}

setInterval(timer,10)
setInterval(style,10)        