
// URL (http://stackoverflow.com/questions/19012495/smooth-scroll-to-div-id-jquery)
// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos}, 700);


});


// URL (https://css-tricks.com/slide-in-as-you-scroll-down-boxes/)
// Slide in effect on elements when they enter viewport of the device.


(function($) {

    /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

    $.fn.visible = function(partial) {

        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);

var win = $(window);

var allMods = $(".module");

allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("already-visible"); 
    } 
});

win.scroll(function(event) {

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("come-in");
        } 
    });

    if($("#menu").visible(true)) {
        $("#menuburgerimg").addClass("animateburger");
    }
    


});