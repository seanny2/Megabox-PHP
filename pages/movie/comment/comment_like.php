<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");
    $sql = "SELECT like_num FROM comment WHERE num=$num;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $like_up = (int)$row["like_num"] + 1;
    $sql = "UPDATE comment SET like_num=$like_up WHERE num=$num;";
    mysqli_query($con, $sql);

    echo "
        <script>
        history.go(-1);
        </script>
    ";
?>