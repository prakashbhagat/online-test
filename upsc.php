<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="hn.css">
	<link rel="stylesheet" type="text/css" href="bus.css">
</head>
<body>
	<?php include 'h.php'?>
	<h4 style="margin-left: 10.7em;">About</h4>
	<div>
		<h5>UPSC</h5>
		<p>
			The Union Public Service Commission (Hindi: संघ लोक सेवा आयोग), commonly abbreviated as UPSC, is India's premier central recruiting agency. It is responsible for appointments to and examinations for All India services and group A & group B of Central services. While Department of Personnel and Training is the central personnel agency in India.
		</p>
	</div>
	<div>
		<h5>CDS</h5>
		<p>
			The “Combined Defence Services”Examination (CDS) is conducted twice a year by the Union Public Service Commission for recruitment into the:
			<div class="list">
			<ul>Indian Military Academy</ul>
			<ul>Indian Naval Academy</ul>
			<ul>Air Force Academy</ul>
			<ul>Officers Training Academy </ul>
			</div>
		</p>
	</div>
	<?php include 'f.php'?>
</body>
</html>