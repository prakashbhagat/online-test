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
		<h5>SSC</h5>
		<p>
			Staff Selection Commission or SSC has been one of the most desirable organizations for Government exams in India. Every year thousands of vacancies are filled by SSC in Government departments. Govt. jobs are the most sought after career choice in India. More so, the government is focusing on providing better facilities and services in every aspect of our lives. Govt is focusing on the development of our country and to do that millions of Jobs will be created in the coming years. SSC is the leading Govt. organization that provides employment to lakhs of students in India. A great opportunity lies ahead for all the SSC aspirants.
		</p>
	</div>
	<div>
		<h5>SSC CHSL</h5>
		<p>
			The Staff Selection Commission conducts Combined Higher Secondary Level (CHSL) exam every year for recruitment in various Ministries/ Departments/ Organizations of the Government of India. The Staff Selection Commission (SSC) conducts the Combined Higher Secondary Level (CHSL, 10+2) Exam for recruitment to various posts like:
				<div class="list">
				<ul>Postal Assistants/Sorting Assistants(PA/SA).</ul>
				<ul>Data Entry Operator (DEO).</ul>
				<ul>Lower Divisional Clerk (LDC).</ul>
				<ul>Court Clerk.</ul>
				</div>
		</p>
	</div>
	<div>
		<h5>SSC MTS</h5>
		<p>
			SSC MTS 2019 Exam is being organized by Staff Selection Commission or SSC to recruit candidates for various posts like the post of:
			<div class="list">
			<ul>Peon</ul>
			<ul>Daftary</ul>
			<ul>Jamadar</ul>
			<ul>Junior Gestetner Operator</ul>
			<ul>Chowkidar</ul>
			<ul>Safaiwala</ul>
			<ul>Mali etc.</ul>
			</div>
		</p>
	</div>
	<?php include 'f.php'?>

</body>
</html>