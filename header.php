<script>
    function check_id(){
        var userid = document.getElementById("uid").value;
        if(userid) {
            url = "member_check_id.php?userid="+userid;
            window.open(url,"IDchk","width=400,height=200");
        } else 
            alert("아이디를 입력하세요.");
    }
    function check_pw(){
        var pw1 = document.getElementById("pw1").value;
        var pw2 = document.getElementById("pw2").value;
        if(pw1!=pw2)
        {
            alert("패스워드가 일치하지 않습니다");
            return false;
        }   
        return true;
    }
</script>
<input type="checkbox" id="sitemap_btn" name="stiemap">
<input type="checkbox" id="mymegabox_btn" name="mymegabox">
<div class="wrap">
    <div id="header_body">
        <div id="link-icon">
            <label for="sitemap_btn"></label>
            <a href="" title="검색"></a>
            <a href="" title="상영시간표"></a>
            <label for="mymegabox_btn"></label>
        </div>
        <nav id="categories">
            <ul>
                <li>
                    <a href="/pages/movie/movie.php" title="영화">영화</a>
                    <div class="sub_menu">
                        <a href="/pages/movie/movie.php" title="전체영화">전체영화</a>
                        <a href="/pages/movie/curation.php" title="큐레이션">큐레이션</a>
                    </div>
                </li>
                <li>
                    <a href="/pages/event/event.php" title="이벤트">이벤트</a>
                    <div class="sub_menu">
                        <a href="/pages/event/event.php" title="진행중 이벤트">진행중 이벤트</a>
                        <a href="/pages/event/lastevent.php" title="지난 이벤트">지난 이벤트</a>
                        <a href="/pages/event/winner.php" title="당첨자발표">당첨자발표</a>
                    </div>
                </li>
                <li>
                    <a href="" title="고객센터">고객센터</a>
                    <div class="sub_menu">
                        <a href="" title="메가박스 멤버십">공지사항</a>
                        <a href="" title="제휴/할인">1:1문의</a>
                    </div>
                </li>
                <li class="disable">
                    <?php session_start();
                    $userid = $_SESSION["userid"] ?? NULL;
                    if(!$userid) { ?>
                    <a href="/pages/login/login_form.html" title="로그인">로그인</a>
                    <?php } else { ?>
                    <a href="/pages/login/logout.php" title="로그아웃">로그아웃</a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </div>
    <div id="logo">
        <a href="/" title="MEGABOX 메인으로 가기"></a>
    </div>
</div>
<div id="sitemap">
    <div class="wrap">
        <h1>SITEMAP</h1>
        <div id="sitemap_list">
            <dl>
                <dt>영화</dt>
                <dd>
                    <ul>
                        <li><a href="/pages/movie/movie.php">전체영화</a></li>
                        <li><a href="/pages/movie/curation.php">큐레이션</a></li>
                        <li><a href="">영화제</a></li>
                        <li><a href="">무비포스트</a></li>         
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>예매</dt>
                <dd>
                    <ul>
                        <li><a href="">빠른예매</a></li>
                        <li><a href="">상영시간표</a></li>
                        <li><a href="">더 부티크 프라이빗 예매</a></li>        
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>극장</dt>
                <dd>
                    <ul>
                        <li><a href="">전체극장</a></li>
                        <li><a href="">특별관</a></li>     
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>이벤트</dt>
                <dd>
                    <ul>
                        <li><a href="/pages/event/event.php">진행중 이벤트</a></li>
                        <li><a href="/pages/event/lastevent.php">지난 이벤트</a></li>
                        <li><a href="/pages/event/winner.php">당첨자발표</a></li>      
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>스토어</dt>
                <dd>
                    <ul>
                        <li><a href="">새로운 상품</a></li>
                        <li><a href="">메가티켓</a></li>
                        <li><a href="">메가찬스</a></li>
                        <li><a href="">팝콘/음료/굿즈</a></li>         
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>나의 메가박스</dt>
                <dd>
                    <ul>
                        <li><a href="">나의 메가박스 홈</a></li>
                        <li><a href="">예매/구매내역</a></li>
                        <li><a href="">영화관람권</a></li>
                        <li><a href="">스토어교환권</a></li>
                        <li><a href="">할인/제휴쿠폰</a></li>
                        <li><a href="">멤버십포인트</a></li>
                        <li><a href="">나의 무비스토리</a></li>
                        <li><a href="">나의 이벤트 응모내역</a></li>
                        <li><a href="">나의 문의내역</a></li>
                        <li><a href="">자누 쓰는 할인 카드</a></li>
                        <li><a href="">회원정보</a></li>         
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>혜택</dt>
                <dd>
                    <ul>
                        <li><a href="">멤버십 안내</a></li>
                        <li><a href="">VIP LOUNGE</a></li>
                        <li><a href="">제휴/할인</a></li> 
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>고객센터</dt>
                <dd>
                    <ul>
                        <li><a href="">고객센터 홈</a></li>
                        <li><a href="">자주묻는질문</a></li>
                        <li><a href="">공지사항</a></li>
                        <li><a href="">1:1문의</a></li>     
                        <li><a href="">단체/대관문의</a></li>     
                        <li><a href="">분실물문의</a></li>         
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>회사소개</dt>
                <dd>
                    <ul>
                        <li><a href="">메가박스소개</a></li>
                        <li><a href="">사회공헌</a></li>
                        <li><a href="">홍보자료</a></li>
                        <li><a href="">제휴/부대사업문의</a></li>
                        <li><a href="">온라인제보센터</a></li>
                        <li><a href="">IR자료</a></li>
                        <li><a href="">인재채용</a></li>
                        <li><a href="">윤리경영</a></li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>이용정책</dt>
                <dd>
                    <ul>
                        <li><a href="">이용약관</a></li>
                        <li><a href="">위치기반서비스 이용약관</a></li>
                        <li><a href="">개인정보처리방침</a></li>
                        <li><a href="">스크린수배정에관한기준</a></li>         
                    </ul>
                </dd>
            </dl> 
        </div>
    </div>
</div>
<div id="mymegabox">
    <div class="wrap">
        <?php 
        if($userid) { 
            $con = mysqli_connect("localhost", "user1", "12345", "megabox"); 	
            $sql = "select * from member where id='$userid'";   
            $result = mysqli_query($con, $sql); 
            $row = mysqli_fetch_array($result);
            $pass = $row["pass"]; 					
            $name = $row["name"]; 
            $email = $row["email"];
            $last_day = $row["last_day"];				
        
            mysqli_close($con);    
        ?>
        <div id="member">
            <div id="user_info">
                <p>안녕하세요!</p>
                <p><em><?=$name?></em> 회원님</p>
                <p>마지막 접속일:<?=$last_day?></p>
                <a href="/pages/login/logout.php">로그아웃</a>
            </div>
            <form action="/pages/login/member_modify.php?id=<?=$userid?>" method="post">
                <h2>회원<br />정보<br />수정</h2>
                <ul>
                    <li>
                        <h4>아이디</h4>
                        <input type="text" name="id" id="uid" value="<?=$userid ?>" disabled>
                    </li> 
                    <li>
                        <h4>비밀번호</h4>
                        <input type="password" name="pass" id="pw1" value="<?=$pass?>" required autofocus>
                    </li>
                    <li>
                        <h4>비밀번호 확인</h4>
                        <input type="password" name="pass_confirm" id="pw2" value="<?=$pass?>" required>
                    </li>
                    <li>
                        <h4>이름</h4>
                        <input type="text" name="name" value="<?=$name?>"  required>
                    </li>
                    <li>
                        <h4>이메일</h4>
                        <input type="email" name="email" id="" value="<?=$email?>">
                    </li>
                    <li>
                        <input type="submit" value="저장" onclick="check_pw()">
                    </li>
                </ul>
            </form>
        </div>
        <?php } else { ?>
        <ul id="no_member">
            <li><p>로그인 하시면 나의 메가박스를 만날 수 있어요.<br />영화를 사랑하는 당신을 위한 꼭 맞는 혜택까지 확인해 보세요!</p></li>
            <li><a href="/pages/login/login_form.html">로그인</a></li>
            <li><a href="/pages/login/register_form.html">혹시 아직 회원이 아니신가요?</a></li>
        </ul>
        <?php } ?>
    </div>
</div>