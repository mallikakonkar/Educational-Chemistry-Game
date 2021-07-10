<?php
include "config.php";
session_start();
if (isset($_SESSION['gamestart']) && $_SESSION['gamestart'] == false){
    
    header("Location: page1.php");
    
}



      $sql = "SELECT * FROM test;";
           $result = mysqli_query($conn,$sql);
		   $arr = [];
		  while ($row = mysqli_fetch_assoc($result))
		    
        {
			
            array_push($arr,array("Name"=>$row['Name'],"Symbol"=>$row['Symbol'],"Atomicnumber"=>$row['Atomicnumber'],"Atomicmass"=>$row['Atomicmass'],"Group"=>$row['Group'],"OxidationStates"=>$row['OxidationStates'],"property1"=>$row['property1'],"property2"=>$row['property2'],"property3"=>$row['property3'],"wrong1"=>$row['wrong1'],"wrong2"=>$row['wrong2'],"wrong3"=>$row['wrong3']));

		  }
// print_r($arr);
		   shuffle($arr);
		
		
		
		   
?>
<!DOCTYPE html>
<html>
<head>
	 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesSecond.css">
    <script> 
        var c=0;
        var w=0;
      
 
   

    </script>

    <style>
   body{
    font-family: 'Oswald', sans-serif;
    background-image: url(background2.jpg);
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.exitbutton {
  display: inline-block;
  padding:  5px 7px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(163, 0, 0);
  border: none;
  border-radius: 10px;
  box-shadow: 0 6px gray;
  position: fixed;
  bottom: 0;
  margin-bottom: 4px;

}
.scoreboard{
  color: black;
  background:rgba(255,255,255,1);
  font-size: 24px;
  display: inline-block;
  width: 200px;
  border: 2px solid lightgreen;
  border-radius: 10px;


}
.scorefont{
    font-family: Georgia, serif;

}
.exitbutton:hover {background-color: #800000}

.exitbutton:active {
  background-color: rgb(192, 2, 2);
  box-shadow: 0 5px #800000;
  transform: translateY(4px);
  outline: none;

}
.exitbutton:focus{
  outline: none;
  
}
 #lowerleft
{
background-color: black;   
    width: 130px;
    height: 100px;
    background-color: red;
    position: fixed;
    bottom: 0;
    right: 0;

}

.rightchild{
  background-color: rgba(255,255,255,0.7);
  border: 2px solid black;
  border-radius: 5px;
  top: 0;
  width:52%; 
  height: auto;
  right:0; 
  bottom: 0;
  position:absolute;
  text-align: center;
  overflow: auto;
}
.leftchild{
  height: 100%;
  width: 48%;
  position: absolute;
  top: 0;
  left: 0;
}
.golfball{
  position: absolute;
  top : 600px;
  left: 300px;
}

@keyframes move {
from {top : var(--t,600px);
  left: var(--l,300px);
}
  to {
    top : var(--m,450px);
  left: var(--w,250px);
  }
}
.container1{
  top: 0;
  text-align: center;
  /*width:60%; */
  /*right:0; */
  bottom: 0;
  margin: 0 10%;
  /*background-color: red;*/
  position:absolute;
  align-items: center;
  width: 80%;
}

.guess{
  /*position: absolute;*/
  font-size: 40px;
  line-height: 49px;
  color: #0E9713;
  text-align: center;
  width: 100%;
}
.question{
  /*position: absolute;*/
  font-size: 35px;
  width: 100%;
  line-height: 43px;
  text-align: center;
  color: #000000;
}

.ansbutton{
  position: relative;
  z-index: 5;
  background:rgba(255,255,255,1);
  height: 60px;
  width: 100%;
  margin-top: 20px;
  border-radius: 10px;
  border-color: white;
}
.ansbutton:focus{
  outline: none;
}
    </style>
</head>
    
<body >
    
	<div class="leftchild " id='#lowerleft'>
        <!-- leftchild -->
       
		<img class="golfball myanimation" id="img" src="Rectangle 92.png">
        <!-- <a href='logout.php'>End Game</a> -->

    </div>
    
    <div id='#lowerleft'>
    <a href='logout.php'><button class="exitbutton">EXIT GAME</button></a>
    </div>
    <!-- <br> -->

	<div class="rightchild">
    <br>
    <div class="scoreboard">
    
			<span class="scorefont">SCORE </span>:<?php echo($_SESSION['score']);
            ?>
            
        </div>
        
        
		<div class="container1">
            <br>
            <br>
            <br>
            <br>
		<p class="guess">GUESS THE PROPERTY</p>
		
		<?php
        $element=array_pop($arr);
        // print_r($element);
        ?>
		<p class="question"><?php echo($element['Name']);?></p>
		<!-- <br> -->
	
          
            
            <ul id="buttonlist" style="list-style-type:none;">
                <li><button class="ansbutton" onclick="correct(this)" id ="b1"><?php echo($element['property1']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="b2"><?php echo($element['wrong1']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="b3"><?php echo($element['wrong2']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="b4"><?php echo($element['wrong3']);?></button></li>
                <li><button class="ansbutton" onclick="correct(this)" id ="b5"><?php echo($element['property2']);?></button></li>
                <li><button class="ansbutton" onclick="correct(this)" id ="b6"><?php echo($element['property3']);?></button></li>
            </ul>
		</div>
	</div>

    <script>


var ul = document.querySelector('#buttonlist');
var max = 6;

for (var i = ul.children.length; i >= 0; i--) {
    if(ul.children.length - i > max) {
        ul.removeChild(ul.children[i]);
    } else {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }
}

        
    	var i=2;

     function correct(ele){

     document.body.style.pointerEvents= 'none';

       
      document.getElementById(ele.id).style.backgroundColor= '#c9fec9';
      document.getElementById(ele.id).disabled = true;
       
        c=c+1;
       
        var t = document.getElementById('img').offsetTop;;
        var l = document.getElementById('img').offsetLeft;
     	var top=document.getElementById('img').offsetTop;
     	var topold=document.getElementById('img').offsetTop;
        var left=document.getElementById('img').offsetLeft;
        var leftold=document.getElementById('img').offsetLeft;
        console.log(topold);
         top = top-75;
         left = left -75;
         console.log(t);
         console.log(l);
           document.querySelector('.myanimation').style.setProperty('--t',t + 'px');
 		 document.querySelector('.myanimation').style.setProperty('--l',l + 'px');
         document.querySelector('.myanimation').style.setProperty('--m',top + 'px');
 		document.querySelector('.myanimation').style.setProperty('--w',left + 'px');
         document.getElementById('img').style.animation = "move 2s forwards";
         setTimeout(function(){document.getElementById('img').style.animation = "";},2000);
         setTimeout(function(){document.getElementById('img').style.top = top + 'px';},2000);
         setTimeout(function(){document.getElementById('img').style.left = left + 'px';},2000);
         setTimeout(function(){t.value = document.getElementById('img').offsetTop;},2000);
         setTimeout(function(){l.value = document.getElementById('img').offsetLeft;},2000);
        
      if(c==3){
            top = 180;
            left = 25;
            document.querySelector('.myanimation').style.setProperty('--t',t + 'px');
 		 document.querySelector('.myanimation').style.setProperty('--l',l + 'px');
         document.querySelector('.myanimation').style.setProperty('--m',top + 'px');
 		document.querySelector('.myanimation').style.setProperty('--w',left + 'px');
         document.getElementById('img').style.animation = "move 2s forwards";
         setTimeout(function(){document.getElementById('img').style.animation = "";},2000);
         setTimeout(function(){document.getElementById('img').style.top = top + 'px';},2000);
         setTimeout(function(){document.getElementById('img').style.left = left + 'px';},2000);
         setTimeout(function(){t.value = document.getElementById('img').offsetTop;},2000);
         setTimeout(function(){l.value = document.getElementById('img').offsetLeft;},2000);
          
          setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);
           
            setTimeout(function() {      alert("correct");}, 2050 );
           console.log("correct1");
          setTimeout(function() {     window.location="correct.php";}, 2050 );
           
           
       }
         else{
        setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);
         }
     }
    function wrong(ele){
       document.body.style.pointerEvents = 'none';

        document.getElementById(ele.id).style.backgroundColor='rgba(256, 0, 0, 0.5)';
        document.getElementById(ele.id).disabled = true;
       w=w+1;
        var t = document.getElementById('img').offsetTop;;
        var l = document.getElementById('img').offsetLeft;
         var top=document.getElementById('img').offsetTop;
        var left=document.getElementById('img').offsetLeft;
         top = top - 75;
         left = left + 75;
         console.log(top);
         document.querySelector('.myanimation').style.setProperty('--t',t + 'px');
 		 document.querySelector('.myanimation').style.setProperty('--l',l + 'px');
         document.querySelector('.myanimation').style.setProperty('--m',top + 'px');
         document.querySelector('.myanimation').style.setProperty('--w',left + 'px');
        

         setTimeout(function(){document.getElementById('img').style.animation = "";},2000);
         setTimeout(function(){document.getElementById('img').style.top = top + 'px';},2000);
         setTimeout(function(){document.getElementById('img').style.left = left + 'px';},2000);
         setTimeout(function(){t.value = document.getElementById('img').offsetTop;},2000);
         setTimeout(function(){l.value = document.getElementById('img').offsetLeft;},2000);
         document.getElementById('img').style.animation = "move 2s forwards";
        
              if(w==2){
                top = 150;
         left = 370;
                document.querySelector('.myanimation').style.setProperty('--t',t + 'px');
 		 document.querySelector('.myanimation').style.setProperty('--l',l + 'px');
         document.querySelector('.myanimation').style.setProperty('--m',top + 'px');
         document.querySelector('.myanimation').style.setProperty('--w',left + 'px');
         setTimeout(function(){document.getElementById('img').style.animation = "";},2000);
         setTimeout(function(){document.getElementById('img').style.top = top + 'px';},2000);
         setTimeout(function(){document.getElementById('img').style.left = left + 'px';},2000);
         setTimeout(function(){t.value = document.getElementById('img').offsetTop;},2000);
         setTimeout(function(){l.value = document.getElementById('img').offsetLeft;},2000);
         document.getElementById('img').style.animation = "move 2s forwards";
     
         setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);

                  
             setTimeout(function() {    
                 
                 alert("wrong");}, 2050 );
           
           console.log("wrong1");
          setTimeout(function() {     window.location="wrong.php";}, 2050 );
           
       }
        
        else{
          setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);

        }

     }  
    </script>
    
    
</body>
</html>