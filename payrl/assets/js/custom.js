
$(function(){
    var url = window.location;
    $('#color_change a[href="'+url+'"]').parent().addClass('active');
});


$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});


