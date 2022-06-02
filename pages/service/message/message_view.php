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
    <link rel="stylesheet" href="/css/service/message_view.css?ver=1">
</head>
<body>
    
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/service/service.php">고객센터</a>
            <a href="/pages/service/message/message.php?page=message">1:1 문의</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("../left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>문의 내역</h2>
                <section id="message_view">
                    <?php
                        $num = $_GET["num"];    // message num
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox");
                        $query = "select * from message where num=$num;";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        $regist_day = substr((string)$row["regist_day"], 0, 10);
                        $cut_date = explode("-", $regist_day);

                        $content    = $row["content"];
                        $content = str_replace(" ", "&nbsp;", $content);
					    $content = str_replace("\n", "<br>", $content);
                    ?>
                    <div id="title">
                        <p><?=$row["subject"]?></p>
                    </div>
                    <div id="info">
                        <p><b>등록일</b><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></p>
                        <p><b>발신자</b><?=$row["send_id"]?></p>
                    </div>
                    <div id="content"><?=$content?></div>
                </section>
                <div id="button">
                    <?php
                    $query = "SELECT * FROM manager WHERE id='$userid';";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($result);
                    $is_manager = $row ? true : false;
                    if($is_manager) { ?>
                    <a href="/pages/service/message/message_reply.php?page=message&num=<?=$num?>">답변</a>
                    <?php } ?>
                    <a href="/pages/service/message/message.php?page=message">목록</a>
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