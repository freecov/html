!function ($) {
  $(function(){
      $("[rel='tooltip']").tooltip();
  });
  
  $('.dropdown form').on('click', function (e) {
  e.stopPropagation()
  });
  
}(window.jQuery);


