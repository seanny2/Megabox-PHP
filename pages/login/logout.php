<?php 
   session_start();
   unset($_SESSION['userid']);
   unset($_SESSION['username']);
   unset($_SESSION['userpoint']);

   echo "
   <script>
      history.go(-1);
   </script> ";
?>
