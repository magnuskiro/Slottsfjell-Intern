<?PHP

session_start();

if(!isset($_SESSION['username']))
{
header( "Location: authentication/loginForm.php" );
}
else 
{
	if($_SESSION['username']==""){
		header( "Location: loginForm.php" );
	}
}

?>
