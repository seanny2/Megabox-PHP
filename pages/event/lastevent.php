<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/con_common.css">
    <link rel="stylesheet" href="/css/event/lastevent.css">
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
            <a href="/pages/event/lastevent.php">지난 이벤트</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <article id="contents_inner">
                <h2>지난 이벤트</h2>
                <p>응모하신 이벤트의 당첨 여부는 당첨자발표의 나의 응모결과 확인을 통해 확인하실 수 있습니다.</p>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "megabox") or die ("Can't access DB");
                    
                    $s_title = $_GET["title"] ?? NULL; 
                    if($s_title) {
                        $query = "SELECT * FROM event WHERE endDate < date(now()) and title like '%{$s_title}%' ORDER BY startDate DESC;";
                    } else {
                        $query = "SELECT * FROM event WHERE endDate < date(now()) ORDER BY startDate DESC;";
                    }
                    
                    $result = mysqli_query($con, $query);
                    $cnt = mysqli_num_rows($result);
                ?>
                <div class="event_search">
                    <span>전체 <b><?=$cnt?></b> 건</span>
                    <form class="search_form" action="" method="get">
                        <input type="text" placeholder="검색어를 입력해 주세요" name="title">
                        <button type="submit"></button>
                    </form>
                </div>
                <ul id="lastevent_list">
                    <?php
                        if($cnt > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<li>";
                                    echo "<img src='".$row["img_src"]."' alt=''>";
                                    echo "<div class='le_info'>";
                                        echo "<p class='le_division'>".$row["division"]."</p>";
                                        echo "<h3 class='le_title'>".$row["title"]."</h3>";
                                        echo "<p class='le_date'>".$row["startDate"]." ~ ".$row["endDate"]."</p>";
                                    echo "</div>";
                                echo "</li>";
                            }
                        } else {
                            echo "<li id='no_result'>해당 이벤트가 없습니다.</li>";
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