$('.anchor').click(function (element) {
    if (element !== 'link') {
        element.preventDefault();
    }
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

//-------------------------------------------------//

debounce = function(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

(function() {
    var $target = $('.anime'), animationClass = 'anime-start', offset = $(window).height() * 3/4;

    function animeScroll() {
        var documentTop = $(document).scrollTop();

        $target.each(function() {
            var itemTop = $(this).offset().top;
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass);
            }
            else {
                $(this).removeClass(animationClass);
            }
        })
    }

    animeScroll();

    $(document).scroll(debounce(function() {
        animeScroll();
    }, 200));
}());