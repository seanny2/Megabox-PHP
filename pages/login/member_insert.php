<?php 
    $id = $_POST["id"]; 						
    $pass = $_POST["pass"]; 
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
				 
    $regist_day = date("Y-m-d (H:i)"); 

    $con = mysqli_connect("localhost", "user1", "12345", "megabox"); 	 
    $sql = "insert into member(id, pass, name, email, regist_day, last_day, point) "; 		
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', '$regist_day', 0)"; 

    mysqli_query($con, $sql);
    mysqli_close($con); 						
    
    echo "  
        <script>   
            location.href = '/index.php'; 			
        </script> 
    ";
?>
    
