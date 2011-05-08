<?php
include("authenticate.php"); 

if($_SESSION['admin']==0)
{	
	header( "Location: index.php" );
}


if($_POST[newtype]=="") {
	$type=$_POST[type];
} else {
	$type=$_POST[newtype];
}


if($_POST[newtitle]=="") {
	$title=$_POST[title];
} else {
	$title=$_POST[newtitle];
}


if($_POST[newmidtitle]=="") {
	$midtitle=$_POST[midtitle];
} else {
	$midtitle=$_POST[newmidtitle];
}


if($_SESSION['admin']==1){
	if(isset($_POST['title'])){	
		//connect to database
		include("dbconnect.php"); 
		
		//remove old entry
		mysql_query("DELETE FROM content WHERE id='".$_POST[id]."'");
	
		//forms the query to insert current data in to database. 
		$query = "INSERT INTO content (id, type, author, title, midtitle, text, priority) VALUES ('','$type','$_SESSION[username]','$title','$midtitle','$_POST[ctext]','$_POST[priority]')";
		
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
