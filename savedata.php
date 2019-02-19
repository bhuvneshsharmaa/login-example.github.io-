<?php
$username=$_POST['username'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bhuvi');
$q="INSERT INTO logindb(username,password,age,gender) VALUES('$username','$password',$age,'$gender')";
$result=mysqli_query($con,$q);
if($result)
{
	$message = "registered successsfully";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:http://localhost/login example/login.php');
	exit();
}
else
{
	$msg="error  occured registering user ";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:http://localhost/login example/register.php');
	exit();
}
?>