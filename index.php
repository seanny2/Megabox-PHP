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
    <section id="benefits">
        <div class="wrap">
            <div class="section_title">
                <h2>혜택</h2>
                <a href=""></a>
            </div>
            <article id="benefits_ad">
                <div id="benefits_slider">

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
                <a href="">큐레이션 더보기</a>
            </div>
            <article id="curation_container">

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
                <dl>
                    <dt>지점</dt>
                    <dd>
                        <span>[남양주현대아울렛 스페이스원] 영화 관람요금 기준 변경 안내</span>
                        <span>2022.04.28</span>
                    </dd>
                    <a href="" title="전체공지 더보기">더보기</a>
                </dl>
            </div>
        </div>
        <div class="wrap">
            <ul id="info_links">
                <li><a href="">고객센터</a></li>
                <li><a href="">자주 묻는 질문</a></li>
                <li><a href="">1:1 문의</a></li>
                <li><a href="">단체/대관문의</a></li>
                <li><a href="">분실물 문의/접수</a></li>
                <li><a href="">더 부티크 프라이빗 대관예매</a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
        <div class="wrap">
            <img src="/img/main/footer_banner.jpg" alt="">
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("./footer.php"); ?>
        </div>
    </footer>
</body>
</html>