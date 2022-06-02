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
    <link rel="stylesheet" href="/css/service/message_write.css?ver=1">
    <script>
        function check_input() {
            if (!document.board_form.subject.value) {
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
            <a href="/pages/service/message/message.php?page=message">1:1 문의</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("../left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>1:1 문의</h2>
                <form name="board_form" id="insert_form" action="message_insert.php" method="post">
                    <ul id="write_container">
                        <?php ?>
                        <li>
                            <div>
                                <h4>이름</h4>
                                <span><p><?=$row["name"]?></p></span>
                            </div>
                            <div>
                                <h4>이메일</h4>
                                <span><p><?=$row["email"]?></p></span>
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
						<li><button type="button" onclick="check_input()">보내기</button></li>
						<li><button type="button" onclick="location.href='message.php?page=message'">취소</button></li>
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