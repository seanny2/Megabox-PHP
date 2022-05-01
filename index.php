<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/common.css">
    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="main_bg">
        <div class="wrap">
            <?php include("./header.php"); ?>
        </div>
    </header>
    <section id="main">
        <div id="bg">
            <div id="bg_pattern"></div>
            <img src="/img/main/bg_img.jpg" alt="">
        </div>
        <div class="wrap">
            <section id="boxoffice">
                <div id="boxoffice_title">
                    <a href="" title="박스오피스">박스오피스</a>
                    <a href="" title="더 많은 영화보기">더 많은 영화보기</a>
                </div>
                <article id="boxoffice_list">
                    <ul>
                    <?php
                        for($i = 0; $i < 4; $i++) {
                            $rank = $i + 1;
                            echo "<li>";
                                echo "<div class='boxoffice_poster'>";
                                    echo "<div class='boxoffice_rank'>";
                                        echo $rank;
                                    echo "</div>";
                                    echo "<img src='' alt=''>";
                                    echo "<a href='' class='metadata'>";
                                        echo "<div class='summary'>{$rank}등 영화 줄거리</div>";
                                        echo "<div class='evaluation'>";
                                            echo "<p>관람평</p>";
                                            echo "<p>{$rank}</p>";
                                        echo "</div>";
                                    echo "</a>";
                                echo "</div>";
                                echo "<div class='btn_util'>";
                                    echo "<a href=''>{$rank}</a>";
                                    echo "<a href='' title='영화 예매하기'>예매</a>";
                                echo "</div>";
                            echo "</li>";
                        }
                    ?>
                    </ul>
                </article>
                <ul id="search-link">
                    <li>
                        <form action="" method="post">
                            <input type="text" placeholder="영화명을 입력해 주세요">
                            <button type="submit"></button>
                        </form>
                    </li>
                    <li>
                        <a href="" title="상영시간표 보기">상영시간표</a>
                    </li>
                    <li>
                        <a href="" title="박스오피스 보기">박스오피스</a>
                    </li>
                    <li>
                        <a href="" title="빠른예매 보기">빠른예매</a>
                    </li>
                </ul>
            </section>
            <div id="moving_mouse">
                <img src="/img/main/ico_mouse.png" alt="">
            </div>
        </div>
    </section>
    <section id="benefit">

    </section>
    <section id="curation">

    </section>
    <section id="information">

    </section>
    <section id="banner">

    </section>
    <footer>
        <?php include("./footer.php"); ?>
    </footer>
</body>
</html>