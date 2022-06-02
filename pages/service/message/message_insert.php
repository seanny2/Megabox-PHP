<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";

    if (!$userid)
    {
        echo("
			<script>
                alert('문의는 로그인 후 이용해 주세요!');
                history.go(-1);
			</script>
        ");
        exit;
    }

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $num = $_POST["num"];
    $send_id= $_POST["send_id"];
    
	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  
	
	$con = mysqli_connect("localhost", "user1", "12345", "megabox");

    $sql = "SELECT m.id FROM (SELECT manager.id FROM member, manager WHERE member.id=manager.id) AS m WHERE m.id = '$userid';";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $is_manager = $row ? true : false;

    if(!$is_manager) {
        $sql = "INSERT INTO message (send_id, subject, content, regist_day) 
                VALUES ('$userid', '$subject', '$content', '$regist_day')";
    } else {
        $sql = "INSERT INTO message (send_id, subject, content, regist_day, reply_num)
                VALUES ('$send_id', '$subject', '$content', '$regist_day', $num)";
    }
	mysqli_query($con, $sql);  

	mysqli_close($con);               

	echo "
	    <script>
	        history.go(-2);
	    </script>
	";
?>

  
