<?PHP 
//echo "- content1 -";
include("authenticate.php");
include("dbconnect.php");

if($type=="main"){
$res = mysql_query("SELECT * FROM content ORDER BY date DESC");
}
elseif($type=="hvem"){
$res = mysql_query("SELECT * FROM content WHERE type='$type' ORDER BY priority DESC");
}
else{ 
$res = mysql_query("SELECT * FROM content WHERE type='$type' ORDER BY date DESC");
}

if($_SESSION['admin']==1){
echo "
<center>
<form action='addform.php' method='post'>
<input type='submit' name='addbutton' value='Add content to this site'>
<input type='hidden' name='type' value='".$type."'>
</form>
</center>
";
}

echo "<div id='content'>"; 


if($type=="vakt"){
	include("vaktlister.php");
}

while($row = mysql_fetch_array($res)){
if($type=="main" && $row['type']=="hvem"){ //start if

}
else{ //start else


echo "<form action='editform.php' method='post'><input type='hidden' name='id' value='".$row['id']."'>";
	echo "
		<div class='post'><h2 class='title'> " . $row['title'] . "</h2></u>
			<div class='entry'>
				<h3>" . $row['midtitle'] . "</h3>
				<!--  <img src='" . $rom['img'] . "' alt='' width='132' height='72' class='left' /> -->
				<p> " . $row['text'] . "</p>
			</div>
			<p class='meta'> Posted on " . $row['date'] . " by:  <a href='#'>".$row['author']."</a> &nbsp;|&nbsp; 
			<a href='#'>comments</a>&nbsp;|&nbsp;
	";
	if($_SESSION['admin']==1){
		echo"
			<input type='submit' value='edit'>
		";
	}
	echo		"  </p>
		</div>
	"; 
echo "</form>";


}//end if

}//end while
//onclick=\"document.location = 'edit.php';\" 

echo "</div>";
?>
