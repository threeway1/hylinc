<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/company_support.css">
</head>
<body class="sub">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>

<!-- Content-wrap -->
<main id="content-wrap" class="company-support"> <!-- 폴더별 클레스 -->
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/company_support/_page_header.php');?>
    <section class="development"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/company_support/_page_path.php');?>
                <h3 class="section-title">산학공동기술개발과제</h3><!-- section-title -->
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/company_support/development.php">소개</a></li>
                        <li><a href="/company_support/d_announcement.php">공고 및 접수</a></li>
                    </ul>
                </nav>
                <article class="purpose">
                    <div class="article-header">
                        <h4 class="sub-title">운영목적</h4>
                        <p>
                            한양대학교가 보유한 혁신(실용)기술을 활용하여 사업화하려는 가족회사를 대상으로 기업의 니즈(공동R&amp;D, 애로기술) 등을 분석하고 우수연구자 매칭을 통해 <br>
                            성과물을 창출하며, LINC+사업단의 특성화 분야와 연계하여 실질적인 기술이전 성과를 바탕으로 기업의 기술사업화 토대를 구축하고 지역산업 견인 및 신산업 창출에 <br>
                            이바지함으로써 사회문제를 해결하는 기술사업화 선도모델을 구축하기 위함입니다.
                        </p>
                    </div>
                </article>
                <article class="subject-application">
                    <div class="article-header">
                        <h4 class="sub-title">신청대상</h4>
                    </div>
                    <div class="article-content">
                        <dl>
                            <dt>한양대학교 가족회사</dt>
                            <dd>가족회사 가입은 <i>[산학협력]-[가족회사]-[가입신청]</i>에서 하실 수 있습니다.</dd>
                        </dl>
                        <h5 class="strapline-title">가족회사 유료회원 특전</h5>
                        <ol class="decimal-list">
                            <li>BASIC, SILVER회원은 최대 3천만원 과제 수행가능</li>
                            <li>GOLD, DIAMOND 회원은 최대 5천만원 과제 수행가능, 별도 과제 진행 또는 가산점 부여, 기업분담금 바우처 차감 지원</li>
                        </ol>
                    </div>
                </article>
                <article class="task-execution">
                    <div class="article-header">
                        <h4 class="sub-title">과제수행 대상 기술</h4>
                    </div>
                    <div class="article-content">
                        <h5 class="strapline-title">LINC+사업단 선정 특성화 기술분야</h5>
                        <div class="table-wrap">
                            <table class="table type-2">
                                <colgroup>
                                    <col style="width: 270px;">
                                    <col style="width: px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>기술(사업)</th>
                                        <th>세부분야</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>고령산업</th>
                                        <td>국내외 고령친화산업(관련 아이디어 상품, 서비스, 콘텐츠, 어플리케이션 개발 등)</td>
                                    </tr>
                                    <tr>
                                        <th>데이터사이언스 기술</th>
                                        <td>의료 데이터, 기상데이터, 기계작동데이터, 자동차데이터 등을 통해서 서비타이제이션 가능한 새로운 제품개발 및 서비스 개발 등</td>
                                    </tr>
                                    <tr>
                                        <th>VR/AR콘텐츠</th>
                                        <td>VR/AR 하드웨어 및 플랫폼 구축 / 교육 문화, 의료, 여행, 국방 등 다양한 산업의 VR/AR 콘텐츠 개발 등</td>
                                    </tr>
                                    <tr>
                                        <th>스마트도시 및 환경산업</th>
                                        <td>저탄소 도시 / 대기 오염 개선과 같은 도시환경 개선을 위한 기술 개발 / 태양광 에너지 개발 및 빅데이터 분석 기술개발 / <br>에너지 획득, 저장, 효율적 활용 관련 기술과 시스템  개발 / 스마트 도시를 위한 기술개발 등</td>
                                    </tr>
                                    <tr>
                                        <th>바이오산업</th>
                                        <td>나노바이오 관련 기술 / 신약기술 개발 / 바이오 헬스기술 등</td>
                                    </tr>
                                    <tr>
                                        <th>유니버셜 창의산업</th>
                                        <td>유니버셜 디자인, Inclusive 디자인, 장애인, 노인 여성 등 맞춤형 서비스 / 지역 및 나라 특색에 맞는 새로운 제품과 서비스 등</td>
                                    </tr>
                                    <tr>
                                        <th>그린에너지</th>
                                        <td>전기 자동차, 자전거 개발 / 신재생 에너지 기술 개발 / 풍력, 태양, 수소연료 전지 관련 기술 등</td>
                                    </tr>
                                    <tr>
                                        <th>재난대응 융합기술</th>
                                        <td>감염대비를 위한 응급, 구난 차단 및 장비 / 전염병 차단을 위한 응급의료 시스템 / <br>멸균·살균 및 감염 조기 진단 및 확산 방지를 위한 디바이스 개발 등</td>
                                    </tr>
                                    <tr>
                                        <th>디자인씽킹 창의산업</th>
                                        <td>소프트웨어 중심의 창의적 문제해결 관련 프로세서 / 팸플릿, 모바일 홈페이지, 회사 인테리어 등에 디자인씽킹을 접목한 디자인 개발 등</td>
                                    </tr>
                                    <tr>
                                        <th>예술융합기술</th>
                                        <td>소셜미디어 기반 문화예술콘텐츠, 헬스케어, 자동차 등 제품 개발 및 서비스 / 공영 및 전시 시스템 등</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
                <article class="period">
                    <div class="article-header">
                        <h4 class="sub-title">과제수행기간</h4>
                    </div>
                    <div class="article-content">
                        <ol class="decimal-list">
                            <li>
                                <dl>
                                    <dt>공&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;고</dt>
                                    <dd>매년 4월 말 ~ 5월 초</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>과제수행</dt>
                                    <dd>매년 6월~11월 경, 6개월</dd>
                                </dl>
                            </li>
                        </ol>
                    </div>
                </article>
                <article class="procedure">
                    <div class="article-header">
                        <h4 class="sub-title">가입신청 절차</h4>
                    </div>
                    <div class="article-content">
                        <ol>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure01.png" alt="">
                                    <p>STEP 01</p>
                                </div>
                                <p class="details">사업공고</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure02.png" alt="">
                                    <p>STEP 02</p>
                                </div>
                                <p class="details">사업계획서 제출</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure03.png" alt="">
                                    <p>STEP 03</p>
                                </div>
                                <p class="details">평가 및 과제선정</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure04.png" alt="">
                                    <p>STEP 04</p>
                                </div>
                                <p class="details">연구 협약</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure05.png" alt="">
                                    <p>STEP 05</p>
                                </div>
                                <p class="details">과제수행</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/company_support/icon_procedure06.png" alt="">
                                    <p>STEP 06</p>
                                </div>
                                <p class="details">결과보고서 제출<br>및 평가</p>
                            </li>
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
                                                <li class="usr">이다인 연구원</li>
                                                <li class="contact">02-2220-2969</li>
                                                <li class="mail"><a href="mailto:ranyji@hanyang.ac.kr">ranyji@hanyang.ac.kr</a></li>
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