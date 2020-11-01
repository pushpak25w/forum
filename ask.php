<?php
$con=mysqli_connect("localhost","root","","questions") or die(mysqli_error($con));
$title=$_POST['title'];
$description=$_POST['description'];
$tags=$_POST['tags'];
session_start();
$username= $_SESSION["username"];
$insert = "insert into `questions`(`title`,`description`,`tags`,`username`,`created`) values('$title', '$description','$tags','$username',current_timestamp())";
	$r = mysqli_query($con,$insert)  or die("failed ".mysqli_error($con));
header("Location:/student.php");
?>