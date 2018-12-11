(function($){
    $(document).ready(function(){
        setInterval(function(){
            $("#visual .slogan").addClass("action");
        }, 1000);
    });

    // visual slide
    $(window).ready(function(){
        $('.visual-slide').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            dots: true
        });
    });

    // education-list
    $(window).ready(function(){
        $('.education-list').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: true,
            vertical: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev"><i class="icon-up-open"><span class="sr-only">이전글</span></i></button>',
            nextArrow: '<button class="slick-next"><i class="icon-down-open"><span class="sr-only">다음글</span></i></button>'
        });
    });

    // notice-lit
    $(window).ready(function(){
        $('.notice-list').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: true,
            prevArrow: '<button class="slick-prev"><i class="icon-left-open"><span class="sr-only">이전글</span></i></button>',
            nextArrow: '<button class="slick-next"><i class="icon-right-open"><span class="sr-only">다음글</span></i></button>'
        });
    });
})(jQuery);