
<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $last_day = date("Y-m-d (H:i)");
    
    /* db 연결 */
    $con = mysqli_connect("localhost", "user1", "12345", "megabox"); 	 
    $sql = "select * from member where id='$id'";
    $update_sql = "update member set last_day='$last_day' where id='$id'";
    $result = mysqli_query($con, $sql);
    mysqli_query($con, $update_sql);
    
    $num_match=mysqli_num_rows($result);
    if(!$num_match)
    {
        echo("   					
            <script>    
                window.alert('등록되지 않은 아이디입니다!')  
                history.go(-1)    
            </script>
        ");  
    }
    else{
        $row = mysqli_fetch_array($result); 		
        $db_pass = $row["pass"]; 

        mysqli_close($con);

        if ($pass != $db_pass)			
        {
            echo("   				 
                <script>     
                    window.alert('비밀번호가 틀립니다!')     
                    history.go(-1)  
                </script>   
            ");   
            exit;    
        }
        else 
        {
            session_start();  				 
            $_SESSION["userid"] = $row["id"];   
            $_SESSION["username"] = $row["name"];  
            $_SESSION["userpoint"] = $row["point"];       

            echo("    
                <script> 
                    history.go(-2);
                </script>   
            ");
        }
    }
?>