var myVar = setInterval(function(){ aleatorio() }, 3000);
function aleatorio() {
	document.getElementById("aleatorio").innerHTML = Math.floor(Math.random() * 100);
}