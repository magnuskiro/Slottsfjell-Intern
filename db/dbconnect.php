<?php

$dbhost = 'localhost';
$dbuser = 'slottsfjell';
$dbpass = 'magnus';
$dbname = 'slottsfjell';
$dbtbl = 'users';

mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysql_select_db($dbname) or die ("cannot selct database");

?>
