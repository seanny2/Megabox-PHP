<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css?ver=1">
    <link rel="stylesheet" href="/css/common.css?ver=1">
    <link rel="stylesheet" href="/css/con_common.css?ver=1">
    <link rel="stylesheet" href="/css/service/nav.css?ver=1">
    <link rel="stylesheet" href="/css/service/notice_view.css?ver=1">
</head>
<body>
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/service/service.php">고객센터</a>
            <a href="/pages/service/notice/notice.php?page=notice"">공지사항</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("../left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>공지사항</h2>
                <section id="notice_view">
                    <?php
                        $num = $_GET["num"];
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox");
                        $query = "select * from notice where num=$num;";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        $regist_day = substr((string)$row["regist_day"], 0, 10);
                        $cut_date = explode("-", $regist_day);

                        $content    = $row["content"];
                        $content = str_replace(" ", "&nbsp;", $content);
					    $content = str_replace("\n", "<br>", $content);
                    ?>
                    <div id="title">
                        <p>[<?=$row["theater"]?>] <?=$row["subject"]?></p>
                    </div>
                    <div id="info">
                        <p><b>구분</b><?=$row["division"]?></p>
                        <p><b>등록일</b><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></p>
                    </div>
                    <div id="content"><?=$content?></div>
                </section>
                <div id="button">
                    <a href="/pages/service/notice/notice.php?page=notice">목록</a>
                </div>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../../footer.php"); ?>
        </div>
    </footer>
</body>