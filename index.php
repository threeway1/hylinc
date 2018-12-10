<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>한양대학교 LINC 사업단</title>
    <link rel="stylesheet" href="/assets/fontello/css/fontello.css">
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/main.css">
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
                                <dd><p>UNIVERSITY</p></dd>
                            </dl>
                        </li>
                        <li class="student">
                            <dl>
                                <dt><img src="/assets/images/main/icon_student.png" alt=""></dt>
                                <dd><p>STUDENT</p></dd>
                            </dl>
                        </li>
                        <li class="corporation">
                            <dl>
                                <dt><img src="/assets/images/main/icon_corporation.png" alt=""></dt>
                                <dd><p>CORPORATION</p></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Content-wrap -->
    <main id="content-wrap">
        <section class="content-list">
            <div class="container">
                <div class="section-header">
                    <article class="lounge">
                        <a href="#">
                            <figure>
                                <img src="/assets/images/main/icon_lounge.png" alt="">
                                <figcaption>
                                    <h3 class="eng">
                                        Hero's Lounge
                                        <small>(중소기업 경쟁력 진단)</small>
                                    </h3>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                    <article class="industry">
                        <div class="article-header">
                            <h3>산업체 재직자 교육</h3>
                        </div>
                        <div class="article-content">
                            <ul class="education-list">
                                <li>
                                    <a href="#">
                                        <span class="recruit">모집</span>
                                        두번째 모집공고가 게시됩니다.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="finishing">마감</span>
                                        첫번째 모집공고가 게시됩니다.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="recruit">모집</span>
                                        두번째 모집공고가 게시됩니다.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="finishing">마감</span>
                                        첫번째 모집공고가 게시됩니다.
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="section-content">
                    <article>
                        <ul>
                            <li class="company">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/icon_company.png" alt="">
                                        <figcaption>
                                            <h3>가족회사 소개<br>및 가입안내</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/icon_group.png" alt="">
                                        <figcaption>
                                            <h3>체인지메이커그룹<br>소개</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="content-bg"></li>
                            <li class="introduce">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/icon_introduce.png" alt="">
                                        <figcaption>
                                            <h3>산학협력<br>현의체 소개</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                    <article class="notice">
                        <div class="notice-area">
                            <div class="notice-head">
                                <h3>공지사항</h3>
                            </div>
                            <div class="notice-body">
                                <ul class="notice-list">
                                    <li>
                                        <a href="#">
                                            <b>기업지원</b>
                                            <p>SPC 산학협력협의회 스마<br>트팩토리 추진 사례 포럼...</p>
                                            <span class="date">2018-08-29</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <b>기업지원</b>
                                            <p>SPC 산학협력협의회 스마<br>트팩토리 추진 사례 포럼...</p>
                                            <span class="date">2018-08-29</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="news-data">
                        <ul>
                            <li class="news-letter">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/icon_news.png" alt="">
                                        <figcaption>
                                            <h3>뉴스레터</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li class="data-room">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/icon_file.png" alt="">
                                        <figcaption>
                                            <h3>자료실</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
</body>
</html>