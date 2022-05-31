<?php
    $num = $_GET["num"];

    $content = $_POST["content"];
    $regist_day = date("Y-m-d (H:i)");
          
    $con = mysqli_connect("localhost", "user1", "12345", "megabox");
    $sql = "update comment set content='$content', regist_day='$regist_day' where num=$num;";
    mysqli_query($con, $sql);
    mysqli_close($con);     

    echo "
	    <script>
            history.go(-1);
	    </script>
	  ";
?>

   
