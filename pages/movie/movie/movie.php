<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/con_common.css">
    <link rel="stylesheet" href="/css/movie/movie.css">
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
            <a href="">전체영화</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <article id="contents_inner">
                <h2>전체영화</h2>
                <ul id="contents_menu">
                    <?php $mpage = $_GET["mpage"] ?? 1; ?>
                    <li class=<?=$mpage==1 ? 'menu_selected':NULL?>><a href="/pages/movie/movie/movie.php">박스오피스</a></li>
                    <li class=<?=$mpage==2 ? 'menu_selected':NULL?>><a href="/pages/movie/movie/movie.php?mpage=2">상영에정작</a></li>
                    <li class=<?=$mpage==3 ? 'menu_selected':NULL?>><a href="/pages/movie/movie/movie.php?mpage=3">특별상영</a></li>
                    <li class=<?=$mpage==4 ? 'menu_selected':NULL?>><a href="/pages/movie/movie/movie.php?mpage=4">필름소사이어티</a></li>
                    <li class=<?=$mpage==5 ? 'menu_selected':NULL?>><a href="/pages/movie/movie/movie.php?mpage=5">클래식소사이어티</a></li>
                </ul>
                <?php
                    $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");

                    $s_title = $_POST["title"] ?? NULL; 
                    switch($mpage) {
                        case 1:
                            if($s_title) {
                                $query = "SELECT * FROM movie where title like '%{$s_title}%'ORDER BY reservation_rate DESC" ;
                            } else {
                                $query = "SELECT * FROM movie ORDER BY reservation_rate DESC;";
                            }
                            break;
                        case 2:
                            if($s_title) {
                                $query = "SELECT * FROM movie where release_date > date(now()) and title like '%{$s_title}%' ";
                            } else {
                                $query = "SELECT * FROM movie where release_date > date(now()) ORDER BY reservation_rate DESC";
                            }
                            break;
                        case 3:
                            if($s_title) {
                                $query = "SELECT * FROM movie where division='special' and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where division='special' ORDER BY reservation_rate DESC";
                            }
                            break;
                        case 4:
                            if($s_title) {
                                $query = "SELECT * FROM movie where division='film' and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where division='film' ORDER BY reservation_rate DESC";   
                            }
                            break;
                        case 5:
                            if($s_title) {
                                $query = "SELECT * FROM movie where division='classic' and title like '%{$s_title}%'";
                            } else {
                                $query = "SELECT * FROM movie where division='classic' ORDER BY reservation_rate DESC";
                            }
                            break;
                        default:
                            break;
                    }
                    $result = mysqli_query($con, $query);
                    $cnt = mysqli_num_rows($result);
                ?>
                <div id="movie_search">
                    <span><b><?=$cnt?></b> 개의 영화가 검색되었습니다.</span>
                    <form id="search_form" action="/pages/movie/movie/movie.php" method="post">
                        <input type="hidden" name="mpage" value="<?=$mpage?>" />
                        <input type="text" placeholder="영화명 검색" name="title" value=<?=$s_title?>>
                        <button type="submit"></button>
                    </form>
                </div>
                <ul id="movie_list">
                    <?php
                        if($cnt > 0) {
                            $rank = 1;
                            while($row = mysqli_fetch_assoc($result)) { 
                            ?>
                            <li>
                                <div class="movie_poster">
                                    <div class="movie_rank"><?=$rank?></div>
                                    <img src="<?=$row["img_src"]?>" alt="">
                                    <a href="/pages/movie/comment/comment.php?movie=<?=$row["num"]?>" class="poster_shadow">
                                        <div class="summary"><?=$row["summary"]?></div>
                                        <div class="evaluation">
                                            <p>관람평</p>
                                            <p><?=number_format($row["like_rate"], 1)?></p>
                                        </div>
                                    </a>
                                </div>
                                <dl id="movie_metadata">
                                    <dt><?=$row["title"]?></dt>
                                    <dd>
                                        <p>예매율 <?=$row["reservation_rate"]?> %</p>
                                        <?php 
                                            $release_date = (string)$row["release_date"];
                                            $cut_date = explode("-", $release_date);
                                        ?>
                                        <p>개봉일 <?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?>.</p>
                                    </dd>
                                </dl>
                                <div class="btn_util">
                                    <a href="/pages/movie/movie/movie_like.php?num=<?=$row["num"]?>"><?=$row["like_num"]?></a>
                                    <?php
                                        $release_date = new DateTime((string)$row["release_date"]);
                                        $today = new DateTime(date('Y-m-d'));
                                        $diff = date_diff($release_date, $today);
                                        if($today < $release_date && $diff->days >= 14) { ?>
                                            <a class='not_playing' href='' title='영화 예매하기'>상영예정</a>
                                        <?php } else { ?>
                                            <a class='playing' href='' title='영화 예매하기'>예매</a>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php 
                                $rank++; 
                            }
                        } else { ?>
                            <div id="no_result"><p>현재 상영중인 영화가 없습니다.</p></div>
                        <?php } mysqli_close($con); ?>
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