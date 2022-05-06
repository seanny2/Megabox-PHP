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
                    <?php $mpage = $_GET["mpage"] ?? 1; ?>
                    <li class=<?=$mpage==1 ? 'menu_selected':NULL?>><a href="/pages/movie/movie.php">박스오피스</a></li>
                    <li class=<?=$mpage==2 ? 'menu_selected':NULL?>><a href="/pages/movie/movie.php?mpage=2">상영에정작</a></li>
                    <li class=<?=$mpage==3 ? 'menu_selected':NULL?>><a href="/pages/movie/movie.php?mpage=3">특별상영</a></li>
                    <li class=<?=$mpage==4 ? 'menu_selected':NULL?>><a href="/pages/movie/movie.php?mpage=4">필름소사이어티</a></li>
                    <li class=<?=$mpage==5 ? 'menu_selected':NULL?>><a href="/pages/movie/movie.php?mpage=5">클래식소사이어티</a></li>
                </ul>
                    <?php 
                        $con = mysqli_connect("localhost", "root", "", "megabox") or die ("Can't access DB");

                        $s_title = $_GET["title"] ?? NULL; 
                        if($mpage == 1) {
                            if($s_title) {
                                $query = "SELECT * FROM movie where title like '%{$s_title}%'ORDER BY reservation_rate DESC" ;
                            } else {
                                $query = "SELECT * FROM movie ORDER BY reservation_rate DESC;";
                            }
                        } else if($mpage == 2) {
                            if($s_title) {
                                $query = "SELECT * FROM movie where playing=0 and special=0 and title like '%{$s_title}%' ";
                            } else {
                                $query = "SELECT * FROM movie where playing=0 and special=0 ORDER BY reservation_rate DESC";
                            }
                        } else if($mpage == 3) {
                            if($s_title) {
                                $query = "SELECT * FROM movie where special=1 and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where special=1 ORDER BY reservation_rate DESC";
                            }
                        } else if($mpage == 4) {
                            if($s_title) {
                                $query = "SELECT * FROM movie where society='film' and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where society='film' ORDER BY reservation_rate DESC";   
                            }
                        } else if($mpage == 5) {
                            if($s_title) {
                                $query = "SELECT * FROM movie where society='classic' and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where society='classic' ORDER BY reservation_rate DESC";
                            }
                        }

                        $result = mysqli_query($con, $query);
                        $cnt = mysqli_num_rows($result);
                    ?>
                <div id="movie_search">
                    <span><b><?=$cnt?></b> 개의 영화가 검색되었습니다.</span>
                    <form id="search_form" action="" method="get">
                        <input type="text" placeholder="영화명 검색" name="title">
                        <button type="submit"></button>
                    </form>
                </div>
                <ul id="movie_list">
                    <?php
                        
                        if($cnt > 0) {
                            $rank = 1;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<li>";
                                    echo "<div class='movie_poster'>";
                                        echo "<div class='movie_rank'>".$rank."</div>";
                                        echo "<img src='".$row["img_src"]."' alt=''>";
                                        echo "<a href='' class='poster_shadow'>";
                                            echo "<div class='summary'>".$row["summary"]."</div>";
                                            echo "<div class='evaluation'>";
                                                echo "<p>관람평</p>";
                                                echo "<p>".$row["like_rate"]."</p>";
                                            echo "</div>";
                                        echo "</a>";
                                    echo "</div>";
                                    echo "<dl id='movie_metadata'>";
                                        echo "<dt>".$row["title"]."</dt>";
                                        echo "<dd>";
                                            echo "<p>예매율 ".$row["reservation_rate"]." %</p>";
                                            $db_date = (string)$row["release_date"];
                                            $cut_date = explode("-", $db_date);
                                            echo "<p>개봉일 ".$cut_date[0].".".$cut_date[1].".".$cut_date[2]."</p>";
                                        echo "</dd>";
                                    echo "</dl>";
                                    echo "<div class='btn_util'>";
                                        echo "<a href=''>".$row["like_num"]."</a>";
                                        if($row["playing"] == 1) {
                                            echo "<a class='playing' href='' title='영화 예매하기'>예매</a>";
                                        } else if($row["playing"] == 0) {
                                            echo "<a class='not_playing' href='' title='영화 예매하기'>상영예정</a>";
                                        }
                                    echo "</div>";
                                echo "</li>";
                                $rank++;
                            }
                        } else {
                            echo "<div id='no_result'><p>현재 상영중인 영화가 없습니다.</p></div>";
                        }
                        
                        mysqli_close($con);
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