<?php
session_start();
if(isset($_SESSION['username']))
{
header( "Location: index.php" ) ;
}
else
{
echo "
<html><head><title>Login Slottsfjell</title></head><body>
<center>
Har du ikke brukernavn eller passord?
<a href=\"mailto:magnuskiro@gmail.com\"> Send meg en mail.</a>

<form action='login.php' method='post'> 
Username: <input type='text' name='username'><br>
Password: <input type='password' name='password'><br>
<input type='submit' value='OK' name='submit'> 
</form>

</center>
</body></html>

";
}

?>

<center>
<br>
<br>
<br>
Denne siden fungerer særdeles dårlig i Internet Explorer. 
<br>
Jeg anbefaler 
<a href="http://www.mozilla-europe.org/en/firefox/">Firefox</a>, 
<a href="http://www.opera.com/">Opera</a> eller 
<a href="http://www.google.no/chrome">Chrome</a>.
</center>