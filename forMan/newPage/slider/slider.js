$(document).ready(function () {
    $(".slidermin").slick({
        arrows: false,
        slidesToShow: 3,
        responsive:[{
            breakpoint:330,
            settings:{
                slidesToShow: 2,
            }
            
        }],
        asNavFor: ".slider",

    });
    $(".slider").slick({
        arrows: false,
        dots: false,
        fade:true,
        asNavFor: ".slidermin",
        adaptiveHeight: true,

    });
});