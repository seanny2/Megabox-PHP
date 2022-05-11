<?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
            echo "<a href='' alt=''>";
                echo "<img src='".$row["img_src"]."' alt=''>";
                echo "<div class='event_info'>";
                    echo "<h4>".$row["title"]."</h4>";
                    echo "<p>".$row["startDate"]."~".$row["endDate"]."</p>";
                echo "</div>";
            echo "</a>";
        echo "</li>";
    }
?>