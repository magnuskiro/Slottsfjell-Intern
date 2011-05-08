<?PHP 
include("authenticate.php"); 
$type="addform"; 

if($_SESSION['admin']==0)
{	
	header( "Location: index.php" );
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : FronzenAge
Description: A two-column, fixed-width template suitable for business sites and blogs.
Version    : 1.0
Released   : 20071108

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP include("head.php"); ?>
<body>
<div id="logo">
	<h1><a href="#">Slottsfjell</a></h1>
	<h2>Side for å legge til ting på siden.</h2>
</div>
<div id="menu">
	<ul>
		<?PHP include("menu.php");?>
	</ul>
	<?PHP include("search.php"); ?>
</div>
<hr />
<?PHP include("banner.php"); ?>
<!-- start page -->
<div id="page">
	<!-- start content -->
<div id="content">	
<div class='post'> 
<form action='add.php' method='post'>

<?PHP 
	echo "Forhåndsvalgt kattegori:" . $_POST['type'] . "

<br />
Velg kategori: 
<select name='type'>
  <option value='".$_POST['type']."'>".$_POST['type']."</option>
  <option value='main'>Forsida/hjem</option>
  <option value='nyheter'>Nyheter</option>
  <option value='hvem'>Om Slottsfjellet</option>
  <option value='jobb'>Jobb på Slottsfjellet</option>
  <option value='vakt'>Vaktlister</option>
  <option value='camping'>Camping</option>
  <option value='info'>INFO</option>
</select>
";
?>
<br>
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
	<p class='meta'> 
		Posted on "date" by <a href='#'>forfatter</a> &nbsp;|&nbsp; 
		<a href='#'>comments</a>
	
	</p>
</div>
	<input type="submit" value="Legg til nytt innlegg.">
	</form>
</div>	
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>

			<?PHP 
				//include("calendar.php");
				include("links.php");
				include("downright.php");
			?>
		</ul>
	</div>
	<!-- end sidebar -->
</div>
<!-- end page -->
<?PHP include("footer.php"); ?>
</body>
</html>

