<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <li>
        <a href="">
            <img src="<?=$row["img_src"]?>" alt="">
            <div class="event_info">
                <h4><?=$row["title"]?></h4>
                <p><?=$row["startDate"]?>~<?=$row["endDate"]?></p>
            </div>
        </a>
    </li>
<?php } ?>