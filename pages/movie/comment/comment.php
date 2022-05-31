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
                    $query2 = "SELECT AVG(score) as score_avg FROM comment where movie_num=$movie_num;";
                    $query3 = "UPDATE movie SET like_rate=(SELECT AVG(score) FROM comment where movie_num=$movie_num) WHERE num=$movie_num;";
                    $result1 = mysqli_query($con, $query1);
                    $result2 = mysqli_query($con, $query2);
                    mysqli_query($con, $query3);
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
                            <p><em><?=number_format($row2["score_avg"], 1)?></em></p>
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
                    session_status() === PHP_SESSION_ACTIVE ?: session_start();
                    $userid = $_SESSION["userid"] ?? NULL;
                    $mode = $_GET["mode"] ?? NULL;
                    switch($mode) {
                        case "history":
                            $query = "SELECT * FROM comment WHERE movie_num=$movie_num AND id='$userid' ORDER BY regist_day desc, num desc;";
                            break;
                        case "like":
                            $query = "SELECT * FROM comment WHERE movie_num=$movie_num ORDER BY like_num desc;";
                            break;
                        case "best":
                            $query = "SELECT * FROM comment WHERE movie_num=$movie_num ORDER BY score desc;";
                            break;
                        default:
                            $query = "SELECT * FROM comment WHERE movie_num=$movie_num ORDER BY regist_day desc, num desc;";
                            break;

                    }
                    $result = mysqli_query($con, $query);
                    $cnt = mysqli_num_rows($result);    
                ?>
                <div id="comments_top">
                    <?php if($cnt > 0) { ?>
                    <h3><?=$row1["title"]?>에 대한 <?=$cnt?>개의 이야기가 있어요!</h3>
                    <?php } else { ?>
                    <h3>아직 남겨진 관람평이 없어요.</h3>
                    <?php } ?>
                    <?php if($mode == 'history') { ?>
                        <a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>">전체 글 보기</a>
                        <?php } else { 
                            if(!$userid) { ?>
                            <a href="javascript:alert('로그인 후 이용해 주세요!')">내가 쓴 글 보기</a>
                            <?php } else { ?>
                            <a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=history">내가 쓴 글 보기</a>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div id="filter">
                    <p>전체 <em><?=$cnt?></em> 건</p>
                    <?php if($mode != 'history') { ?>
                    <ul>
                        <li class="<?=!$mode ? 'selected':NULL?>"><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>">최신순</a></li>
                        <li class="<?=$mode=='like' ? 'selected':NULL?>"><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=like">공감순</a></li>
                        <li class="<?=$mode=='best' ? 'selected':NULL?>"><a href="/pages/movie/comment/comment.php?movie=<?=$movie_num?>&mode=best">평점순</a></li>
                    </ul>
                    <?php } ?>
                </div>
                <?php if($mode != "history") { ?>
                <form action="comment_insert.php" method="post">
                    <div id="select_wrap">
                        <div id="recommend_form">
                            <label for="recommend">추천</label>
                            <select name="recommend" id="recommend">
                                <option value="연출">연출</option>
                                <option value="스토리">스토리</option>
                                <option value="배우">배우</option>
                                <option value="영상미">영상미</option>
                            </select>
                        </div>
                        <div id="score_form">
                            <label for="score">점수</label>
                            <select name="score" id="score">
                                <?php for($i = 1; $i <= 10; $i++) { ?>
                                <option value="<?=$i?>"><?=$i?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div id="insert_wrap">
                        <div id="insert_profile">
                            <img src="/img/movie/ico_basic_profile.png" alt="">
                            <p>MEGABOX</p>
                        </div>
                        <div id="insert_box">
                            <input type="hidden" name="movie_num" value="<?=$movie_num?>">
                            <textarea name="content" placeholder="첫번째 한줄평의 주인공이 되어 보세요." require></textarea>
                            <button type="submit">관람평쓰기</button>
                        </div>
                    </div>
                </form>
                <?php } ?>
                <div id="comments_body">
                    <ul id="comments_list">
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <li>
                            <div class="profile">
                                <img src="/img/movie/ico_profile.png" alt="">
                                <p><?=$row["id"]?></p>
                            </div>
                            <dl class="comments_box">
                                <dt class="tit">관람평</dt>
                                <dd class="score"><?=$row["score"]?></dd>
                                <dd class="recommend"><?=$row["recommend"]?></dd>
                                <dd class="content">
                                    <?php if($mode=="history") { ?>
                                    <form action="comment_modify.php?num=<?=$row["num"]?>" method="post">
                                        <textarea name="content"><?=$row["content"]?></textarea>
                                        <input type="submit" value="수정">
                                    </form>
                                    <?php } else { ?>
                                    <?=$row["content"]?>
                                    <?php } ?>
                                </dd>
                                <dd class="like">
                                    <a href="comment_like.php?num=<?=$row["num"]?>"></a>
                                    <span><?=$row["like_num"]?></span>
                                </dd>
                                <dd class="util_btn">
                                    <input type="checkbox" id="more_btn<?=$row["num"]?>" name="more_btn">
                                    <label for="more_btn<?=$row["num"]?>"><img src="/img/movie/ico_util.png" alt=""></label>
                                    <ul id="utils">
                                    <?php if($userid) {
                                        if($mode=='history') { ?>
                                        <li><a href="comment_delete.php?num=<?=$row["num"]?>">삭제</a></li>
                                        <?php } else { ?>
                                        <li><a href="">신고</a></li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li>로그인 후 사용할 수 있습니다.</li>
                                        <li><a href="/pages/login/login_form.html">로그인</a></li>
                                    <?php } ?>
                                    </ul>                                        
                                </dd>
                            </dl>
                        </li>
                        <p><?=$row["regist_day"]?></p>
                        <?php } ?>
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