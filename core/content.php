<?PHP
include("authentication/authenticate.php");
include("db/dbconnect.php");

echo "<div id='content'>";
$type = $_GET['contentType'];

//when adding new material to the site
//this is a special case because we have to maintain the contentType.
if($_GET['action'] == "add"){
	include("content/addform.php");
}
else{
	//conent type switch - selecting content for the different pages of the site
	switch ($type)
	{
		case '':
			$res = mysql_query("SELECT * FROM content ORDER BY date DESC");
			getContent($res);
			break;
		case "scheduel":
			include("content/vaktlister.php");
			break; 
		case "edit";
			include("content/editform.php");
			break;
		default:
			$res = mysql_query("SELECT * FROM content WHERE type='$type' ORDER BY priority ASC");
			isAdmin($type);
			getContent($res);
	}
}

//if the user is an admin, show the add content button. 
function isAdmin($type){
	if($_SESSION['admin']==1){
		echo "
		<center>
		<form action='index.php?contentType=".$type."&action=add' method='post'>
		<input type='submit' name='addbutton' value='Add content to this site'>
		<!-- <input type='hidden' name='type' value='".$type."'> -->
		</form>
		</center>
		";
	}
}

//use data from the result set and display it on the page. 
function getContent($res){
	while($row = mysql_fetch_array($res)){
		echo "<form action='index.php?contentType=edit&article=".$row['id']."' method='post'><input type='hidden' name='id' value='".$row['id']."'>";
			echo "
				<div class='post'><h2 class='title'> " . $row['title'] . "</h2></u>
					<div class='entry'>
						<h3>" . $row['midtitle'] . "</h3>
						<!--  <img src='" . $row['img'] . "' alt='' width='132' height='72' class='left' /> -->
						<p> " . $row['text'] . "</p>
					</div>
					<p class='meta'> Posted on " . $row['date'] . " by:  <a href='#'>".$row['author']."</a> &nbsp;|&nbsp; 
					<a href='#'>comments</a>&nbsp;|&nbsp;
			";
			//if the user is an admin, show the edit button
			if($_SESSION['admin']==1){
				echo"
					<input type='submit' value='edit'>
				";
			}
			echo		"  </p>
				</div>
			"; 
		echo "</form>";
	}//end while
}

echo "</div>";
?>
