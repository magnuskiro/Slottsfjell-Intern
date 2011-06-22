<?php
include("../authentication/authenticate.php"); 

//if the user is not admin redirect to home. 
if($_SESSION['admin']==0)
{	
	header( "Location: ../index.php" );
}

//if the type of the article is not set you can not edit the article. 
if($_POST[type]=="") {
	header( "Location: ../index.php" );
}

if($_SESSION['admin']==1){
	if(isset($_POST['title'])){	
		//connect to database
		include("dbconnect.php"); 
	
		//forms the query to update data in the database. 
		$query = "UPDATE content SET 
		priority = '".$_POST[priority]."',
        type = '".$_POST[type]."',
		author = '".$_SESSION[username]."',
        title = '".$_POST[title]."',
        midtitle = '".$_POST[midtitle]."',
        text = '".$_POST[ctext]."'
		WHERE id = ".$_POST['id'].";
        ";
		
		//insert into database. 
		mysql_query($query);
		
		//close connection to mysql database. 
		mysql_close();
	
		//sends you back.
		header( "Location: ../index.php?contentType=".$_POST[type] );
	}
	else{
		header( "Location: ../index.php?contentType=".$_POST[type] );
	}
}
else {
	header( "Location: ../index.php?contentType=".$_POST[type] );
}
?>
