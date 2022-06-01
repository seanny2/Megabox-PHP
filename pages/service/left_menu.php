<nav>
    <p class="tit"><a href="">고객센터</a></p>
    <ul>
        <?php $page = $_GET["page"] ?? NULL; ?>
        <li class="<?=!$page ? "selected":NULL?>"><a href="/pages/service/service.php">고객센터 홈</a></li>
        <li class="<?=$page=="notice" ? "selected":NULL?>"><a href="/pages/service/notice/notice.php?page=notice">공지사항</a></li>
        <li class="<?=$page=="inquiry" ? "selected":NULL?>"><a href="/pages/service/inquiry/message.php?page=inquiry">1:1문의</a></li>
    </ul>
    <div class="info">
        <p class="info_tit">메가박스 고객센터<span>Dream center</span></p>
        <p class="time">10:00~19:00</p>
    </div>
</nav>