// loader
$(function loaderLoad() {
    if ($(".loader").length) {
        $(".loader").delay(200).fadeOut(300);
    }
    $(".loader_disabler").on("click", function () {
        $("#loader").hide();
    });
});

// Bottom To Top Scroll Script
$(window).on("scroll", function () {
    var height = $(window).scrollTop();
    console.log(height);
    if (height > 100) {
        $("#backToTop").fadeIn();
    } else {
        $("#backToTop").fadeOut();
    }
});

// Script For Fix Header on Scroll
$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header").addClass("header-fixed");
    } else {
        $(".header").removeClass("header-fixed");
    }
});

// item slide
$(".review-slide").slick({
    slidesToShow: 3,
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    cssEase: "linear",
    autoplaySpeed: 2000,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: true,
                dots: false,
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                arrows: true,
                dots: false,
                slidesToShow: 1,
            },
        },
    ],
});
