<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'test');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
   
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
	  echo("NO");
    }
if($conn){
}

?>


