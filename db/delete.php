<?PHP
include("../authentication/authenticate.php");
include("dbconnect.php");
if(isset($_POST[checkbox])){
	mysql_query("DELETE FROM content WHERE id='".$_POST[id]."'");
	header( "Location: ../index.php" );
	}
	else{
		header( "Location: ../index.php?contentType=delete?article=".$_POST[id] );
	}
?>