<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>

<!-- Content-wrap -->
<main id="content-wrap" class="introduction"> <!-- 폴더별 클레스 -->
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduction/_page_header.php');?>
    <section class="group"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduction/_page_path.php');?>
                <h3 class="section-title">조직도</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/introduction/group.php">조직도</a></li>
                        <li><a href="/introduction/contact.php">사업단 연락처</a></li>
                    </ul>
                </nav>
                <figure>
                    <img src="/assets/images/introduction/img_group.jpg" alt="조직도">
                </figure>
                <h4 class="sub-title">LINC+사업 비전 및 목표</h4>
                <div class="table-wrap">
                    <table class="table type-1">
                        <colgroup>
                            <col style="width: 270px;">
                            <col style="width: px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>공과대학 (12개 학과)</th>
                                <td>융합전자공학부, 전기·생체공학부 전기공학전공, 전기·생체공학부 생체공학전공, 신소재공학부, 화학공학과, 생명공학과, 유기나노공학과, 에너지공학과, 기계공학부, 원자력공학과, 산업공학과, 미래자동차공학과</td>
                            </tr>
                            <tr>
                                <th>사회과학대학 (2개학과)</th>
                                <td>미디어커뮤니케이션학과, 관광학부</td>
                            </tr>
                            <tr>
                                <th>자연과학대학 (2개학과)</th>
                                <td>물리학과, 화학과</td>
                            </tr>
                            <tr>
                                <th>정책과학대학 (2개학과)</th>
                                <td>정책학과, 행정학과</td>
                            </tr>
                            <tr>
                                <th>경영대학 (2개학과)</th>
                                <td>경영학부, 파이낸스경영학부</td>
                            </tr>
                            <tr>
                                <th>사범대학 (1개학과)</th>
                                <td>응용미술교육과</td>
                            </tr>
                            <tr>
                                <th>생활과학대학 (3개학과)</th>
                                <td>의류학과, 식품영양학과, 실내건축디자인학과</td>
                            </tr>
                            <tr>
                                <th>음악대학 (2개학과)</th>
                                <td>작곡과, 국악과</td>
                            </tr>
                            <tr>
                                <th>예술체육대학 (1개학과)</th>
                                <td>연극영화학과</td>
                            </tr>
                            <tr>
                                <th>국제학부 (1개학과)</th>
                                <td>국제학부</td>
                            </tr>
                            <tr>
                                <th>산업융합학부 (2개학과)</th>
                                <td>응용시스템전공, 정보융합전공</td>
                            </tr>
                            <tr>
                                <th>알반대학원 (36개학과)</th>
                                <td>전자컴퓨터통신공학과, 전기공학과, 생체공학과, 나노반도체공학과, 정보디스플레이공학과, 지능형로봇학과, 차세대전력변환시스템공학과, 신소재공학과, 화학공학과, 생명공학과, 유기나노공학과, 에너지공학과, 기계공학과, 융합기계공학과, 원자력공학과, 산업공학과, 미래자동차공학과, 자동차전자제어공학과, 파워엔지니어링공학과, 아트테크놀로지학과, 창업융합학과, 미디어커뮤니케이션학과, 관광학과, 정책학과, 행정학과, 경영학과, 회계학과, 물리학과, 화학과, 의류학과, 식품영양학과, 실내건축디자인학과, 고령산업융합학과, 응용미술학과, 국악학과, 연극영화학과</td>
                            </tr>
                            <tr>
                                <th>기술경영전문대학원 (1개학과)</th>
                                <td>기술경영학과</td>
                            </tr>
                            <tr>
                                <th>국제학대학원 (6개학과)</th>
                                <td>글로벌사회적경제학과, 러시아학과, 미국학과, 일본학과, 중국학과, 한국학과</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>