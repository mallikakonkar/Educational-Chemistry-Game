<?php
  include "config.php";  
  session_start();
$_SESSION['gamestart'] = false;
if (isset($_SESSION['gamestart']) && $_SESSION['gamestart'] == false){

    header("Location: Page1.php");
    
}