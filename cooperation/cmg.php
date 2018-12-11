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
    <section class="cmg"><!-- 클레스 == 페이지명 -->
        <div class="container">
            <div class="section-header">
                <!-- page-path -->
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cooperation/_page_path.php');?>
                <h3 class="section-title">체인지메이커스그룹(CMG)</h3>
            </div>
            <!-- Sub Content Start -->
            <div class="section-content">
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/cooperation/cmg_introduce.php">소개</a></li>
                        <li class="active"><a href="/cooperation/cmg.php">CMG활동</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
    </section>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>