
jQuery(function($) {
  var $formEditor = $(document.getElementById('formEditor')),
    $formContainer = $(document.getElementById('formRender')),
    fbOptions = {
      onSave: function() {
        $formEditor.toggle();
        $formContainer.toggle();
        $('form', $formContainer).formRender({
          formData: formBuilder.formData
        });
      },
       i18n: {
    	locale: 'es-ES'
  		}
    },
    formBuilder = $formEditor.formBuilder(fbOptions);

  $('.edit-form', $formContainer).click(function() {
    $formEditor.toggle();
    $formContainer.toggle();
  });

  document.getElementById('grabarJSON').addEventListener('click', function() {
   //al hacer click en grabar se ejecuta esto
    
    var metodo='POST';
    var action='/procesos/saveform';
    var parametros = {
                id    : id_proceso,
                form  : formBuilder.actions.getData('json')
        };
    $.ajax({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
       type: metodo,
       url: action,
       data: parametros,
       success:function(data){
          $('.msjRespuesta').html(data);
          alert("Los Datos fueron agregados con exito");
       },
       error:function(jqXHR, textStatus, errorThrow){
          console.log('Error : '+ errorThrow);
       }
    }); 
  });

});

/*
var proc=proce;
    var metodo='POST';
    var action='/procesos/saveform';
    var MsjError='<script> alert("Error al enviar los datos")</scrpt>';
    var MsjEnviando= 'Enviando... Por Favor Espere';
    $.ajax({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
       type: metodo,
       url: action,
       data: proc,
       beforeSend: function(){
          $('.msjRespuesta').html(MsjEnviando);
       },
       error: function(){
          $('.msjRespuesta').html(MsjError);
       },
       success:function(data){
          $('.msjRespuesta').html(data);
       }
    }); 
    console.log(proc); 
    return false;
*/