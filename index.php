<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css?ver=1">
    <link rel="stylesheet" href="/css/common.css?ver=1">
</head>
<body>
    <header class="main_bg">
        <?php include("./header.php"); ?>
    </header>
    <section id="main">
        <div id="bg">
            <div id="bg_pattern"></div>
            <img src="/img/main/bg_img.jpg" alt="">
        </div>
        <div class="wrap">
            <section id="boxoffice">
                <div id="boxoffice_title">
                    <a href="/pages/movie/movie/movie.php" title="박스오피스">박스오피스</a>
                    <a href="/pages/movie/movie/movie.php" title="더 많은 영화보기">더 많은 영화보기</a>
                </div>
                <article id="boxoffice_list">
                    <ul>
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");
                        $query = "SELECT * FROM movie ORDER BY reservation_rate DESC LIMIT 4;";
                        $result = mysqli_query($con, $query);
                        $rank = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <li>
                                <div class="boxoffice_poster">
                                    <div class="boxoffice_rank"><?=$rank?></div>
                                    <img src="<?=$row["img_src"]?>" alt="">
                                    <a href="/pages/movie/comment/comment.php?movie=<?=$row["num"]?>" class="metadata">
                                        <div class="summary"><?=$row["summary"]?></div>
                                        <div class="evaluation">
                                            <p>관람평</p>
                                            <p><?=$row["like_rate"]?></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn_util">
                                    <a href="/pages/movie/movie/movie_like.php?num=<?=$row["num"]?>"><?=$row["like_num"]?></a>
                                    <a href="" title="영화 예매하기">예매</a>
                                </div>
                            </li>
                        <?php $rank++; } ?>
                    </ul>
                </article>
                <ul id="search-link">
                    <li>
                        <form action="/pages/movie/movie.php" method="get">
                            <input type="text" name="title" placeholder="영화명을 입력해 주세요">
                            <button type="submit"></button>
                        </form>
                    </li>
                    <li>
                        <a href="" title="상영시간표 보기">상영시간표</a>
                    </li>
                    <li>
                        <a href="/pages/movie/movie/movie.php" title="박스오피스 보기">박스오피스</a>
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
    <section id="benefits">
        <div class="wrap">
            <div class="section_title">
                <h2>이벤트</h2>
                <a href="/pages/event/event.php"></a>
            </div>
            <article id="benefits_ad">
                <div id="benefits_slider">
                    <div id="slider_left">
                        <ul id="slider_bottom-to-top">
                            <li><img src="/img/main/slider_btt_1.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_2.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_3.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_4.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_5.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_6.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div id="slider_right">
                        <ul id="slider_right-to-left">
                            <li><img src="/img/main/slider_rtl_1.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_2.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_3.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_4.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_5.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_6.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div id="benefits_banner">
                    <img src="/img/main/benefits_banner_1.jpg" alt="">
                    <img src="/img/main/benefits_banner_2.jpg" alt="">
                </div>
                <img src="/img/main/benefits_banner_3.jpg" alt="">
            </article>
            <ul id="menu_links">
                <li><a href="" title="VIP LOUNGE 페이지로 이동">VIP LOUNGE</a></li>
                <li><a href="" title="멤버십 페이지로 이동">멤버십</a></li>
                <li><a href="" title="할인카드안내 페이지로 이동">할인카드안내</a></li>
                <li><a href="" title="이벤트 페이지로 이동">이벤트</a></li>
                <li><a href="" title="스토어 페이지로 이동">스토어</a></li>
            </ul>
        </div>
    </section>
    <section id="curation">
        <div class="wrap">
            <div class="section_title">
                <h2>큐레이션</h2>
                <a href="/pages/movie/curation/curation.php">큐레이션 더보기</a>
            </div>
            <article id="curation_container">
                <?php
                $query = "SELECT * FROM movie WHERE division!='special' ORDER BY reservation_rate DESC LIMIT 5";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div id="curr_curation">
                    <?php 
                        if($row["division"]=="classic") $society_mark = "classic_mark";
                        else $society_mark = "film_mark";
                    ?>
                    <div id="curation_img" class="<?=$society_mark?>">
                        <a href="/pages/movie/comment/comment.php?movie=<?=$row["num"]?>"><img src="<?=$row["img_src"]?>" alt=""></a>
                        <div>
                            <a href="">상세정보</a>
                            <a href="">예매</a>
                        </div>
                    </div>
                    <div id="curation_info">
                        <div id="curation_tag">#<?=$row["division"]=="classic" ? "클래식소사이어티":"필름소사이어티"?></div>
                        <div id="curation_title"><?=$row["title"]?></div>
                    </div>
                </div>
                <ul id="curation_list">
                <?php while($row = mysqli_fetch_assoc($result)) {
                    if($row["division"]=="classic") $society_mark = "classic_mark";
                    else $society_mark = "film_mark"; ?>
                    <li>
                        <div class="<?=$society_mark?>">
                            <a href="/pages/movie/comment/comment.php?movie=<?=$row["num"]?>"><img src="<?=$row["img_src"]?>" alt=""></a>
                        </div>
                        <p><?=$row["title"]?></p>
                    </li>
                <?php } ?>
                </ul>
            </article>
        </div>
    </section>
    <section id="information">
        <div class="wrap">
            <div class="section_title">
                <h2>메가박스 안내</h2>
            </div>
            <ul id="info-special_list">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div id="info_notice">
            <div class="wrap">
                <?php 
                $query = "SELECT * FROM notice ORDER BY regist_day DESC LIMIT 1";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                $regist_day  = substr((string)$row["regist_day"], 0, 10);
                $cut_date = explode("-", $regist_day);
                ?>
                <dl>
                    <dt>공지사항</dt>
                    <dd>
                        <a href="/pages/service/notice/notice_view.php?page=notice&num=<?=$row["num"]?>"><?=$row["subject"]?></a>
                        <span><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></span>
                    </dd>
                    <a href="/pages/service/notice/notice.php?page=notice" title="전체공지 더보기">더보기</a>
                </dl>
            </div>
        </div>
        <div class="wrap">
            <ul id="info_links">
                <li><a href="/pages/service/service.php">고객센터</a></li>
                <?php session_status() === PHP_SESSION_ACTIVE ?: session_start();
                $userid = $_SESSION["userid"] ?? NULL;
                if($userid) { ?>
                <li><a href="/pages/service/message/message.php?page=message">1:1 문의</a></li>
                <?php } else { ?>
                <li><a href="javascript:alert('로그인 후 이용할 수 있습니다!');">1:1 문의</a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    
    <footer>
        <div class="wrap">
            <?php include("./footer.php");  mysqli_close($con); ?>
        </div>
    </footer>
</body>
</html>