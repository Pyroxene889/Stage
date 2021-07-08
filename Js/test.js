$('select').chosen({geight: "30px"});

$('.chosen-toggle').each(function(index) {
    $(this).on('click', function(){
         $(this).parent().find('option').prop('selected', $(this).hasClass('select')).parent().trigger('chosen:updated');
    });
});






$(document).ready(function() {

   var delay = 1;
   $('.btn-default').click(function(e){
     e.preventDefault();
     var Form=$( "form" ).serializeArray();


    $.ajax({
      type: "POST",
      url: "ajax.php",
      data:Form,
      success: function(data)
      {
        setTimeout(function() {
         $('.message_box').html(data);
       }, delay);
     }
    });
  });
});
