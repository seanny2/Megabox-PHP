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
    <link rel="stylesheet" href="/css/service/notice.css?ver=1">
</head>
<body>
    <header class="no_bg">
        <?php include("../../../header.php"); ?>
    </header>
    <div id="page_loc">
        <div class="wrap">
            <span></span>
            <a href="/pages/service/service.php">고객센터</a>
            <a href="/pages/service/notice/notice.php?page=notice"">공지사항</a>
        </div>
    </div>
    <section class="contents">
        <div class="wrap">
            <aside id="left_menu">
               <?php include("../left_menu.php"); ?>
            </aside>
            <article id="contents_inner">
                <h2>공지사항</h2>
                <section id="notice">
                    <ul id="filter">
                        <?php $filter = $_GET["filter"] ?? "all"; ?>
                        <li class="<?=$filter=="all" ? "selected":NULL?>"><a href="/pages/service/notice/notice.php?page=notice&filter=all">전체</a></li>
                        <li class="<?=$filter=="megabox" ? "selected":NULL?>"><a href="/pages/service/notice/notice.php?page=notice&filter=megabox">메가박스 공지</a></li>
                        <li class="<?=$filter=="city" ? "selected":NULL?>"><a href="/pages/service/notice/notice.php?page=notice&filter=city">지점 공지</a></li>
                    </ul>
                    <?php 
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox");
                        $s_subject = $_POST["title"] ?? NULL; 
                        
                        switch($filter) {
                            case "all":
                                if($s_subject) {
                                    $query = "SELECT * FROM notice WHERE subject LIKE '%{$s_subject}%' ORDER BY regist_day DESC";
                                } else {
                                    $query = "SELECT * FROM notice ORDER BY regist_day DESC;";
                                }
                                break;
                            case "megabox":
                                if($s_subject) {
                                    $query = "SELECT * FROM notice WHERE theater='메가박스' subject LIKE '%{$s_subject}%' ORDER BY regist_day DESC";
                                } else {
                                    $query = "SELECT * FROM notice WHERE theater='메가박스' ORDER BY regist_day DESC";
                                }
                                break;
                            case "city":
                                if($s_subject) {
                                    $query = "SELECT * FROM notice WHERE theater!='메가박스' subject LIKE '%{$s_subject}%' ORDER BY regist_day DESC";
                                } else {
                                    $query = "SELECT * FROM notice WHERE theater!='메가박스' ORDER BY regist_day DESC";
                                }
                                break;
                            default:
                                break;
                        }
                        $result = mysqli_query($con, $query);
                        $total_record = mysqli_num_rows($result);
                    ?>
                    <div id="notice_search">
                        <span>전체 <b><?=$total_record?></b> 건</span>
                        <form id="search_form" action="/pages/service/notice/notice.php?page=notice" method="post">
                            <input type="hidden" name="notice" value="<?=$filter?>" />
                            <input type="text" placeholder="영화명 검색" name="title" value=<?=$s_subject?>>
                            <button type="submit"></button>
                        </form>
                    </div>
                    <section id="notice_list">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" width="10%">번호</th>
                                    <th scope="col" width="15%">극장</th>
                                    <th scope="col" width="15%">구분</th>
                                    <th scope="col" width="45%">제목</th>
                                    <th scope="col" width="15%">등록일</th>
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
                                        
                                        $row = mysqli_fetch_array($result);
                                        $regist_day  = substr((string)$row["regist_day"], 0, 10);
                                        $cut_date = explode("-", $regist_day);
                                ?>
                                        <tr>
                                            <td><?=$number?></td>
                                            <td><?=$row["theater"]?></td>
                                            <td><?=$row["division"]?></td>
                                            <td class="title"><a href="notice_view.php?page=notice&num=<?=$row["num"]?>"><?=$row["subject"]?></a></td>
                                            <td><?=$cut_date[0]?>.<?=$cut_date[1]?>.<?=$cut_date[2]?></td>
                                        </tr>
                                <?php
                                        $number--;
                                    }
                                    mysqli_close($con);
                                ?>	
                            </tbody>
                        </table>
                    </section>
                    <ul id="page_num"> 	
                        <?php
                            if ($total_page>=2 && $list_page >= 2)	
                            {
                                $new_page = $list_page-1;
                                echo "<li class='move_btn'><a href='notice.php?page=notice&filter=$filter&list_page=$new_page'><</a></li>";
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
                                    echo "<li class='num_btn'><a href='notice.php?page=notice&filter=$filter&list_page=$i'>$i</a><li>";
                                }
                            }
                            if ($total_page>=2 && $list_page != $total_page)		
                            {
                                $new_page = $list_page+1;	
                                echo "<li class='move_btn'><a href='notice.php?page=notice&filter=$filter&list_page=$new_page'>></a></li>";
                            }
                            else 
                                echo "<li class='move_btn inactive'>&nbsp;</li>";
                        ?>
                    </ul>
                    <div id="button">
                        <?php session_status() === PHP_SESSION_ACTIVE ?: session_start();
                        $manager = $_SESSION["manager"] ?? 0;
                        if($manager) { ?>
                        <a href="./notice_write.php?page=notice">글쓰기</a>
                        <?php } else { ?> 
                        <a href="javascript:alert('관리자 권한이 없습니다!')">글쓰기</a>
                        <?php } ?>
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