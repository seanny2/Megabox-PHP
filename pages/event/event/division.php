<div class="event_contents">
    <?php
        $con = mysqli_connect("localhost", "root", "", "megabox") or die ("Can't access DB");

        $s_title = $_GET["title"] ?? NULL; 
        switch($epage) {
            case 1:
                include("./event/all.php");
                break;
            case 2:
                if($s_title) {
                    $query = "SELECT * FROM event where division='메가Pick' and title like '%{$s_title}%' ORDER BY startDate DESC;";
                } else {
                    $query = "SELECT * FROM event where division='메가Pick' ORDER BY startDate DESC;";
                }
                break;
            case 3:
                if($s_title) {
                    $query = "SELECT * FROM event where division='영화' and title like '%{$s_title}%' ORDER BY startDate DESC;";
                } else {
                    $query = "SELECT * FROM event where division='영화' ORDER BY startDate DESC;";
                }
                break;
            case 4:
                if($s_title) {
                    $query = "SELECT * FROM event where division='극장' and title like '%{$s_title}%' ORDER BY startDate DESC;";
                } else {
                    $query = "SELECT * FROM event where division='극장' ORDER BY startDate DESC;";
                }
                break;
            case 5:
                if($s_title) {
                    $query = "SELECT * FROM event where division='제휴/할인' and title like '%{$s_title}%' ORDER BY startDate DESC;";
                } else {
                    $query = "SELECT * FROM event where division='제휴/할인' ORDER BY startDate DESC;";
                }
                break;
            case 6:
                if($s_title) {
                    $query = "SELECT * FROM event where division='시사회/무대인사' and title like '%{$s_title}%' ORDER BY startDate DESC;";
                } else {
                    $query = "SELECT * FROM event where division='시사회/무대인사' ORDER BY startDate DESC;";
                }
                break;
            default:
                break;
        } 
        
        $result = mysqli_query($con, $query);
        $cnt = mysqli_num_rows($result);
    ?>
    <div class="event_search">
        <span>전체 <b><?=$cnt?></b> 건</span>
        <form class="search_form" action="" method="get">
            <input type="hidden" name="epage" value="<?=$epage?>" />
            <input type="text" placeholder="검색어를 입력해 주세요" name="title">
            <button type="submit"></button>
        </form>
    </div>
    <ul class="event_list">
        <?php
            if($cnt > 0) {
                include("./event/event_list.php");
            } else {
                echo "<div id='no_result'><p>현재 진행중인 이벤트가 없습니다.</p></div>";
            }
        ?>
    </ul>
</div>