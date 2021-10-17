
function pixelaje()
{
	//var maxW = screen.width;
	//var maxH = screen.height;

	var maxW = window.innerWidth;
	var maxH = window.innerHeight;

	//document.getElementById('cabecera').innerHTML= maxW + " " + maxH;

	//document.getElementById('pixeles').style.height=(maxH + 'px');
	
}

$(document).ready(
	function (argument) {
		var maxH = window.innerHeight;
		$('#sombra').css('height', maxH+1500 + 'px');
		$('#pixeles').css('height', maxH + 'px');
		$('#verReg').css('height', maxH-80 + 'px');
		$('#modReg').css('height', maxH-80 + 'px');
		//$('#addReg').css('height', maxH-80 + 'px');
		$('#funcionalidades').css('height', maxH-350 + 'px');
	}
);

$(window).resize(
		function (argument) {
			var maxH = window.innerHeight;
			$('#sombra').css('height', maxH+1500 + 'px');
			$('#pixeles').css('height', maxH + 'px');
			$('#verReg').css('height', maxH-80 + 'px');
			$('#modReg').css('height', maxH-80 + 'px');
			//$('#addReg').css('height', maxH-80 + 'px');
			$('#funcionalidades').css('height', maxH-350 + 'px');
		}
);



var $sombra = $("#sombra");

var $venMostrar = $("#verReg");
var $btnMostrar = $("#visualizar");
var $btnAtras = $("#imBack");

var $venModificar = $("#modReg");
var $btnModificar = $("#modificar");
var $btnAtrasMod = $("#imBackMod");

var $venAdd = $("#addReg");
var $btnAdd = $("#agregar");
var $btnAtrasAdd = $("#imBackAdd");


onload=function() {
	
	$venMostrar.fadeOut();
	$venModificar.fadeOut();
	$venAdd.fadeOut();
	$sombra.fadeOut();

}

//Ventana para mostrar registros
$btnMostrar.click(
	function () {
		
		$venMostrar.css('visibility', 'visible');
		$venMostrar.fadeIn(1500);

		$sombra.css('visibility', 'visible');
		$sombra.fadeIn(1500);
	}
);

$btnAtras.click(
	function () {
		$venMostrar.fadeOut(1500);
		$sombra.fadeOut(1500);
	}

);


//Ventana para modificar registros
$btnModificar.click(
	function () {
		
		$venModificar.css('visibility', 'visible');
		$venModificar.fadeIn(1500);

		$sombra.css('visibility', 'visible');
		$sombra.fadeIn(1500);
	}
);

$btnAtrasMod.click(
	function () {
		$venModificar.fadeOut(1500);
		$sombra.fadeOut(1500);
	}
);


//Ventana para agregar unidades
$btnAdd.click(
	function () {
		
		$venAdd.css('visibility', 'visible');
		$venAdd.fadeIn(1500);

		$sombra.css('visibility', 'visible');
		$sombra.fadeIn(1500);
	}
);

$btnAtrasAdd.click(
	function () {
		$venAdd.fadeOut(1500);
		$sombra.fadeOut(1500);
	}
);

////////////

var $ventanaCam = $('#cambiarEn');
var $cambiarIMG = $('#cambiarPass');
var $regCam = $('#regresarCam');
var $fondo = $('#sombra');

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
		$('body').css('overflow-y', 'hidden');

		$fondo.css('visibility', 'visible');
		$fondo.fadeIn(1500);
	}
);

$regCam.click(

	function (argument) {
		$ventanaCam.fadeOut(1500);
		$fondo.fadeOut(1500);
		$('body').css('overflow-y', 'visible');
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