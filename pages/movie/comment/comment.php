<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/con_common.css">
    <link rel="stylesheet" href="/css/movie/comment.css">
    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <section class="contents">
        <div class="wrap">
            <article id="movie_detail">
                <?php
                    $movie_num = $_GET["movie"];
                    $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");
                    $query1 = "SELECT * FROM (SELECT *, rank() over(order by reservation_rate desc) as rank FROM movie) m where m.num=$movie_num";
                    $query2 = "SELECT AVG(like_num) as avg FROM comment where num=$movie_num;";
                    $result1 = mysqli_query($con, $query1);
                    $result2 = mysqli_query($con, $query2);
                    $row1 = mysqli_fetch_assoc($result1);
                    $row2 = mysqli_fetch_assoc($result2);
                ?>
                <div id="bg_img">
                    <img src="<?=$row1["img_src"]?>" alt="">
                </div>
                <div id="bg_pattern"></div>
                <div id="bg_mask"></div>
                <div id="detail_top">
                    <h2><?=$row1["title"]?></h2>
                    <a href=""><?=$row1["like_num"]?></a>
                </div>
                <div id="detail_bottom">
                    <ul>
                        <li>
                            <h5>실관람 평점</h5>
                            <p><em><?php=$row2["avg"]?></em></p>
                        </li>
                        <li>
                            <h5>예매율</h5>
                            <p><em><?=$row1["rank"]?></em> 위( <?=$row1["reservation_rate"]?>% )</p>
                        </li>
                        <li>
                            <h5>좋아요 수</h5>
                            <p><em><?=$row1["like_num"]?></em> 명</p>
                        </li>
                    </ul>
                </div>
                <div id="poster">
                    <img src="<?=$row1["img_src"]?>" alt="">
                </div>
            </article>  

            <article id="comments">
                <?php
                    $query = "SELECT * FROM comment WHERE num=$movie_num;";
                    $result = mysqli_query($con, $query);
                    $cnt = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);    
                ?>
                <div id="comments_top">
                    <?php if($cnt > 0) { ?>
                    <h3><?=$row1["title"]?>에 대한 <?=$cnt?>개의 이야기가 있어요!</h3>
                    <?php } else { ?>
                    <h3>아직 남겨진 관람평이 없어요.</h3>
                    <?php } ?>
                    <?php $mode = $_GET["mode"] ?? NULL;
                    if($mode == 'history') { ?>
                        <a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>">전체 글 보기</a>
                        <?php } else { ?>
                        <a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=history">내가 쓴 글 보기</a>
                    <?php } ?>
                </div>
                <div id="filter">
                    <p>전체 <em><?=$cnt?></em> 건</p>
                    <?php if($mode != 'history') { ?>
                    <ul>
                        <li><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=latest">최신순</a></li>
                        <li><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=like">공감순</a></li>
                        <li><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=best">평점순</a></li>
                    </ul>
                    <?php } ?>
                </div>
                <form action="comment_insert.php" method="post">
                    <div id="insert_profile">
                        <img src="/img/movie/ico_basic_profile.png" alt="">
                        <p>MEGABOX</p>
                    </div>
                    <div id="insert_box">
                        <textarea name="text" placeholder="첫번째 한줄평의 주인공이 되어 보세요."></textarea>
                        <button type="submit">관람평쓰기</button>
                    </div>
                </form>
                <div id="comments_body">
                    <ul id="comments_list">
                        <li>
                            <div class="profile">
                                <img src="" alt="">
                                <p></p>
                            </div>
                            <dl class="comments_box">
                                <dt class="tit">관람평</dt>
                                <dd class="point"></dd>
                                <dd class="recommend"></dd>
                                <dd class="content"></dd>
                                <dd class="like"></dd>
                                <dd class="util_btn"></dd>
                            </dl>
                        </li>
                    </ul>
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
</html>