<?php
include("../authentication/authenticate.php"); 

if($_SESSION['admin']==0)
{
	header( "Location: ../index.php" );
}

//echo rand(0, 1500);
if($_SESSION['admin']==1){
	if(isset($_POST['title'])){	
		//connect to database
		include("dbconnect.php"); 
	
		//forms the query to insert current data in to the database. 
		$query = "INSERT INTO content (id, priority, type, author, title, midtitle, text) 
		VALUES ('', '".$_POST['priority']."', '".$_POST['type']."', '".$_POST['author']."', '".$_POST['title']."', '".$_POST['midtitle']."', '".$_POST['ctext']."')";
		
		//insert into database. 
		mysql_query($query);
		
		//close connection to mysql database. 
		mysql_close();
	
		//sends you back.
		header( 'Location: ../index.php?contentType='.$_POST[type] );
	}
	else{
		header( 'Location: ../index.php?contentType='.$_POST[type].'&action=add' );
	}
}
else {
	header( 'Location: ../index.php' );
}
?>