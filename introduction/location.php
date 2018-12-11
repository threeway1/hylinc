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
    <section class="location"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduction/_page_path.php');?>
                <h3 class="section-title">찾아오시는 길</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <figure class="maps">
                    <img src="/assets/images/introduction/img_maps.jpg" alt="">
                    <figcaption>
                        <h4 class="strapline-title">LINC+ 건물안내</h4>
                        <ul>
                            <li><span>05</span>제1공학관(건물번호 212)</li>
                            <li><span>13</span>공업센터 본관(건물번호 206)</li>
                            <li><span>14</span>신소재공학관(건물번호 204)</li>
                            <li><span>27</span>제2공학관(건물번호 211)</li>
                            <li><span>33</span>공업센터 별관(건물번호 207)</li>
                            <li><span>40</span>과학기술관(건물번호 203)</li>
                            <li><span>46</span>산학기술관(건물번호 304)</li>
                            <li><span>77</span>IT·BT관(건물번호 305)</li>
                            <li><span>101</span>재성토목관(건물번호 201)<br>건축관(건물번호 202)</li>
                            <li><span>125</span>정몽구미래자동차연구센터(건물번호 212)</li>
                        </ul>
                    </figcaption>
                </figure>
                <article class="location-infor">
                    <h5 class="strapline-title">위치안내</h5>
                    <p>서울특별시 성동구 왕십리로 222 한양대학교</p>
                    <ul>
                        <li>공과대학은 공업센터본관(206)</li>
                        <li>공업센터별관(207)</li>
                        <li>제1공학관(212)</li>
                        <li>제2공학관(211)</li>
                        <li>신소재공학관(204)</li>
                        <li>과학기술관(203)</li>
                        <li>재성토목관(201)</li>
                        <li>IT·BT관(정보통신관)(305)</li>
                        <li>산학기술관(304)</li>
                        <li>건축관(202)</li>
                        <li>정몽구미래자동차연구센터(210) 으로 오시면 됩니다.</li>
                    </ul>
                </article>
                <article class="directions">
                    <h5 class="strapline-title">오시는 방법</h5>
                    <div class="table-wrap">
                        <table class="table type-1">
                            <colgroup>
                                <col style="width: 170px;">
                                <col style="width: px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>주변 정류장</th>
                                    <td>
                                        <h6>한양대 정문 앞</h6>
                                        <dl>
                                            <dt><span class="bus bl">간선</span></dt>
                                            <dd>
                                                <ul>
                                                    <li>간선121번</li>
                                                    <li>302번</li>
                                                    <li>N62(심야)</li>
                                                </ul>
                                            </dd>
                                            <dt><span class="bus gr">지선</span></dt>
                                            <dd>
                                                <ul>
                                                    <li>지선2012번</li>
                                                    <li>2014번</li>
                                                    <li>2016번</li>
                                                    <li>2222번</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th>지하철</th>
                                    <td>
                                        <dl>
                                            <dt><span class="subway gr">2호선</span></dt>
                                            <dd>2호선 한양대역 2번 출구<br>2호선 용답역</dd>
                                            <dt><span class="subway yl">분당선</span></dt>
                                            <dd>분당선 왕십리역</dd>
                                            <dt><span class="subway bl">경의선</span></dt>
                                            <dd>경의선 왕십리역</dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th>차량 이용시</th>
                                    <td>한양대학교 신정문 또는 동문이용 →행원파크 주차장 주차 후 도보 5분</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>