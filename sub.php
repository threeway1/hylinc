<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>

<!-- Content-wrap -->
<main id="content-wrap" class="introduction"> <!-- 폴더별 클레스 -->
    <!-- page-header -->
    <div class="page-header">
        <div class="page-intro">
            <div class="container">
                <h2>사업단소개</h2>
            </div>
        </div>
        <nav id="lnb">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">인사말</a></li>
                    <li><a href="#">HYU LINC+ 소개</a></li>
                    <li><a href="#">조직도</a></li>
                    <li><a href="#">찾아오시는 길</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <section class=""><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <nav class="page-path" aria-label="page-path">
                    <ol>
                        <li><a href="#"><i class="icon-home"><span class="sr-only">메인으로이동</span></i></a></li>
                        <li><a href="#">사업단 소개</a></li>
                        <li class="active" aria-current="page">인사말</li>
                    </ol>
                </nav>
                <h3 class="section-title">인사말</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <!-- tab-menu -->
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="#">조직도</a></li>
                        <li><a href="#">사업단 연락처</a></li>
                    </ul>
                </nav>
                
                <br><br>
                
                <h4 class="sub-title">LINC+사업 비전 및 목표</h4>
                <h5 class="strapline-title">비전</h5>
                
                <!-- decimal-list -->
                <ol class="decimal-list">
                    <li>한양대학교의 산학협력 생태계를 통해 Collective Impact 창출</li>
                    <li>4차 산업혁명 시대에 부합하는 인재양성 및 신산업 창출</li>
                </ol>
                
                <br><br>
                
                <!-- table-type-list -->
                <div class="table-wrap">
                    <table class="table type-1">
                        <colgroup>
                            <col style="width: px;">
                            <col style="width: px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>사업명</th>
                                <td>사회맞춤형 산학협력 선도대학(LINC+) 육성사업 [산학협력 고도화형]</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br><br>
                    
                    <table class="table type-2">
                        <colgroup>
                            <col style="width: px;">
                            <col style="width: px;">
                            <col style="width: px;">
                            <col style="width: px;">
                            <col style="width: px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>소속</th>
                                <th>직위(급)</th>
                                <th>성명</th>
                                <th>연락처</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>LINC+사업팀/기업및지역협력센터</th>
                                <td>팀장/센터장</td>
                                <td>문영호</td>
                                <td>02-2220-2970</td>
                                <td>Linc+사업행정총괄</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>