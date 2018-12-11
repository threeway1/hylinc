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
    <section class="family-company"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cooperation/_page_path.php');?>
                <h3 class="section-title">산학협력</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/cooperation/group.php">소개 및 가입 안내</a></li>
                        <li><a href="/cooperation/application.php">가입신청</a></li>
                    </ul>
                </nav>
                <article class="purpose">
                    <div class="article-header">
                        <h4 class="sub-title">운영목적</h4>
                        <p>가족회사 유료회원제도는 한양대학교와 가족회사 간의 산학협력을 통한 동반성장을 위해 한양대학교 LINC+사업단이 마련한 멤버십 서비스입니다.<br>연회비와 가입비 납입을 통해 Sinver / Gold / Diamond 회원으로 가입하시면 가족회사의 역량 및 성장형태에 따른 맞춤형 산학협력 프로그램 등 차별화된 서비스를 받으실 수 있습니다.</p>
                    </div>
                    <div class="article-content">
                        <h5 class="strapline-title">가족회사 유료회원 가입방법</h5>
                        <ol class="method-list">
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_method01.png" alt="">
                                </div>
                                <p class="details">가족회사 가입 신청서 작성<small>(가입 원하는 유료회원 등급 <i class="icon-check-1"></i> 체크)</small></p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_method02.png" alt="">
                                </div>
                                <p class="details">유료회원 가입심사</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_method03.png" alt="">
                                </div>
                                <p class="details">가족회사 - 한양대학교 협약서류<br>교부 및 연회비/가입비 납부</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_method04.png" alt="">
                                </div>
                                <p class="details">납부일로부터 유료회원 혜택 개시</p>
                            </li>
                        </ol>
                        <h5 class="strapline-title">가족회사 유료회원 회비 납부 및 사용 안내</h5>
                        <p>Silver회원은 연회비, Gold이상 회원은 가입비 (연회비 면제) 납부</p>
                        <ol class="decimal-list">
                            <li>
                                <dl>
                                    <dt>연회비</dt>
                                    <dd>
                                        Silver회원에 한해 연단위로 20만원을 납입하여 1년간 자격 유지
                                        <p class="attention">연회비는 소모성비용으로 납부 후 반환하지 않음</p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>가입비</dt>
                                    <dd>
                                        Gold회원 200만원, Diamond회원 500만원 납부하며 2년간 자격 유지
                                        <p class="attention">국고지원금 50% 대응을 통해 가입비 납부금액의 150% 금액(Gold회원 300만원, Diamond 750만원)을 바우처로 지급하여 차별화된 유료회원 제공</p>
                                        <p class="attention">1개 분야에 바우처 비용의 최대 80%까지 사용 가능</p>
                                        <p class="attention">자격유지 기간 경과 후, 가입비 미사용분 전액 환불</p>
                                    </dd>
                                </dl>
                            </li>
                        </ol>
                    </div>
                </article>
                <article class="benefit">
                    <div class="article-header">
                        <h4 class="sub-title">가족회사 주요 특전</h4>
                    </div>
                    <div class="article-content">
                        <div class="table-wrap">
                            <table class="table type-2">
                                <colgroup>
                                    <col style="width: 25%;">
                                    <col style="width: px;">
                                    <col style="width: px;">
                                    <col style="width: px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Silver</th>
                                        <th>Gold</th>
                                        <th>Diamond</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>연회비</th>
                                        <td>20만원</td>
                                        <td>면제</td>
                                        <td>면제</td>
                                    </tr>
                                    <tr>
                                        <th>가입비[바우처비용]</th>
                                        <td>-</td>
                                        <td>200만원 <small>[300만원]</small></td>
                                        <td>500만원 <small>[750만원]</small></td>
                                    </tr>
                                    <tr>
                                        <th>전담교수 매칭</th>
                                        <td>-</td>
                                        <td class="bg-or"><i class="icon-star"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>국가과제 컨설팅</th>
                                        <td>-</td>
                                        <td class="bg-or">-</td>
                                        <td class="bg-or"><i class="icon-diamond"></i></td>
                                    </tr>
                                    <tr>
                                        <th>기술(경영)지도</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or"><i class="icon-star"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>재직자 교육</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or"><i class="icon-star"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>산학협려협의체</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or"><i class="icon-star"></i></td>
                                        <td class="bg-or"><i class="icon-diamond"></i></td>
                                    </tr>
                                    <tr>
                                        <th>All-Set 기업지원</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>산학공동기술개발과제</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>공용장비 활용</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>해외 전시/포럼 시찰 참가</th>
                                        <td><i class="icon-circle"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>기업 경쟁력 진단 컨설팅</th>
                                        <td>-</td>
                                        <td class="bg-or"><i class="icon-star"></i></td>
                                        <td class="bg-or">
                                            <i class="icon-diamond"></i>
                                            <i class="icon-diamond"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="attention">회원가입 등급에 따라, 다양한 특전이 주어집니다.</p>
                            <p class="attention">상위등급 차별화된 특전(<i class="icon-star"></i><i class="icon-star"></i>/<i class="icon-diamond"></i><i class="icon-diamond"></i>)제공!</p>
                        </div>
                        <h5 class="strapline-title">가족회사 회원제도 안내</h5>
                        <ul class="system-list">
                            <li class="free-member">
                                <dl>
                                    <dt>Family Company<span>(기존 무료회원)</span></dt>
                                    <dd>
                                        <ul>
                                            <li>기술(경영)지도 5회 지원</li>
                                            <li>산학공동기술개발과제 신청 및 최대 3천만원 과제 수행가능</li>
                                            <li>공용장비활용료 30% 할인</li>
                                            <li>유료 재직자 교육·All-Set 기업지원 신청가능</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="silver-member">
                                <dl>
                                    <dt>Silver Family Company</dt>
                                    <dd>
                                        <ul>
                                            <li>Basic회원 혜택 동일 적용</li>
                                            <li>유료 재직자 교육과정 수강료 20% 할인</li>
                                            <li>유료 산학협력협의체 가입시 협의체 기본운영 지원금 및 협의체 참여기업 납입 연회비 총액 50% 추가 지원</li>
                                            <li>All-Set 기업지원 가산점 부여</li>
                                            <li>해외 산업전시/포럼 시찰단 참가 신청 가능(참가비용 자비 부담)</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="gold-member">
                                <dl>
                                    <dt>Gold Family Company</dt>
                                    <dd>
                                        <ul>
                                            <li>Silver회원 혜택 동일 적용</li>
                                            <li>산학협력 중점교수 및 참여학과 전임교원 전담 매칭</li>
                                            <li>기술(경영)지도 최대 10회 신청 (6회 이상 바우처 차감) 및 비참여학과 교수 지도 신청 가능</li>
                                            <li>유료 산학협력협의체 가입시 운영 지원금 추가 지원</li>
                                            <li>All-Set 기업지원·산학공동기술개발과제 가산점 부여 또는 Gold&amp;Diamond 대상 별도과제 추진</li>
                                            <li>산학공동기술개발과제 최대 5천만원 과제 수행가능, 기업 분담금 바우처 활용가능</li>
                                            <li>해외 산업전지/포럼 참가단 참가비용 지원</li>
                                            <li>기업 혁신역량 진단 서비스 제공</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li class="diamond-member">
                                <dl>
                                    <dt>Diamond Family Company</dt>
                                    <dd>
                                        <ul>
                                            <li>Gold회원 혜택 동일 적용</li>
                                            <li>비참여학과 교수 전담 매칭 가능</li>
                                            <li>국가과제 참여 상담서비스 및 참여기회 제공</li>
                                            <li>찾아가는 재직자 교육 개설 및 기업연계형 캡스통디자인 주체 설정 가능</li>
                                            <li>기업 혁신역량 심층 진단서비스 제공 및 추가 전략 컨설팅 지원</li>
                                            <li>CMG 신산업 프로젝트 우선 참여기회 제공</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="procedure">
                    <div class="article-header">
                        <h4 class="sub-title">가입신청 절차</h4>
                    </div>
                    <div class="article-content">
                        <ol class="procedure-list">
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure01.png" alt="">
                                    <p>STEP 01</p>
                                </div>
                                <p class="details">가입 신청서 작성</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure02.png" alt="">
                                    <p>STEP 02</p>
                                </div>
                                <p class="details">협약서<br>다운로드 후 직인</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure03.png" alt="">
                                    <p>STEP 03</p>
                                </div>
                                <p class="details">
                                    서류 제출
                                    <small>협약서 스캔본, 사업자등록증<br>사본 1부,  간단한  기업소개서<br>(브로슈어) 1부  메일 제출</small>
                                </p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure04.png" alt="">
                                    <p>STEP 04</p>
                                </div>
                                <p class="details">가입심사</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure05.png" alt="">
                                    <p>STEP 05</p>
                                </div>
                                <p class="details">연회비/가입비<br>납입</p>
                            </li>
                            <li>
                                <div class="icon-item">
                                    <img src="/assets/images/cooperation/icon_procedure06.png" alt="">
                                    <p>STEP 06</p>
                                </div>
                                <p class="details">협약서 및<br>인증서 교부</p>
                            </li>
                        </ol>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>