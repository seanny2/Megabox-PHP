<?php
    $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");

    switch($cpage) {
        case 2:
            $query = "SELECT * FROM movie where division='film' ORDER BY reservation_rate DESC";
            break;
        case 3:
            $query = "SELECT * FROM movie where division='classic' ORDER BY reservation_rate DESC";
            break;
        default:
            break;
    }
    $result = mysqli_query($con, $query);
    $cnt = mysqli_num_rows($result);
?>
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
                <a href="" class="poster_shadow">
                    <div class="summary"><?=$row["summary"]?></div>
                    <div class="evaluation">
                        <p>관람평</p>
                        <p><?=$row["like_rate"]?></p>
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
                <a href=""><?=$row["like_num"]?></a>
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