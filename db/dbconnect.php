<?php

$dbhost = 'db.host.net';
$dbuser = 'user';
$dbpass = 'password';
$dbname = 'databaseName';
$dbtbl = 'the table to use!';

mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysql_select_db($dbname) or die ("cannot selct database");

?>
