$('nav a').click(function (element) {
    element.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top,
        menuHeight = $('nav').innerHeight();
    $('html, body').animate({
        scrollTop: targetOffset - menuHeight
    }, 500)
});

//-------------------------------------------------//

jQuery(function () {
    jQuery(window).scroll(function () {
        var navbar = $("#navbar-standard");
        if (jQuery(this).scrollTop() > 500) {
            navbar.removeClass("navbar-transparent");
            navbar.addClass("navbar-color");
        } else {
            navbar.removeClass("navbar-color");
            navbar.addClass("navbar-transparent");
        }
    });
});