<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>한양대학교 LINC 사업단</title>
    <link rel="stylesheet" href="/assets/fontello/css/fontello.css">
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <script>
        (function($){
            $(document).ready(function(){
                setInterval(function(){
                    $("#visual .slogan").addClass("action");
                }, 1000);
            });
            
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
            
            // visual slide
            $(window).ready(function(){
                $('.visual-slide').slick({
                    autoplay: true,
                    autoplaySpeed: 6000,
                    arrows: false,
                    dots: true
                });
            });
        })(jQuery);
    </script>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <section id="visual">
        <ul class="visual-slide">
            <li style="background-image: url(/assets/images/main/img_visual_slide01.jpg);"></li>
            <li style="background-image: url(/assets/images/main/img_visual_slide02.jpg);"></li>
            <li style="background-image: url(/assets/images/main/img_visual_slide03.jpg);"></li>
        </ul>
        <div class="slogan">
            <div class="container">
                <i>사회맞춤형 산학협력 선도대학 육성사업</i>
                <h2>
                    <span class="first-txt"><i class="blue">L</i>eaders in</span><br>
                    <span class="second-txt"><i class="green">I</i><i class="orange">N</i>dustry-university</span><br>
                    <span class="third-txt"><i class="red">C</i>ooperation<sup><i class="icon-plus"></i></sup></span>
                </h2>
                <div class="business-list">
                    <ul>
                        <li class="university">
                            <dl>
                                <dt><img src="/assets/images/main/icon_university.png" alt=""></dt>
                                <dd>UNIVERSITY</dd>
                            </dl>
                        </li>
                        <li class="student">
                            <dl>
                                <dt><img src="/assets/images/main/icon_student.png" alt=""></dt>
                                <dd>STUDENT</dd>
                            </dl>
                        </li>
                        <li class="corporation">
                            <dl>
                                <dt><img src="/assets/images/main/icon_corporation.png" alt=""></dt>
                                <dd>CORPORATION</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Content-wrap -->
    <main id="content-wrap">
        <div class="container">
            
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    
    
</body>
</html>