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
    $("#photo_principal").fadeOut();
    $("#photo_principal").attr('src', url);

  });

  $('.dropdown-item').hover(function() {
    $('.muestra').attr({
      src: 'http://34.230.134.197/amalia/web/images/amazon1/8457_az1.jpg',
      class: 'img-responsive',
      width: '150rem'
    });
    alert($(this).attr('id'));
  });
});




  $(document).ready(function() { $('body').bootstrapMaterialDesign(); });