$(function () {
    const scrollLink = $('div[class*="__navbar__brand"] a[href^="#"], nav a[href^="#"], div[class*="hero-"] a[href^="#"]');
    scrollLink.on('click', function (e) {
        e.preventDefault();

        if ($(this).length) {
            var id = $(this).attr('href');
            var targetOffset = $(id).position().top;
            const menuHeight = $('div[class*="header-"]').innerHeight();

            $('html, body').stop().animate({
                scrollTop: targetOffset - menuHeight
            }, 800);

        } else {
            $('html, body').stop().animate({
                scrollTop: 0
            }, 800);
        }
    });

    $('.menu-item-has-children > a').click(function (e){
        e.preventDefault();
    });
});

