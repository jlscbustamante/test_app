$(document).ready(function() {    

  $(document).miFuncion();
  //alert("Variable Global fuera de la función: " + variableGlobal); //se sigue mostrando
  //alert("Variable Local fuera de la función " + variableLocal); // ya no se muest
  alert("Variable Global dentro de la función " + variableGlobalFuncion); // 

  $('body').on('DOMNodeInserted', '.modal-backdrop', function () {
          
      $(this).css('position','relative');
  });

  $("#modalIncidentes").appendTo("body");

  $('#crearIncidencias').click(function () {
      console.log('modal');
      $('#id').val('');
      $("#registrarIncidentes").attr("id","registrarIncidentes");
      $("#registrarIncidentes").attr("disabled",false);
      $('#FormularioIncidentes').trigger("reset");
      $('#tituloFormularioIncidentes').html("Formato de registro y reporte de Incidentes y Eventos Adversos");
      $('#modalIncidentes').modal('show');
      
      $("#tbl_PERS_CONV_EVEAD tbody").empty(); 
      $("#tbl_ACCI_CORRECT tbody").empty(); 
      $("#tbl_ACCI_PREVENT tbody").empty(); 
  });

  $("#personal_que_notifica").hide();
  $("input[name=personal_notifica]").each(function(index) {
      $(this).click(function () {      
      
          if($(this).val()=='NO MEDICO' || $(this).val()=='ESTUDIANTE'){
            $('#personal_que_notifica').show(); 
          }else{
            //caja de texto descripcion
            //segun la logica que pidio luis, el campo descripcion se debe quedar con el ultimo valor 
            //ingresado
            //$("input[name=descripcion]").val(''); 
            $("#FormularioIncidentes").validate().resetForm();
            $("#personal_que_notifica").hide();
            // validador.element( "#myselect" );
            validador.element(this);
            //validador.resetForm();

          }
      });
  });
  
  $("#tipo_de_eventos_adversos").hide();
  $("input[name=tipo_incidente]").each(function(index) {
      $(this).click(function () {      
          if($(this).val()=='EVENTO ADVERSO'){
          $('#tipo_de_eventos_adversos').show(); 
          }else{
              $("#FormularioIncidentes").validate().resetForm();
              //Seleccionar el option por defecto del select
              $("select[name=sel_event_adver]").val("").change();
              $("#tipo_de_eventos_adversos").hide();
          }
      });
  }); 


  $('#registrarIncidentes').click(function (e) {
      //e.preventDefault(); 
  
      //personal_notifica1
      console.log('Clic');

      if (false){
      
          console.log("form true valid");
  
          swal({
            buttons: true,
            title: "¿Desea Realizar el Registross?",
            text: "Recuerde verificar que todos los datos sean correctos.",
            icon: "warning",
            dangerMode: true,
          }).then((willDelete) => {
              if (willDelete) { 
  
                $('#FormularioIncidentes').trigger("reset");
                $('#modalIncidentes').modal('hide');
  
                swal({
                  buttons: false,
                  title: "Registro Exitoso",
                  text: "Datos registrados Exitosamente.",
                  icon: "success",
                  timer: 1500,
                });
  
              } else {
                
                $(this).attr('disabled', false);
                swal({
                  buttons: false,
                  title: "Operación Cancelada",
                  text: "Proceso de Registro Cancelado.",
                  icon: "error",
                  timer: 1500,
                });
  
              }
            });
      }else{
        console.log("form false valid");
      }
  
    });



});