<?php
include "config.php";
session_start();
if (isset($_SESSION['gamestart']) && $_SESSION['gamestart'] == false){
    
    header("Location: page1.php");
    
}



$arr=$_SESSION['arr'];    

		
		
		   
?>
<!DOCTYPE html>
<html>
<head>
	 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesSecond.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    align-items: center

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
#help
        {
            background-color: black;   
    width: 100px;
    height: 30px;
    background-color: dodgerblue;
    float: right;

        }
#lowermiddleleft
{
    z-index: 1000;
    position: fixed;
   bottom: 0;
    text-align: center;
    


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
  /background-color: red;/
  position:absolute;
  align-items: center;
  width: 80%;
}

.guess{
  /position: absolute;/
  font-size: 40px;
  line-height: 49px;
  color: #0E9713;
  text-align: center;
  width: 100%;
}
.sentence{
  
  font-size: 175%;
  line-height: 49px;
  color: white;
  text-align: center;
  width: 100%;
  text-shadow: 2px 2px 8px black;
    padding-right: 30px;
    padding-left: 30px;

}
.question{
  /position: absolute;/
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
        

        
        

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 6; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
/*  background-color: #fefefe;*/
  background-color: rgb(0,0,0,0);
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 0;
  width: 10%; /* Could be more or less, depending on screen size */
/*  height: 10%;*/
}
#cModal2 {
    display: none;
}

/* The Close Button */
/*
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
*/


        
        
        
/*
svg {
  width: 100px;
  display: block;
  margin: 40px auto 0;
}

.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
  &.circle {
    -webkit-animation: dash .9s ease-in-out;
    animation: dash .9s ease-in-out;
  }
  &.line {
    stroke-dashoffset: 1000;
    -webkit-animation: dash .9s .35s ease-in-out forwards;
    animation: dash .9s .35s ease-in-out forwards;
  }
  &.check {
    stroke-dashoffset: -100;
    -webkit-animation: dash-check .9s .35s ease-in-out forwards;
    animation: dash-check .9s .35s ease-in-out forwards;
  }
}

p{
  text-align: center;
  margin: 20px 0 60px;
  font-size: 1.25em;
  &.success {
    color: #66ff00;
  }
  &.error {
    color: #D06079;
  }
}


@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}

@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
*/
        
        
        
        #tick{
	width: 100px;
	height: 100px;
}

#tick_circle{
	transform: rotate(-90deg);
	transform-origin: center;
}


#cross{
	width: 100px;
	height: 100px;
}

#cross_circle{
	transform: rotate(-90deg);
	transform-origin: center;
}
#hint
        {
            background-color: black;   
    width: 100px;
    height: 30px;
    background-color: dodgerblue;
    float: left;

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
        <div class="scoreboard" id='lowermiddleleft' style='transform: translate(603px); ' >
    
			<span class="scorefont">SCORE </span> : <?php echo($_SESSION['score']);
            ?>
            
        </div>
    <!-- <br> -->

	<div class="rightchild">
    <br>
<!--
    <div class="scoreboard">
    
			<span class="scorefont">SCORE </span> : echo($_SESSION['score']);
            
            
        </div>
-->
        
        
		<div class="container1">
            <br>
                <div>
                <button id='hint' onclick="hint1()"> <p style='color:white;'>HINT</p></button>
            </div>
            <div >
                <button id='help' onclick="location.href = 'instructions.html';"> <p style='color:white;'>HELP</p></button>
            </div>
            <div  id="hint-statement" style="background-color: white;padding: 20px;display: none;">
            <h5 style="color: blue"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> One of the two answers selected is right.Select Wisely</h5>
        </div>
            <br>
            <br>
            <p class="sentence">Select the the properties that match the following element</p>
            <br>
		<p class="guess">GUESS THE PROPERTY</p>
        <p id="cModal2" class="guess sentence">Well done, try one more hit to reach to target</p>
		
		<?php
        $element=array_pop($arr);
          
        // print_r($element);
        ?>
		<p class="question"><?php echo($element['Name']);?>----<?php echo($element['Symbol']);?>----<?php echo($element['Group']);?></p>
		<!-- <br> -->
	
          
            
            <ul id="buttonlist" style="list-style-type:none;">
                <li><button class="ansbutton" onclick="correct(this)" id ="0"><?php echo($element['property1']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="3"><?php echo($element['wrong1']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="4"><?php echo($element['wrong2']);?></button></li>
                <li><button class="ansbutton" onclick="wrong(this)" id ="5"><?php echo($element['wrong3']);?></button></li>
                <li><button class="ansbutton" onclick="correct(this)" id ="1"><?php echo($element['property2']);?></button></li>
                <li><button class="ansbutton" onclick="correct(this)" id ="2"><?php echo($element['property3']);?></button></li>
            </ul>
		</div>
	</div>
    <div id="cModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
<!--            <span class="close">&times;</span>-->
<!--
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
              <circle class="path circle" fill="none" stroke="#66ff00" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
              <polyline class="path check" fill="none" stroke="#66ff00" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
            </svg>

            <p>Well done, try one more hit to reach to target</p>-->
        <span>
        <svg id="tick" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <g>
            <circle id="tick_circle" cx="256" cy="256" r="240" stroke="rgb(75, 212, 146)" stroke-width="30" fill="transparent" stroke-linecap="round"stroke-dashoffset="2000" stroke-dasharray="2000" />
        </g>
        <rect id="tick_p1" rx="17" ry="17" x="180.448" y="244.566" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -166.3342 225.5657)" width="30" height="0" fill="rgb(75, 212, 146)" />
        <rect id="tick_p2" rx="17" ry="17" x="308.664" y="141" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 350.3278 686.445)" width="30" height="0" fill="rgb(75, 212, 146)" />
        </svg>
        </span>
    </div>

    </div>
    <div id="wModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span><svg id="cross" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <circle id="cross_circle" fill="none" stroke="rgb(179, 60, 60)" stroke-width="30" stroke-miterlimit="10" cx="256" cy="256" r="225"  fill="transparent" stroke-linecap="round"stroke-dashoffset="2000" stroke-dasharray="2000"/>
        <g>

                <rect id="cross_p1" x="239.397" y="67.518" rx="17" ry="17"  transform="matrix(0.7071 0.7071 -0.7071 0.7071 255.9995 -106.0389)" width="33.205" height="0" fill="rgb(179, 60, 60)" />
        </g>
        <g>

                <rect id="cross_p2" x="239.397" y="67.519" rx="17" ry="17"  transform="matrix(0.7071 -0.7071 0.7071 0.7071 -106.039 256.0001)" width="33.205" height="0" fill="rgb(179, 60, 60)" />
        </g>
        </svg>
        </span>
      </div>

    </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

    <script>
var hint2=0;      
var a1=[0,0,0,0,0,0];
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
        
            function cross_animationIn(){
        $("#cross_circle")
            .delay(100)
              .velocity({strokeWidth: 30},200, "easeOutExpo")
                .velocity({strokeDasharray:1600,strokeDashoffset: 0},700, "easeInOutSine")
          //.delay(1500)
          //.velocity("reverse"); //Use this to run the animation in reverse essentially 'animating out'.

        $("#cross_p1")
            .delay(700)
              .velocity({ height: 376.964, width: 33.205 },300, "easeOutQuart")
          //.delay(1500)
          //.velocity("reverse");

                $("#cross_p2")
                        .delay(800)
                        .velocity({ height: 376.964, width: 33.205 },500, "easeOutQuart" )

              //.delay(1500)
              //.velocity("reverse");
            }

    function tick_animationIn(){
        $("#tick_circle")
            .delay(100)
              .velocity({strokeWidth: 30},200, "easeOutExpo")
                .velocity({strokeDasharray:1600,strokeDashoffset: 0},700, "easeInOutSine");
		
        $("#tick_p1")
            .delay(600)
              .velocity({ height: 137.999, width: 30 },300, "easeInExpo");

                $("#tick_p2")
                        .delay(890)
                        .velocity({ height: 259.334, width: 30 },500, "easeOutExpo" );
    }


        
        var cmodal = document.getElementById("cModal");
        var cmodal2 = document.getElementById("cModal2");
        var wmodal = document.getElementById("wModal");
        var span = document.getElementsByClassName("close")[0];
        
        
        
     function correct(ele){

      a1[ele.id]=1;  
console.log(a1);	  
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
         
        setTimeout(function() {    
                 
          
             $(document).ready(function(){
                cross_animationIn();
              setTimeout(function(){
                tick_animationIn();
              },69)

                });
             cmodal2.style.display = "block";}, 1001 );
         
        if(c == 3){
          setTimeout(function(){$('img').fadeTo('slow', 0);},1000);
        }
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
        
      if(c==3 && hint2==0){
          
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
           
          setTimeout(function() {    
                 
          
             $(document).ready(function(){
                cross_animationIn();
              setTimeout(function(){
                tick_animationIn();
              },69)

                });
             cmodal.style.display = "block";}, 1001 );
           console.log("correct1");
          setTimeout(function() {    window.location="correct.php";}, 3690 );
           
           
       }
	   if(c==3 && hint2==1){
          
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
           
          setTimeout(function() {    
                 
          
             $(document).ready(function(){
                cross_animationIn();
              setTimeout(function(){
                tick_animationIn();
              },69)

                });
             cmodal.style.display = "block";}, 1001 );
           console.log("correct1");
          setTimeout(function() {    window.location="correct1.php";}, 3690 );
           
           
       }
         else{
        setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);
         }
     }
        
//    span.onclick = function() {
//      modal.style.display = "none";
//    }

    // When the user clicks anywhere outside of the modal, close it
//    window.onclick = function(event) {
//      if (event.target == cmodal) {
//        cmodal.style.display = "none";
//      }
//      if (event.target == wmodal) {
//        wmodal.style.display = "none";
//      }
//    }
    
    function wrong(ele){
        a1[ele.id]=1;
		console.log(a1);
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
        
        setTimeout(function() {    
                 
          
             $(document).ready(function(){
                cross_animationIn();
              setTimeout(function(){
                tick_animationIn();
              },69)

                });
             cmodal2.style.display = "none";}, 1001 );
        
              if(w==2){
          
                top = 150;
         left = 370;
         setTimeout(function(){$('img').fadeTo('slow', 0);},1000);
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
             $(document).ready(function(){
                cross_animationIn();
              setTimeout(function(){
                tick_animationIn();
              },1500)
			  

                });
             wmodal.style.display = "block";}, 2002 );
           
          console.log("wrong1");
          setTimeout(function() {     window.location="wrong.php";}, 3690 );
           
       }
        
        else{
          setTimeout(function(){l.value =  document.body.style.pointerEvents= 'auto';},2000);

        }

     } 

function hint1(){
	document.getElementById("hint-statement").style.display = "inline-block";
	document.getElementById("hint").style.backgroundColor = "grey";
    hint2=1;
	var edu=0;
		  for (num=0;num<3 && edu==0;num++){
		  if(a1[num]==0)
		  {
			  document.getElementById(num).style.backgroundColor= '#ffff80';
			  edu=1;
			
		  }
		   
		  }
	edu=0;
		   for (num=3;num<6 && edu==0;num++){
		  if(a1[num]==0)
		  {
			  document.getElementById(num).style.backgroundColor= '#ffff80';
			  edu=1;
		  }
		    
		  }
		 document.getElementById('hint').disabled = true;
		
	  }	

    </script>
    
    
</body>
</html>
