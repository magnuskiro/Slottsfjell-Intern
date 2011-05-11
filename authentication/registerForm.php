<?php
/*
 * Created on Mar 29, 2010
 * Edited on May 12, 2011
 *
 * @author Kiro
 */

include("authenticate.php");
//if the user is not super duper admin go somwhere else.
if($_SESSION['username']!="kiro"){
	header( "Location: ../index.php" );
}

echo "
<form action='register.php' method='post'> 
<input type='text' name='username' value'$username'>Username<br/>
<input type='password' name='password'>Passord<br/>
<input type='password' name='password2'>Gjenta Passord<br/>
<input type='submit' value='Register!' name='submit'> 
</form>";
echo "Please fill in the fields, and register. <br>";
echo "When registered, you will be redirected to the front page.";
?>
