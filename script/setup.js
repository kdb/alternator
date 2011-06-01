$(document).ready(function(){
  // If device is Apple change field focus beahavoiur.
  if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i)) {
    $('label[for]').click(function () {
      var el = $(this).attr('for');
      if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {
        return;
      } else {
        $('#' + el)[0].focus();
      }
    });
  }

  // Add body class if orientation is landscape.
  if(window.orientation != 0){
    document.body.className+=' landscape';
  }

  // Unbind events on reserve-now ?????
  $('.reserve-now').unbind();

  // Disable autocompletion on ting search field.
  $('input.ting-autocomplete').each(function () {
    $(this).unbind();

    // Place in-field label.
    $("#search label").inFieldLabels({
      fadeOpacity:"0.2",
      fadeDuration:"100"
    });		
  });

  // Enable sticky behaviour to elements (user/status page buttons mostly).
  $(".sticky-element").sticky({
    topSpacing:0,
    className:'sticky'
  });

  // Detecte collapsible items
  $('.title-collapsible').toggle(
    function() {
      // Display item and remove class.
      $(this).removeClass('collapsed')
      $('.collapsible-info', $(this).parent()).removeClass('collapsed').slideDown(200);
    },
    function() {
      // Hide item and add class.
      $(this).addClass('collapsed')
      $('.collapsible-info', $(this).parent()).slideUp(200).addClass('collapsed');
   });
   // Collapse add collapsible items and add class.
   $('.title-collapsible').addClass('collapsed');
   $('.collapsible-info').hide().addClass('collapsed');
});


// Disable modal login box.
Drupal.behaviors.dingLibraryUserLoginDialog = function () {
  var loginPath = Drupal.settings.basePath + 'user/login';
  $("a[href^='" + loginPath + "']").unbind('click');
}; 

// Add window orientation detection.
window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", function() {
  if(window.orientation != 0){
    document.body.className+=' landscape';
  }
  else{
    document.body.className = document.body.className.replace(' landscape','');
  }
}, false);
