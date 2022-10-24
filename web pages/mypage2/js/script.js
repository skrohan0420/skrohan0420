function openNav()
	{
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "150px";
  document.getElementById("side").style.marginLeft = "300px";
	}

function closeNav()
	{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("side").style.marginLeft = "0";

	}





window.onscroll = function() 
	{
		myFunction()
	}

var header = document.getElementById("NAVBAR");
var sticky = header.offsetTop;

function myFunction() 
   {
     if (window.pageYOffset > sticky)
  	 {
   		 header.classList.add("sticky");
 	 } 
 	 else
 	 {
   		 header.classList.remove("sticky");
 	 }
   }	