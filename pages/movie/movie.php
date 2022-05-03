<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/movie/movie.css">
    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="no_bg">
        <?php include("../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/movie/movie.php">영화</a>
            <a href="">전체영화</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <article id="movie_contents">
                <h2>전체영화</h2>
                <ul id="contents_menu">
                    <li class="menu_selected"><a href="/pages/movie/movie.php">박스오피스</a></li>
                    <li><a href="">상영에정작</a></li>
                    <li><a href="">특별상영</a></li>
                    <li><a href="">필름소사이어티</a></li>
                    <li><a href="">클래식소사이어티</a></li>
                </ul>
                <form id="search_form" action="">
                    <input type="checkbox" id="only_released">
                    <label for="only_released">개봉작만</label>
                    <span>~~개의 영화가 검색되었습니다.</span>
                    <input type="text" placeholder="영화명 검색">
                    <button type="submit"></button>
                </form>
                <ul id="movie_list">
                <?php
                    for($i = 0; $i < 20; $i++) {
                        $rank = $i + 1;
                        echo "<li>";
                            echo "<div class='movie_poster'>";
                                echo "<div class='movie_rank'>";
                                    echo $rank;
                                echo "</div>";
                                echo "<img src='' alt=''>";
                                echo "<a href='' class='poster_shadow'>";
                                    echo "<div class='summary'>{$rank}등 영화 줄거리</div>";
                                    echo "<div class='evaluation'>";
                                        echo "<p>관람평</p>";
                                        echo "<p>{$rank}</p>";
                                    echo "</div>";
                                echo "</a>";
                            echo "</div>";
                            echo "<dl id='movie_metadata'>";
                                echo "<dt>{$i}제목</dt>";
                                echo "<dd>";
                                    echo "<p>예매율 00.0%</p>";
                                    echo "<p>개봉일 2022.05.01</p>";
                                echo "</dd>";
                            echo "</dl>";
                            echo "<div class='btn_util'>";
                                echo "<a href=''>{$rank}.1k</a>";
                                echo "<a href='' title='영화 예매하기'>예매</a>";
                            echo "</div>";
                        echo "</li>";
                    }
                    ?>
                </ul>
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