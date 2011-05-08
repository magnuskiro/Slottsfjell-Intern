<?php
include("authenticate.php"); 

if($_SESSION['admin']==0)
{	
	header( "Location: index.php" );
}

//echo rand(0, 1500);
if($_SESSION['admin']==1){
	if(isset($_POST['title'])){	
		//connect to database
		include("dbconnect.php"); 
	
		//forms the query to insert current data in to database. 
		$query = "INSERT INTO content (id, type, author, title, midtitle, text, priority) VALUES ('','$_POST[type]','$_SESSION[username]','$_POST[title]','$_POST[midtitle]','$_POST[ctext]','$_POST[priority]')";
		
		//insert into database. 
		mysql_query($query);
		
		//close connection to mysql database. 
		mysql_close();
	
		//sends you back.
		header( 'Location: '.$_POST[type].'.php' );
	}
	else{
		header( 'Location: addform.php' );
	}
}
else {
	header( 'Location: index.php' );
}
?>
