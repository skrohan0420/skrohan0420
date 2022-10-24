function cal()
{
	var A = Number(document.getElementById('side').value)
	var B = A * A 
	var C = A * 4
	var D = A * 1.41421356237309504880168872420969807856967187537694807317667973799

	if  (document.getElementById('ar').checked == true)
	{
		document.getElementById('res').innerHTML = B ;
	}
	else if (document.getElementById('per').checked == true)
	{
		document.getElementById('res').innerHTML = C ;
	}
	else
	{
		document.getElementById('res').innerHTML = D ;
	}	
}

function cat()
{
	var a = Number(document.getElementById('side1').value)
	var b = a * 3
	var c = (a * 1.732050807568877293527446341505872366942805253810380628055806) / 2
	var d = a * a
	var e = (d * 1.732050807568877293527446341505872366942805253810380628055806) / 4

	if (document.getElementById('are').checked == true)
	{
		document.getElementById('res1').innerHTML = e ;
	}
	else if (document.getElementById('peri').checked == true)
	{
		document.getElementById('res1').innerHTML = b ;
	}
	else
	{
		document.getElementById('res1').innerHTML = c ;
	}
}

function cad()
{
		var a = Number(document.getElementById('red').value)
		var b = a * a
		var c = 3.1415926535897932384626433 * b 
		var d = 2 * 3.1415926535897932384626433 * a

		if (document.getElementById('area').checked == true)
	    {
	    	document.getElementById('res2').innerHTML = c ;
	    }
	    else
	    {
	    	document.getElementById('res2').innerHTML = d ;
	    }
}