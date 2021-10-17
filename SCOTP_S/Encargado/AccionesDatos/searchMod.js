//Busqueda para la ventana de "Modificar Registros"
//Se detecta lo que se ingresa al input
$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#entradaBusMod").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#entradaBusMod").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#entradaBusMod").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "AccionesDatos/searchMod.php", //Es la url desde el archivo html o php, donde esta el codigo html
                    data: "busMod="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#ress").html("<p align='center'></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resMod").empty();
                          $("#resMod").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});
