

function UpdateCounter(){
	var counter = document.getElementById("counter");
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function()
	{
		if(this.status==200 && this.readyState==4)
		{
			document.getElementById("counter").innerHTML = this.responseText;
			
		}
	};
	ajax.open("GET","ajax.php", true);
	ajax.send();
	
}

setTimeout(UpdateCounter , 2000);
setInterval(UpdateCounter, 1000);

