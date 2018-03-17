var myVar = setInterval(function(){ aleatorio() }, 3000);
function aleatorio() {
	document.getElementById("aleatorio").innerHTML = Math.floor(Math.random() * 100);
	document.getElementById("temp1").innerHTML = Math.floor(Math.random() * 100);
	document.getElementById("temp2").innerHTML = Math.floor(Math.random() * 100);
	document.getElementById("temp3").innerHTML = Math.floor(Math.random() * 100);
}