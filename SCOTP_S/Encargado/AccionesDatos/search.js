//Busqueda para la ventana de "Ver Registros"

$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#entradaBus").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#entradaBus").keyup(function(e){//Se ejecutara cada vez que se ingrese un caracter al input
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#entradaBus").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "AccionesDatos/search.php", //Es la url desde el archivo html o php, donde esta el codigo html
                    data: "busVer="+consulta, //'b' es el nombre del input en el html, donde se ingresaran busquedas
                    dataType: "html",     //'consulta' es el valor obtenido del cuadro de texto (input)
                    beforeSend: function(){//Se le asigna a 'b' el valor de 'consulta'
                          //imagen de carga
                          $("#ress").html("<p align='center'></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#ress").empty();
                          $("#ress").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});