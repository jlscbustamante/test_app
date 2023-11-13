$(document).ready(function() {    

    var variableGlobal = "Esto es una Variable Global";//Declarada Fuera de la funcion
    $.fn.miFuncion = function() {
        var variableLocal = "Esto es una Variable Local"
        variableGlobalFuncion = "Esto es una Variable Global dentro de función";
        //se muestran las dos variables
        alert("Variable Global dentro de la función: " + variableGlobal);
        alert("Variable Local dentro de la función " + variableLocal);
        alert("Variable Global Local dentro de la función " + variableGlobalFuncion);

        validador = $("#FormularioIncidentes").validate({        
            rules: {           
                
                descripcion :{
                    required : function(element){
                        //llama a la función getTipoNotificador, que aplica la  
                        //lógica según sea que algún radio button ha sido seleccionado
                        return (getTipoNotificador() == 1);
                    },
                  },
                //sel_event_adver
                sel_event_adver :{
                    required : function(element){
                        //llama a la función getEventoAdverso, que aplica la  
                        //lógica según sea que algún radio button ha sido seleccionado
                        return (getEventoAdverso() == 1);
                    },              
      
                }
      
              },
              messages : {
                descripcion : {
                  required : "Ingresar la descripcion"
                },
                sel_event_adver : {
                  required : "Seleccionar una opción"
                }
      
              },          
            submitHandler: function(form) {
                alert('submitHandler valid form');
                
            }
            });
            
    }

});
