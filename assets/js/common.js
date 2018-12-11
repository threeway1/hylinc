(function($){
    // Header
    $(document).on('mouseenter focus','#gnb .container > ul > li', function(){
        $('body').addClass('opened');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#header', function(){
        $('body').removeClass('opened');
        $('#gnb .container > ul > li').removeClass('active');
    });
})(jQuery);