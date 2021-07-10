<?php
  include "config.php";  
  session_start();
if (isset($_SESSION['gamestart']) && $_SESSION['gamestart'] == false){

    header("Location: page1.php");
    
}

else{
    
    
    $_SESSION['score']=$_SESSION['score']+1;
    array_pop($_SESSION['arr']);
    header("Location: secondPage.php");
    
    
}
