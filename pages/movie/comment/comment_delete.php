<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user1", "12345", "megabox");
    $sql = "DELETE FROM comment WHERE num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	        history.go(-1);
	     </script>
	   ";
?>

