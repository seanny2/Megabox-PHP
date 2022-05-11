<?php
    $con = mysqli_connect("localhost", "root", "", "megabox") or die ("Can't access DB");

    switch($cpage) {
        case 2:
            $query = "SELECT * FROM movie where society='film' ORDER BY reservation_rate DESC";
            break;
        case 3:
            $query = "SELECT * FROM movie where society='classic' ORDER BY reservation_rate DESC";
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