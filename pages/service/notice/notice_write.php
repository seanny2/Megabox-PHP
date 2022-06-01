<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css?ver=1">
    <link rel="stylesheet" href="/css/common.css?ver=1">
    <link rel="stylesheet" href="/css/con_common.css?ver=1">
    <link rel="stylesheet" href="/css/service/nav.css?ver=1">
    <link rel="stylesheet" href="/css/service/notice_write.css?ver=1">
    <script>
        function check_input() {
            if (!document.board_form.theater.value) {
                alert("극장을 선택하세요!");
                document.board_form.theater.focus();
                return;
            } else if (!document.board_form.division.value) {
                alert("구분을 선택하세요!");
                document.board_form.division.focus();
                return;
            } else if (!document.board_form.subject.value) {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            } else if (!document.board_form.content.value) {
                alert("내용을 입력하세요!");    
                document.board_form.content.focus();
                return;
            } else {
                document.board_form.submit();
            }
        }
	</script>
</head>
<body>
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/service/service.php">고객센터</a>
            <a href="/pages/service/notice/notice.php?page=notice"">공지사항</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("../left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>공지사항</h2>
                <form name="board_form" id="insert_form" action="notice_insert.php" method="post">
                    <ul id="write_container">
                        <li>
                            <div>
                                <h4>극장</h4>
                                <select name="theater" id="theater">
                                    <option value="">극장</option>
                                    <option value="메가박스">메가박스</option>
                                    <option value="서울">서울</option>
                                    <option value="경기">경기</option>
                                    <option value="인천">인천</option>
                                    <option value="대전/충청/세종">대전/충청/세종</option>
                                    <option value="부산/대구/경상">부산/대구/경상</option>
                                    <option value="광주/전라">광주/전란</option>
                                    <option value="강원">강원</option>
                                    <option value="제주">제주</option>
                                </select>
                            </div>
                            <div>
                                <h4>구분</h4>
                                <select name="division" id="division">
                                    <option value="">구분</option>
                                    <option value="공지">공지</option>
                                    <option value="이벤트">이벤트</option>
                                    <option value="라이브뷰잉">라이브뷰잉</option>
                                </select>
                            </div>
                        </li>
						<li>
							<h4>제목</h4>
							<span><input name="subject" type="text"></span>
						</li>	    	
						<li id="text_area">	
							<h4>내용</h4>
							<span><textarea name="content"></textarea></span>
						</li>
					</ul>
					<ul id="buttons">
						<li><button type="button" onclick="check_input()">등록</button></li>
						<li><button type="button" onclick="location.href='notice.php'">목록</button></li>
					</ul>
                </form>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../../footer.php"); ?>
        </div>
    </footer>
</body>