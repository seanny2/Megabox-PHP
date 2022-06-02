<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");
    $sql = "SELECT like_num FROM movie WHERE num=$num;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $like_up = (int)$row["like_num"] + 1;
    $sql = "UPDATE movie SET like_num=$like_up WHERE num=$num;";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
        history.go(-1);
        </script>
    ";
?>