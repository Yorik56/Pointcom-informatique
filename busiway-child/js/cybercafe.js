  jQuery(function ($) {
    $("#accordion").accordion()
  });
  jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
        jQuery('.nav').addClass('affix');
        console.log("OK");
    } else {
        jQuery('.nav').removeClass('affix');
    }
});