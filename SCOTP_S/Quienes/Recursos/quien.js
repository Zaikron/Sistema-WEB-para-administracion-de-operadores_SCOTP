function pixelaje()
{
	//var maxW = screen.width;
	//var maxH = screen.height;

	var maxW = window.innerWidth;
	var maxH = window.innerHeight;

	//document.getElementById('cabecera').innerHTML= maxW + " " + maxH;


	document.getElementById('pixeles').style.height=(maxH + 'px');
	document.getElementById('pixeles').style.width=(maxW + 'px');

	document.getElementById('cubrir').style.height=(maxH + 'px');
	document.getElementById('cubrir').style.width=(maxW + 'px');



}