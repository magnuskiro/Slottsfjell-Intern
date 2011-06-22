<?PHP 
include("authentication/authenticate.php");

if($_SESSION['admin']==1) //this is ugly and should be changed. 
{	

?>

<div class='post'> 
	<form action='db/add.php' method='post'>

<?PHP 
	echo "Forhandsvalgt kattegori: ".$_GET['contentType']."
	<br />
	Velg kategori: 
	<select name='type'>
	  <option value='".$_GET['contentType']."'>".$_GET['contentType']."</option>";
	$res = mysql_query("SELECT * FROM categories");
	while($row = mysql_fetch_array($res)){
		echo "<option value='".$row[type]."'>".$row[name]."</option>";
	}//end while
	echo "</select>";
?>

	<br />
	Prioritering(h&oslash;yere tall er h&oslash;yere p&aring; sida): <br>
	<TEXTAREA NAME='priority' COLS=10 ROWS=1>0</TEXTAREA>	<!-- needs to be changed-> auto priority -->	
		
	<br />
	<br />
	
	<h2 class='title'><input type='text' name='title'> - Titel</h2>
	<div class='entry'>
		<h3><input type='text' name='midtitle'> - Under titel</h3>
		<!--  <img src='" . $rom['img'] . "' alt='' width='132' height='72' class='left' /> -->
		<p>
			Tekst felt:<br/><TEXTAREA NAME='ctext' COLS=60 ROWS=25></TEXTAREA><br/>
		</p>
	</div>
	<br />
	<input type='submit' value='Legg til'>
	<p class='meta'> 
<?PHP 
	echo"
	Posted on 'yyyy-mm-dd hh:MM:ss' by <a href='#'>".$_SESSION['username']."</a> &nbsp;|&nbsp; 
	"; 
?>
		<a href='#'>comments</a>
	</p>
	
	</form>
</div>	

<?PHP
}
else{
	echo "dette har du ikke tilgang til";
}
?>
