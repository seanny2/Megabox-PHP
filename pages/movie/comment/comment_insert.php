<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
			<script>
			alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
			history.go(-1)
			</script>
        ");
        exit;
    }

    $content = $_POST["content"];
	$content = htmlspecialchars($content, ENT_QUOTES);
    $movie_num = $_POST["movie_num"];
    $recommend = $_POST["recommend"];
    $score = $_POST["score"];
	$regist_day = date("Y-m-d (H:i)");  
	
	$con = mysqli_connect("localhost", "user1", "12345", "megabox");

	$sql = "insert into comment (movie_num, score, recommend, id, content, regist_day, like_num) 
            values($movie_num, $score, '$recommend', '$userid', '$content', '$regist_day', 0);";

	mysqli_query($con, $sql);  
	mysqli_close($con);     

	echo "
	   <script>
	    location.href = 'comment.php?movie=$movie_num';
	   </script>
	";
?>

  
