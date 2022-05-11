<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/con_common.css">
    <link rel="stylesheet" href="/css/event/event.css">
    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="no_bg">
        <?php include("../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/event/event.php">이벤트</a>
            <a href="/pages/movie/event.php">진행중 이벤트</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <article id="contents_inner">
                <h2>진행중인 이벤트</h2>
                <ul id="contents_menu">
                    <?php $epage = $_GET["epage"] ?? 1; ?>
                    <li class=<?=$epage==1 ? 'menu_selected':NULL?>><a href="/pages/event/event.php">전체</a></li>
                    <li class=<?=$epage==2 ? 'menu_selected':NULL?>><a href="/pages/event/event.php?epage=2">메가Pick</a></li>
                    <li class=<?=$epage==3 ? 'menu_selected':NULL?>><a href="/pages/event/event.php?epage=3">영화</a></li>
                    <li class=<?=$epage==4 ? 'menu_selected':NULL?>><a href="/pages/event/event.php?epage=4">극장</a></li>
                    <li class=<?=$epage==5 ? 'menu_selected':NULL?>><a href="/pages/event/event.php?epage=5">제휴/할인</a></li>
                    <li class=<?=$epage==6 ? 'menu_selected':NULL?>><a href="/pages/event/event.php?epage=6">시사회/무대인사</a></li>
                </ul>
                <?php
                    if($epage == 1) {
                        include("./event/all.php"); 
                    } else {
                        include("./event/division.php"); 
                    }
                ?>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../footer.php"); ?>
        </div>
    </footer>
</body>
</html>