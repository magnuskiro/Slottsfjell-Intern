<?PHP 
include("authentication/authenticate.php");

if($_SESSION['admin']==0)
{	
	header( "Location: index.php" );
}
?>

<div class='post'> 
	<form action='add.php' method='post'>

<?PHP 
	echo "Forhandsvalgt kattegori: ".$_GET['contentType']."
	<br />
	Velg kategori: 
	<select name='type'>
	  <option value='".$_GET['contentType']."'>".$_GET['contentType']."</option>
	  <option value='news'>Nyheter</option>
	  <option value='about'>Om Slottsfjellet</option>
	  <option value='work'>Jobb p� Slottsfjellet</option>
	  <option value='camping'>Camping</option>
	  <option value='info'>INFO</option>
	</select>
";
?>

	<br />
	Prioritering(h&oslash;yere tall er h&oslash;yere p&aring; sida): <br>
	<TEXTAREA NAME='priority' COLS=10 ROWS=1>0</TEXTAREA>		
		
	<br />
	<br />

	<h2 class='title'><input type='text' name='title'> - Titel</h2>
	<div class='entry'>
		<h3><input type='text' name='midtitle'> - Under titel</h3>
		<!--  <img src='" . $rom['img'] . "' alt='' width='132' height='72' class='left' /> -->
		<p>
			Tekst felt:<br/><TEXTAREA NAME='ctext' COLS=60 ROWS=25></TEXTAREA><br/>
			<!--<input type='checkbox' name='check' value='1'> Kryss av for aa lagre innlegg. <br>-->
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
