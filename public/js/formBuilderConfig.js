
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
    var datos=proce;
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
       data: datos,
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
    console.log(proce); 
    return false;
  });

});

