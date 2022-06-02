<nav>
    <p class="tit"><a href="">고객센터</a></p>
    <ul>
        <?php $page = $_GET["page"] ?? NULL; $userid = $_SESSION["userid"] ?? NULL; ?>
        <li class="<?=!$page ? "selected":NULL?>"><a href="/pages/service/service.php">고객센터 홈</a></li>
        <li class="<?=$page=="notice" ? "selected":NULL?>"><a href="/pages/service/notice/notice.php?page=notice">공지사항</a></li>
        <?php if($userid) { ?>
        <li class="<?=$page=="message" ? "selected":NULL?>"><a href="/pages/service/message/message.php?page=message">1:1문의</a></li>
        <?php } else { ?>
        <li class="<?=$page=="message" ? "selected":NULL?>"><a href="javascript:alert('로그인 후 이용할 수 있습니다!');">1:1문의</a></li>
        <?php } ?>
    </ul>
    <div class="info">
        <p class="info_tit">메가박스 고객센터<span>Dream center</span></p>
        <p class="time">10:00~19:00</p>
    </div>
</nav>