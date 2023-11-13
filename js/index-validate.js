$(document).ready(function() {

    //para validacion condicional
    function getTipoNotificador() {
        console.log("getTipoNotificador!");
       
        //int con la cant de radio "No medico" selecconado (obvio que debe ser solo 1 max)
        var sel_no_med =$("#FormularioIncidentes").find("#personal_notifica2:checked").length;
        //int con la cant de radio "Estudiane" selecconado (obvio que debe ser solo 1 max)
        var sel_estudiante =$("#FormularioIncidentes").find("#personal_notifica3:checked").length;
  
        console.log('No med :'+sel_no_med);
        console.log('Estud  :'+sel_estudiante);
  
        if ((sel_no_med==1)||(sel_estudiante==1)){
          return 1;
        } else{
          return 0;
        }
        
      }
  
      function getEventoAdverso(){
        console.log("Radio event advers selecc");
        var sel_event_advers = $("#FormularioIncidentes").find("#tipo_incidente2:checked").length;
        if (sel_event_advers==1){
          console.log("Radio event advers selecc, 1");
          return 1;
        }else{
          console.log("Radio event advers selecc, 0");
          return 0;
        }
  
      }


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

    });