<?php
include "config.php";


session_start();





if (isset($_SESSION['gamestart']) && $_SESSION['gamestart'] == true)

{
       
  header("Location: secondPage.php");  
    
}


if(isset($_POST['button1'])) {  ;
   
   $_SESSION['gamestart']= true;
                              
    $_SESSION['score']=0;
                              
        $sql = "SELECT * FROM periodictemp;";
           $result = mysqli_query($conn,$sql);
		   $arr = [];
		  while ($row = mysqli_fetch_assoc($result))
		    
        {
			
            array_push($arr,array("Name"=>$row['Name'],"Symbol"=>$row['Symbol'],"Atomicnumber"=>$row['Atomicnumber'],"Atomicmass"=>$row['Atomicmass'],"Group"=>$row['Group'],"OxidationStates"=>$row['OxidationStates'],"property1"=>$row['property1'],"property2"=>$row['property2'],"property3"=>$row['property3'],"wrong1"=>$row['wrong1'],"wrong2"=>$row['wrong2'],"wrong3"=>$row['wrong3']));

		  }

		   shuffle($arr);    
                              
                              
       $_SESSION['arr']=$arr;                       
                              
   header("Location: secondPage.php"); 
}                                


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <div class="container1">
        <div> </div>
            <div class="col_2">
                <form method="post" action="">
                <button type="submit" class="btn btn-dark btn-block" value="button1" name="button1" >START GAME</button>
                </form>
                <br>
                <br>
                <button  onclick="location.href = 'instructions.html';" type="button" class="btn btn-light btn-block" formmethod="post">INSTRUCTIONS</button>
            </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>