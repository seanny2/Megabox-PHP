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
    <link rel="stylesheet" href="/css/service/message.css?ver=1">
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
                <h2>문의 내역</h2>
                <section id="message">
                    <?php 
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox");
                        $s_subject = $_POST["title"] ?? NULL; 

                        
                        $query = "SELECT * FROM manager WHERE id='$userid';";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);
                        $is_manager = $row ? true : false;
                        
                        
                        if($is_manager) {
                            if($s_subject) {
                                $query = "SELECT * FROM message WHERE subject='$s_subject' ORDER BY regist_day desc";
                            } else {
                                $query = "SELECT * FROM message ORDER BY regist_day desc";
                            }
                        } else {
                            if($s_subject) {
                                $query = "SELECT * FROM message WHERE send_id='$userid' AND subject='$s_subject' ORDER BY regist_day desc";
                            } else {
                                $query = "SELECT * FROM message WHERE send_id='$userid' ORDER BY regist_day desc";
                            }
                        }
                        $result = mysqli_query($con, $query);
                        $total_record = mysqli_num_rows($result);
                    ?>
                    <div id="message_search">
                        <span>전체 <b><?=$total_record?></b> 건</span>
                        <form id="search_form" action="/pages/service/message/message.php?page=message" method="post">
                            <input type="text" placeholder="검색어를 입력하세요" name="title" value=<?=$s_subject?>>
                            <button type="submit"></button>
                        </form>
                    </div>
                    <section id="message_list">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" width="15%">번호</th>
                                    <th scope="col" width="61%">제목</th>
                                    <th scope="col" width="17%">발신자</th>
                                    <th scope="col" width="17%">등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (isset($_GET["list_page"]))
                                        $list_page = $_GET["list_page"];
                                    else
                                        $list_page = 1;

                                    $scale = 10;

                                    // 전체 페이지 수($total_page) 계산 
                                    if ($total_record % $scale == 0)     
                                        $total_page = floor($total_record/$scale);      
                                    else
                                        $total_page = floor($total_record/$scale) + 1; 
                                
                                    // 표시할 페이지($page)에 따라 $start 계산  
                                    $start = ($list_page - 1) * $scale;      

                                    $number = $total_record - $start;

                                    for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                                    {
                                        mysqli_data_seek($result, $i);
                                        
                                        $row = mysqli_fetch_assoc($result);
                                        
                                        $regist_day  = substr((string)$row["regist_day"], 0, 10);
                                        $cut_date = explode("-", $regist_day); ?>
                                        <tr>
                                            <td><?=$number?></td>
                                            <td class="title"><a href="message_view.php?page=message&num=<?=$row["num"]?>"><?=$row["subject"]?></a></td>
                                            <?php if($row["reply_num"] > 0) { ?>
                                            <td>운영자</td>
                                            <?php } else { ?>
                                            <td><?=$row["send_id"]?></td>
                                            <?php } ?>
                                            <td><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></td>
                                        </tr>
                                <?php
                                        $number--;
                                    }
                                ?>	
                            </tbody>
                        </table>
                    </section>
                    <ul id="page_num"> 	
                        <?php
                            if ($total_page>=2 && $list_page >= 2)	
                            {
                                $new_page = $list_page-1;
                                echo "<li class='move_btn'><a href='message.php?page=message&list_page=$new_page'><</a></li>";
                            }		
                            else {
                                echo "<li class='move_btn inactive'>&nbsp;</li>";
                            }

                            // 게시판 목록 하단에 페이지 링크 번호 출력
                            for ($i=1; $i<=$total_page; $i++)
                            {
                                if ($list_page == $i)     // 현재 페이지 번호 링크 안함
                                {
                                    echo "<li id='selected'><a>$i</a></li>";
                                }
                                else
                                {
                                    echo "<li class='num_btn'><a href='message.php?page=message&list_page=$i'>$i</a><li>";
                                }
                            }
                            if ($total_page>=2 && $list_page != $total_page)		
                            {
                                $new_page = $list_page+1;	
                                echo "<li class='move_btn'><a href='message.php?page=message&list_page=$new_page'>></a></li>";
                            }
                            else 
                                echo "<li class='move_btn inactive'>&nbsp;</li>";
                        ?>
                    </ul>
                    <div id="button">
                        <?php 
                        $query = "select id from manager where id='$userid';";
                        $result = mysqli_query($con, $query);
                        if($row = mysqli_fetch_array($result)) { ?>
                        <a href="javascript:alert('관리자는 문의할 수 없습니다!')">문의하기</a>
                        <?php } else { ?> 
                        <a href="./message_write.php?page=message">문의하기</a>
                        <?php } mysqli_close($con); ?>
                    </div>
                </section>
            </article>
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("../../../footer.php"); ?>
        </div>
    </footer>
</body>