  $( function() {
    $( "#accordion" ).accordion();
  } );
    $( function() {
    $( "#datepicker" ).datepicker({
    	minDate: "-1D",
      changeMonth: true,
      changeYear: true    	
    });
  } );

$(document).ready(function() {
  $('.photo_muestra').click(function(event) {
    var url = $(this).attr("src");
    alert(url);
    $("#photo_principal").fadeOut();
    $("#photo_principal").attr('src', url);

  });
});

  $(document).ready(function() { $('body').bootstrapMaterialDesign(); });