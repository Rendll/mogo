import $ from "jquery";
import 'slick-carousel'
import collapse from "bootstrap/js/src/collapse.js";

$(function () {

let header = $(".header"),
    introH = $(".hero__content").innerHeight(),
    scrollOffset = $(window).scrollTop();

/* Fixed Header */
checkScroll(scrollOffset);

$(window).on("scroll", function() {
    scrollOffset = $(this).scrollTop();
    checkScroll(scrollOffset);
});

function checkScroll(scrollOffset) {
    if( scrollOffset >= introH ) {
        header.addClass("header--fixed");
    } else {
        header.removeClass("header--fixed");
    }
}

$(".nav-toggle").on("click", function(event) {
    event.preventDefault();
    console.log(1);
    $(".header").toggleClass("header--open");
});

$('.slider-hero').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    appendDots: $('.hero__slick-nav'),
    customPaging : function(slider, i) {
        let counter = 1;
        counter += i;
        if(counter < 10 ){
            counter = '0' + counter;
        }
        let title = $(slider.$slides[i]).find('.hero__slide').data('title');
        return '<span class="hero__slick-num">' + counter + '</span><span class="hero__slick-text">' + title + '</span>';
    }
});

$('.quote-slider').slick({
    arrows: true,
    slidesToShow: 1
});

$('.partners__slider').slick({
    arrows: false,
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 460,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
    ]
});

})