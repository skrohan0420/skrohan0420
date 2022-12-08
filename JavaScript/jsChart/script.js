
const data = [
	{
		name : 'A',
		value : 100
	},
	{
		name : 'B',
		value : 190
	},
	{
		name : 'C',
		value : 70
	},
	{
		name : 'D',
		value : 200
	},
	{
		name : 'E',
		value : 140
	},
	{
		name : 'F',
		value : 130
	},
	{
		name : 'G',
		value : 220
	},
	{
		name : 'H',
		value : 170
	},
	{
		name : 'I',
		value : 240
	}
]




const maxVal = 300
const betweenVal = 50 


const dataInt = document.querySelector('.dataInt')
const dataCol = document.querySelector('.dataCol')
const dataColNames = document.querySelector('.dataColNames')



for(i = 0; i < maxVal; i++){
	if(i % betweenVal == 0 ){
		dataInt.innerHTML += '<p class="colInt" style="height:'+ betweenVal +'px">'+ i +'</p>'
	}
}


data.forEach(item => {
	dataCol.innerHTML += '<div class="col" style="height: '+ item.value +'px">'+ '<p>' + item.name +'</p>' +'</div>'
})

	


