<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/con_common.css">
    <link rel="stylesheet" href="/css/movie/curation.css">

    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/movie/movie/movie.php">영화</a>
            <a href="/pages/movie/curation/curation.php">큐레이션</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <article id="contents_inner">
                <h2>큐레이션</h2>
                <p>감동을 주는 한 편의 영화가 행복한 삶에 영감이 되듯이,가치를 지닌 문화 콘텐트를 함께 나누고 소통하는 공간을 창조하여 메가박스는 관객 여러분과 함께, 더 행복한 세상을 만들어가겠습니다.</p>
                <ul id="contents_menu">
                    <?php $cpage = $_GET["cpage"] ?? 1; ?>
                    <li class=<?=$cpage==1 ? 'menu_selected':NULL?>><a href="/pages/movie/curation/curation.php">큐레이션소개</a></li>
                    <li class=<?=$cpage==2 ? 'menu_selected':NULL?>><a href="/pages/movie/curation/curation.php?cpage=2">필름소사이어티</a></li>
                    <li class=<?=$cpage==3 ? 'menu_selected':NULL?>><a href="/pages/movie/curation/curation.php?cpage=3">클래식소사이어티</a></li>
                </ul>
                <?php 
                    switch($cpage) {
                        case 1:
                            include("information.html");
                            break;
                        default:
                            include("society_list.php");
                            break;
                    } 
                ?>
            </article>
            <article id="events">
                <h2>관련이벤트</h2>
                <ul>
                    <li>
                        <img src="/img/movie/event_1.jpg" alt="">
                    </li>
                    <li>
                        <img src="/img/movie/event_2.jpg" alt="">
                    </li>
                </ul>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../../footer.php"); ?>
        </div>
    </footer>
</body>
</html>