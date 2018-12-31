<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'bhqHbBOfsim5');
   define('DB_DATABASE', 'gallery');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   


   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,'test@test.com');
      $mypassword = mysqli_real_escape_string($db,'Password123'); 
    
     

      $sql = "SELECT * FROM Patient WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
echo $count;
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: test.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>