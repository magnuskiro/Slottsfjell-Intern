<?PHP
include("authenticate.php");
include("dbconnect.php");
mysql_query("DELETE FROM content WHERE id='".$_POST[id]."'");
header( "Location: ".$_POST[type].".php" );
?>