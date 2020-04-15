<?php
session_start();

if(isset($_POST["username"]) && isset($_POST['password']))
{
	$_SESSION['username'] = $_POST['username'];
	$password = $_POST['password'];

	//$password = md5($_POST['password']);
	/* 
	if($_SESSION["username"] == "Helloworld" && $password == "e99a18c428cb38d5f260853678922e03")
		header('Location: myaccount.php');
	else
		header('Location: home1.html');
	*/

	if($_SESSION["username"] == "Helloworld" && $password == "abc123")
		header('Location: myaccount.php');
	else
		header('Location: home1.html');
}

?>