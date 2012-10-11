
/* This click javascript function is mainly used to tabbing sub directory of the entire payroll system */

$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
 
/* This function is used to change the color in nav bar list*/

$(function(){
    var url = window.location;
    url = url.toString();  
    var frag = url.split("/");    
    var res_url = "http://"+frag[frag.length-3]+"/"+frag[frag.length-2];
    $('#color_change a[href^="'+res_url+'"]').parent().addClass('active');
});


 $('#datepicker').datepicker(); 

$('.fileupload').fileupload();

