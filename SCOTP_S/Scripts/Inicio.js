function pixelaje()
{
	//var maxW = screen.width;
	//var maxH = screen.height;

	var maxW = window.innerWidth;
	var maxH = window.innerHeight;

	//document.getElementById('cabecera').innerHTML= maxW + " " + maxH;
	document.getElementById('principal').style.height=(maxH-90 + 'px');
	document.getElementById('pixeles').style.height=(maxH-90 + 'px');
	document.getElementById('todo').style.height=(maxH-90 + 'px');
	document.getElementById('trans').style.height=(maxH+90 + 'px');

}


var $logop = $('#logOp');
var $logen = $('#logEn');
var $regop = $('#regOp');
var $regen = $('#regEn');
var $trans = $('#trans');

var $btnRec = $('#recuperarBTN');
var $recOp = $('#recuperarOp');
var $regRec = $('#regresarRec');

var $btnRecEn = $('#recuperarBTNEN');
var $recEn = $('#recuperarEn');
var $regRecEn = $('#regresarRecEn');


function desactivar(){

	$logop.fadeOut();
	$logen.fadeOut();
	$regop.fadeOut();
	$regen.fadeOut();
	$trans.fadeOut();
	$recOp.fadeOut();
	$recEn.fadeOut();
}

$btnRec.click(

	function () {
		$recOp.css('visibility', 'visible');
	 	$recOp.fadeIn(1500);//Se hace visible

	 //Se aplica un filtro borroso detras de la ventana
	 

	 	$trans.css('visibility', 'visible');
		$trans.fadeIn(1500);
	}
);


$regRec.click(
	function () {
		$recOp.fadeOut(1500);//Se desabilita
	}
);



$btnRecEn.click(

	function () {
		$recEn.css('visibility', 'visible');
	 	$recEn.fadeIn(1500);//Se hace visible

	 //Se aplica un filtro borroso detras de la ventana
	 

	 	$trans.css('visibility', 'visible');
		$trans.fadeIn(1500);
	}
);


$regRecEn.click(
	function () {
		$recEn.fadeOut(1500);//Se desabilita
	}
);






/*
$("#opr").click(

 function()
	{
	 
		document.getElementById("opr").innerHTML = window.location.href='';
	 
	}
)
*/

var $operador = $('#opr');
var $encargado = $('#enc');


//Inicio de sesion de operador, formulario
$operador.click(

 function()
	{
	 $logop.css('visibility', 'visible');
	 $logop.fadeIn(1500);//Se hace visible

	 //Se aplica un filtro borroso detras de la ventana
	 

	 $trans.css('visibility', 'visible');
	 $trans.fadeIn(1500);

	}
);

//Salir del formulario de inicio de operador
$("#regresarL").click(

 function()
	{
	 
	 $logop.fadeOut(1500);//Se desabilita
	 $trans.fadeOut(1500);
	 
	}
);


//Inicio de sesion de encargado, formulario
$encargado.click(

 function()
	{
	 $logen.css('visibility', 'visible');
	 $logen.fadeIn(1500);//Se hace visible
	 $trans.css('visibility', 'visible');
	 $trans.fadeIn(1500);
	}
);

//Salir del formulario de inicio de encargado
$("#regresarE").click(

 function()
	{
	 
	 $logen.fadeOut(1500);//Se desabilita
	 $trans.fadeOut(1500);
	 
	}
);

////////////////////

//Boton de registrarme en el formulario de inicio del operador. 
//Te lleva al formulario de registro de operador
$('#registrarO').click(

 function()
	{
	 $regop.css('visibility', 'visible');
	 $regop.fadeIn(1500);//Se hace visible
	 $logop.fadeOut(1500);


	}
);

//Para salir del formulario de registro de operador
$("#regresarREGOP").click(

 function()
	{
	 
	 $regop.fadeOut(1500);//Se desabilita
	 $trans.fadeOut(1500);
	 
	}
);

//Para regresar al formulario de inicio de operador
$("#backREGOP").click(

 function()
	{
	 
	 $regop.fadeOut(1500);//Se desabilita
	 $logop.fadeIn(1500);
	 
	}
);


//boton registro del encargado
$('#registrarE').click(

 function()
	{
	 $regen.css('visibility', 'visible');
	 $regen.fadeIn(1500);//Se hace visible
	 $logen.fadeOut(1500);

	}
);


//Salir de formulario de registro de el encargado
$("#regresarREGEN").click(

 function()
	{
	 
	 $regen.fadeOut(1500);//Se desabilita
	 $trans.fadeOut(1500);
	 
	}
);

//Regresar al formulario de inicio de encargado
$("#backREGEN").click(

 function()
	{
	 
	 $regen.fadeOut(1500);//Se desabilita
	 $logen.fadeIn(1500);
	 
	}
);


$('#ojo').click(

	function (argument) {
		if ($('#inPass').attr('type') == 'text') {
			$('#inPass').attr('type', 'password');
		}else{
			$('#inPass').attr('type', 'text');
		}
	}
);

$('#ojo21').click(

	function (argument) {
		if ($('#con1').attr('type') == 'text') {
			$('#con1').attr('type', 'password');
		}else{
			$('#con1').attr('type', 'text');
		}
	}
);

$('#ojo22').click(

	function (argument) {
		if ($('#con2').attr('type') == 'text') {
			$('#con2').attr('type', 'password');
		}else{
			$('#con2').attr('type', 'text');
		}
	}
);


$('#ojo31').click(

	function (argument) {
		if ($('#con3').attr('type') == 'text') {
			$('#con3').attr('type', 'password');
		}else{
			$('#con3').attr('type', 'text');
		}
	}
);


$('#ojo41').click(

	function (argument) {
		if ($('#con4').attr('type') == 'text') {
			$('#con4').attr('type', 'password');
		}else{
			$('#con4').attr('type', 'text');
		}
	}
);


$('#ojo42').click(

	function (argument) {
		if ($('#con5').attr('type') == 'text') {
			$('#con5').attr('type', 'password');
		}else{
			$('#con5').attr('type', 'text');
		}
	}
);






	
