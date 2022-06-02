<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";

    if (!$userid)
    {
        echo("
			<script>
                alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                history.go(-1);
			</script>
        ");
        exit;
    }

    $theater = $_POST["theater"];
    $division = $_POST["division"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  
	
	$con = mysqli_connect("localhost", "user1", "12345", "megabox");

	$sql = "INSERT INTO notice (theater, division, subject, content, regist_day) 
            VALUES ('$theater', '$division', '$subject', '$content', '$regist_day')";
	mysqli_query($con, $sql);  

	mysqli_close($con);               

	echo "
	    <script>
	        history.go(-2);
	    </script>
	";
?>

  
