<?php 
//action.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "try");
if(isset($POST["email"]))
{
	$query = "
	SELECT * FROM users
	WHERE email = '".$_POST["email"]."'
	AND password = '".$_POST["password"]."'
	";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		$SESSION["email"] = $_POST["email"];
		echo 'Yes';
	}
	else
	{
		echo 'No';
	}
}

if(isset($_POST["action"]))
{
	unset($_SESSION["email"]);	
}
?>