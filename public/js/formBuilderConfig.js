
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
});