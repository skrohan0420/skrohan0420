
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
	}
]




const maxVal = 400
const betweenVal = 20 


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

	


