<?php
include("dbconnect.php");
include("authenticate.php");

$query = "SELECT * FROM users WHERE username='$_POST[username]'";
$getinfo = mysql_query($query) or die("SQL error: ".mysql_error()); 
$info = mysql_fetch_array($getinfo);

$pw = $info['password'];

$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
if($_POST['username']!=""){
	if($password == $pw)
	{
		session_start(); 
		$_SESSION['username'] = $username;  // store session data 
		$_SESSION['admin'] = $info['admin'];
		header( "Location: index.php" ) ;
	}
	else {
		header( "Location: loginForm.php" ) ;
	}
}
?>

