<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/cooperation.css">
</head>
<body class="sub">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>

<!-- Content-wrap -->
<main id="content-wrap" class="cooperation"> <!-- 폴더별 클레스 -->
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cooperation/_page_header.php');?>
    <section class="consultative-introduce"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cooperation/_page_path.php');?>
                <h3 class="section-title">산학협력 협의체</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/cooperation/consultative_introduce.php">소개</a></li>
                        <li><a href="/cooperation/consultative_group.php">협의체 활동</a></li>
                    </ul>
                </nav>
                <article class="objective">
                    <div class="article-header">
                        <h4 class="sub-title">운영목적</h4>
                        <p>산학협력에 관한 의견 발의 및 수렴을 통해 기업과 대학간의 유대감을 강화하고 산학협력 활성화를 위하여 기술개발, 기술(경영)지도, 현장실습 등의 <br>운영과 발전방향을 협의합니다.</p>
                    </div>
                    <div class="article-content">
                        <figure>
                            <img src="/assets/images/cooperation/img_objective2.jpg" alt="">
                        </figure>
                        <ul>
                            <li>
                                <h5 class="strapline-title">주요 활동내용</h5>
                                <p>정기모임을 통해 산학협력 활성화, 개선 및 발전방안 논의 및 가족회사 간 정보 교류·협력</p>
                            </li>
                            <li>
                                <h5 class="strapline-title">운영대상</h5>
                                <p>공통의 사업분야에 대한 문제의식과 산학협력에 대한 의지를 함께하는 기업의 모임</p>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="benefit">
                    <div class="article-header">
                        <h4 class="sub-title">가족회사 유료회원 특전</h4>
                    </div>
                    <div class="article-content">
                        <ol class="decimal-list">
                            <li>2018년 2학기부터 가족회사 유료회원(Silver)에 한해 신규 산학협력협의체를 개설할 수 있음</li>
                            <li>연회비의 150% 운영지원금 대응<small>가족회사 가입은 [산학협력]-[가족회사]-[가입신청]에서 하실 수 있습니다</small></li>
                        </ol>
                    </div>
                </article>
                <article class="inquiry">
                    <div class="article-header">
                        <h4 class="sub-title">문의사항</h4>
                    </div>
                    <div class="article-content">
                        <div class="table-wrap">
                            <table class="table type-1">
                                <colgroup>
                                    <col style="width: 170px;">
                                    <col style="width: px;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>LINC+사업단</th>
                                        <td>
                                            <ul>
                                                <li class="usr">이여진 연구원</li>
                                                <li class="contact">02-2220-2967</li>
                                                <li class="mail"><a href="mailto:angela0921@hanyang.ac.kr">angela0921@hanyang.ac.kr</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>