$(document).ready(function(){
  $('.clickReadmore').click(function(){
    $(this).parent().find('.read_more').show();
    $(this).parent().find('.clickReadless').show();
    $(this).hide();
  })

  $('.clickReadless').click(function(){
    $(this).parent().find('.read_more').hide();
    $(this).hide();
    $(this).show();
  })
})