$(function (){
  $('#asd').hide();
  $('#seg').hide();
  $('#azsd').prop('disabled', true);
 

  $('#show').click(function (){
  $('#azsd').prop('disabled', false);
  $('#asd').fadeIn();
  $('#seg',).fadeIn();


  $('#hide').click(function (){
  $('#azsd').prop('disabled',true);
  $('#asd',).fadeOut();
  $('#seg',).fadeOut();
  })
  })
})