

function pixelaje()
{
	//var maxW = screen.width;
	//var maxH = screen.height;

	var maxW = window.innerWidth;
	var maxH = window.innerHeight;

	//document.getElementById('cabecera').innerHTML= maxW + " " + maxH;


	document.getElementById('pixeles').style.height=(maxH-30 + 'px');
	document.getElementById('todo').style.height=(maxH-30 + 'px');
	document.getElementById('trans').style.height=(maxH + 'px');

	//325

	document.getElementById('principal').style.height=(maxH-247 + 'px');


}

var $ventanaCam = $('#cambiarOp');
var $cambiarIMG = $('#cambiarPass');
var $regCam = $('#regresarCam');
var $fondo = $('#trans');

$(document).ready(

	function () {
		$ventanaCam.fadeOut();
		$fondo.fadeOut();
	}

);


$cambiarIMG.click(

	function (argument) {
		$ventanaCam.css('visibility', 'visible');
		$ventanaCam.fadeIn(1500);

		$fondo.css('visibility', 'visible');
		$fondo.fadeIn(1500);
	}
);

$regCam.click(

	function (argument) {
		$ventanaCam.fadeOut(1500);
		$fondo.fadeOut(1500);
	}
);


$('#ojo1').click(

	function (argument) {
		if ($('#con1').attr('type') == 'text') {
			$('#con1').attr('type', 'password');
		}else{
			$('#con1').attr('type', 'text');
		}
	}
);


$('#ojo2').click(

	function (argument) {
		if ($('#con2').attr('type') == 'text') {
			$('#con2').attr('type', 'password');
		}else{
			$('#con2').attr('type', 'text');
		}
	}
);





