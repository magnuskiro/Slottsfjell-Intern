<?php
/*
 * Created on Mar 15, 2010
 * Edited on May 12, 2011
 *
 * @author Kiro
 */

include("authenticate.php");
//if the user is not super duper admin go somwhere else.
if($_SESSION['username']!="kiro"){
	header( "Location: ../index.php" );
}

include("../db/dbconnect.php");
$table = "users";

//define username and password. 
$password = $_POST['password'];
$password2 = $_POST['password2'];
$username = $_POST['username'];

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 
	
	//This makes sure they did not leave any fields blank
	if ($_POST['username'] && $_POST['password'] && $_POST['password2']) {
		
		// checks if the username is in use
		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
		$usercheck = $_POST['username'];
		$check = mysql_query("SELECT username FROM ".$table." WHERE username = '$usercheck'") 
			or die(mysql_error());
		$check2 = mysql_num_rows($check);
		
		//if the name exists it gives an error
		if ($check2 == 0) {
			// this makes sure both passwords entered match
			if ($_POST['password'] == $_POST['password2']) {
				
				// here we encrypt the password and add slashes if needed
				$_POST['password'] = sha1($_POST['password']);
				if (!get_magic_quotes_gpc()) {
					$_POST['password'] = addslashes($_POST['password']);
					$_POST['username'] = addslashes($_POST['username']);
				}			
				// now we insert it into the database
				$insert = "INSERT INTO ".$table." (username, password)
					VALUES ('".$_POST['username']."', '".$_POST['password']."')";
				$add_member = mysql_query($insert);
				
				header( "Location: ../index.php" );				
			}
			else{ //when password and password retype don't match'				
				echo ('Your passwords did not match. ');
			}
		}
		else{ //when the usernaem is in use		
			echo ('Sorry, the username '.$_POST['username'].' is already in use.');
		}
	}
	else{ //when the fields are not set
		echo('You did not complete all of the required fields');	
	}
}

include("registerForm.php");

?>