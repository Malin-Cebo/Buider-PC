if ($(window).width() > 991) {
    $('header').mouseleave(function (e) {
        $('.active').removeClass('active')
    })
    $('.submenu').mouseenter(function (e) {
        $('.mar-top.active').removeClass('active')
        $('#' + $(this).data('menu')).addClass('active')
    })
    $('header').mouseleave(function (e) {
        $('.mar-top.active').removeClass('active')
    })
    $('.submenu2').mouseenter(function (e) {
        $('.submenu2.active').removeClass('active')
        $(this).addClass('active')
        $('.col-menu.active').removeClass('active')
        $('#' + $(this).data('submenu')).addClass('active')
    })
    $('header').mouseleave(function (e) {
        $('.col-menu.active').removeClass('active')
        $('.submenu2.active').removeClass('active')
    })
}
// <!-- 	###############################        for sm menu               #######################################  -->
else {
    $('header').addClass('active')
    $('section').addClass('active')
    $('.submenu2').removeAttr('href')
    $('.sidebarIconToggle').click(function (e) {
        $('.menu-sm').toggleClass('active')
        $('#men').toggleClass('active-sm')
        $('header').toggleClass('active-sm')
        $('body').toggleClass('active-sm')
    })
    $('.submenu2').click(function (e) {
        $('.submenu2.active').removeClass('active')
        $(this).addClass('active')
        $('.col-menu.active').removeClass('active')
        $('#' + $(this).data('submenu')).addClass('active')
    })
}

if ($(window).width() < 768) {
    $('.absolute-xs').addClass('active')
}

$(document).ready(function () {
    $('.slick-cont').slick({
        infinite: true,
        arrows: true,
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
    })
})

$(document).ready(function () {
    $('.num2').text($('.slick-item:not(.slick-cloned)').length)
})
$('.slick-cont').on('afterChange', function (e, s, currentSlide) {
    $('.num1').text(currentSlide + 1)
})
