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
    <link rel="stylesheet" href="/css/service/service.css?ver=1">
</head>
<body>
    <header class="no_bg">
        <?php include("../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/service/service.php">고객센터</a>
            <a href="/pages/service/service.php">고객센터 홈</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>고객센터 홈</h2>
                <form id="notice_search" action="./notice/notice.php?page=notice" method="post">
                    <label>빠른검색</label>
                    <div id="search_box">
                        <input type="text" name="title" placeholder="검색어를 입력해 주세요.">
                        <button type="submit"></button>
                    </div>
                </form>
                <section id="service_preview">
                    <div id="notice_preview">
                        <div class="preview_top">
                            <h3>공지사항</h3>
                            <a href="/pages/service/notice/notice.php?page=notice">더보기</a>
                        </div>
                        <ul class="preview_list">
                            <?php 
                            $con = mysqli_connect("localhost", "user1", "12345", "megabox");
                            $query = "SELECT * FROM notice ORDER BY regist_day DESC LIMIT 5;";
                            $result = mysqli_query($con, $query);
                            while($row=mysqli_fetch_array($result)) { 
                                $regist_day = substr((string)$row["regist_day"], 0, 10);
                                $cut_date = explode("-", $regist_day); ?>
                            <li>
                                <p>
                                    <a href="/pages/service/notice/notice_view.php?page=notice&num=<?=$row["num"]?>"><?=$row["subject"]?></a>
                                </p>
                                <span><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="inquiry_preview">
                        <div class="preview_top">
                            <h3>내 문의 내역</h3>
                            <?php $userid = $_SESSION["userid"] ?? NULL;
                            if ($userid) { ?>
                            <a href="/pages/service/message/message.php?page=message">더보기</a>
                            <?php } else { ?>
                            <a href="javascript:alert('로그인 후 이용할 수 있습니다!');">더보기</a>
                            <?php } ?>
                        </div>
                        <ul class="preview_list">
                            <?php
                            if($userid) { 
                                $query = "SELECT * FROM message ORDER BY regist_day DESC LIMIT 5;";
                                $result = mysqli_query($con, $query);
                                $cnt = mysqli_num_rows($result);
                                if($cnt > 0) {
                                    while($row=mysqli_fetch_array($result)) { 
                                    $regist_day = substr((string)$row["regist_day"], 0, 10);
                                    $cut_date = explode("-", $regist_day); ?>
                                    <li>
                                        <a href="/pages/service/message/message.php?page=message&num=<?=$row["num"]?>"><?=$row["subject"]?></a>
                                        <span><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></span>
                                    </li>
                                    <?php } ?>   
                                <?php } else { ?>
                                    <li class="blank">
                                        <p>문의 내역이 없습니다.</p>
                                        <?php 
                                        $query = "select id from manager where id='$userid';";
                                        $result = mysqli_query($con, $query);
                                        if($row = mysqli_fetch_array($result)) { ?>
                                            <a href="javascript:alert('관리자는 문의할 수 없습니다!')">문의하러 가기</a>
                                        <?php } else { ?> 
                                            <a href="/pages/service/message/message_write.php?page=message">문의하러 가기</a>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            <?php } else { ?>
                            <li class="blank">
                                <p>로그인 후 이용할 수 있습니다!</p>
                                <a href="/pages/login/login_form.html">로그인</a>
                            </li>
                            <?php } mysqli_close($con);?>
                        </ul>
                    </div>
                </section>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../footer.php"); ?>
        </div>
    </footer>
</body>