<?php
session_start();

//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    //header("location: login.php");
   //exit;
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="exam.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="logo">
		<img class="img" src="logo.png">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-3">
				<h7 class="attempt">Attempt:<span class="boxattempt"></span></h7>
				<h7 class="attempt">Unattempt:<span class="boxunattempt"></span></h7>
				<br><br>
				<h7>Question left</h7>
				<div class="attempt">
					<span class="boxunattempt"></span>
					<span class="boxunattempt"></span>
					<span class="boxunattempt"></span>
					<span class="boxunattempt"></span>
					<span class="boxunattempt"></span>
				</div>	
			</div>
			<div class="col-6">
				<div class="check">
					<h3 style="margin-bottom: 1em;">All Questions are compulosry</h3>
					<?php 
					include "question.php";
					?>
					<!--<object data="question.php" width="550px" height="600px"></object>-->
				<div class="">
				<!--	<img class="back" src="img/prev.png">-->
					<a href="exit.php"><input class="btn btn-success col-3" style="margin-left: 10em;" type="submit" name="submit" value="submit"></a>
				<!--	<img class="next" src="img/next.png"> -->
				</div>
			</div>
		</div>
			<div class="col-3">
				<img src="img/img_avatar.png" alt="Avatar" class="avatar"><br>
					&nbsp;<span><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
				<h5>Time</h5>
				<span id="countdown"></span>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
			//timer
      var seconds =180;
    
    //var seconds =1500;
    function secondPassed() 
    {
      seconds--;
      //document.getElementById('r_sec').value=seconds;
      //alert(seconds);
    var minutes = parseInt(seconds/60);
    //seconds = parseInt(seconds);
    var remainingSeconds = parseInt(seconds % 60);
    //alert(remainingSeconds);
    if (remainingSeconds < 10) {
      remainingSeconds = "0" + parseInt(remainingSeconds);  
    }
    //document.getElementById('r_sec1').value=seconds;
    document.getElementById('countdown').innerHTML = minutes + " mins : " + remainingSeconds+ " secs";
    if (parseInt(seconds) === 0) 
    {
      //alert(seconds);
       alert("Time is over");
         clearInterval(countdownTimer);
       document.getElementById('countdown').innerHTML = "Time is Over";
       collectAnswers();
       //document.forms["myForm"].submit();
    
      } 
      
      }
    var countdownTimer = window.setInterval(function(){ 
    secondPassed();
    }, 999);
    
    
    
    
    



	//refresh restriction
	window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
    e.returnValue = '';
});
</script>
</html>