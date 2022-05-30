<section id="event_slider">
    <div class="wrap">
        <h2>추천 이벤트</h2>
        <div id="slider_container">
            <ul id="slider_list">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "megabox") or die ("Can't access DB");
        
                    $query = "SELECT * FROM event where division='추천' ORDER BY startDate DESC;";
                    $result = mysqli_query($con, $query);
                    include("./event/event_list.php");
                ?>
            </ul>
        </div>
    </div>
</section>

<section id="megaPick">
    <div class='event_title'>
        <h2>메가Pick</h2>
        <a href="/pages/event/event.php?epage=2" alt="">더보기</a>
    </div>
    <ul class="event_list">
        <?php
            $query = "SELECT * FROM event where division='메가Pick' ORDER BY startDate DESC LIMIT 4;";
            $result = mysqli_query($con, $query);
            include("./event/event_list.php");
        ?>
    </ul>
</section>

<section id="movie">
    <div class='event_title'>
        <h2>영화</h2>
        <a href="/pages/event/event.php?epage=3" alt="">더보기</a>
    </div>
    <ul class="event_list">
        <?php
            $query = "SELECT * FROM event where division='영화' ORDER BY startDate DESC LIMIT 4;";
            $result = mysqli_query($con, $query);
            include("./event/event_list.php");
        ?>
    </ul>
</section>

<section id="theater">
    <div class='event_title'>
        <h2>극장</h2>
        <a href="/pages/event/event.php?epage=4" alt="">더보기</a>
    </div>
    <ul class="event_list">
        <?php
            $query = "SELECT * FROM event where division='극장' ORDER BY startDate DESC LIMIT 4;";
            $result = mysqli_query($con, $query);
            include("./event/event_list.php");
        ?>
    </ul>
</section>

<section id="discount">
    <div class='event_title'>
        <h2>제휴/할인</h2>
        <a href="/pages/event/event.php?epage=5" alt="">더보기</a>
    </div>
    <ul class="event_list">
        <?php
            $query = "SELECT * FROM event where division='제휴/할인' ORDER BY startDate DESC LIMIT 4;";
            $result = mysqli_query($con, $query);
            include("./event/event_list.php");
        ?>
    </ul>
</section>

<section id="premiere">
    <div class='event_title'>
        <h2>시사회/무대인사</h2>
        <a href="/pages/event/event.php?epage=6" alt="">더보기</a>
    </div>
    <ul class="event_list">
        <?php
            $query = "SELECT * FROM event where division='시사회/무대인사' ORDER BY startDate DESC LIMIT 4;";
            $result = mysqli_query($con, $query);
            include("./event/event_list.php");
        ?>
    </ul>
</section>