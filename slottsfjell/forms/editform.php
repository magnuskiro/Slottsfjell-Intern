<?PHP 
include("authenticate.php"); 
$type = "edit";
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
	<h2>Editerings side.</h2>
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
<?PHP 
include("dbconnect.php");
$res = mysql_query("SELECT * FROM content WHERE id='$_POST[id]' ORDER BY date DESC");

echo "<div id='content'>"; 

while($row = mysql_fetch_array($res)){
//!!!!!!whilestart

echo "
<div class='post'> 
<form action='edit.php' method='post'>
<input type='hidden' name='id' value='".$_POST[id]."'>
	Forhåndsvalgt kattegori:" . $row['type'] . "

<br />
Velg kategori: 
<select name='type'>
  <option value='".$row['type']."'>".$row['type']."</option>
  <option value='main'>Forsida/hjem</option>
  <option value='nyheter'>Nyheter</option>
  <option value='hvem'>Om Slottsfjellet</option>
  <option value='jobb'>Jobb på Slottsfjellet</option>
  <option value='vakt'>Vaktlister</option>
  <option value='camping'>Camping</option>
  <option value='info'>INFO</option>
</select>
<br>

Prioritering(h&oslash;yere tall er h&oslash;yere p&aring; sida): <br>
<TEXTAREA NAME='priority' COLS=10 ROWS=1>".$row[priority]."</TEXTAREA>

	
<br />
<br />

<h2 class='title'>Tittel: ".$row['title']."</h2>
Ny titel: <input type='text' name='newtitle' value=''>
<input type='hidden' name='title' value='".$row['title']."'>
<br><br>
	<h3>Undertittel: <TEXTAREA NAME='newmidtitle' COLS=40 ROWS=1>".$row[midtitle]."</TEXTAREA></h3>
	<input type='hidden' name='midtitle' value='".$row['midtitle']."'>
	<div class='entry'>

		
		<!--  <img src='". $rom['img'] ."' alt='' width='132' height='72' class='left' /> -->
		<p>
<input type='hidden' name='newctext' value='".$row[text]."'>
		Rediger eller skriv ny tekst i tekstboksen:<br/>
		<TEXTAREA NAME='ctext' COLS=60 ROWS=25>".$row[text]."</TEXTAREA><br/>

<!--<input type='checkbox' name='check' value='1'> Kryss av for aa lagre innlegg. <br>-->
		
		</p>
	</div>
	<p class='meta'> 
		Posted on 'date' by <a href='#'>forfatter</a> &nbsp;|&nbsp; 
		<a href='#'>comments</a>
	
	</p>
</div>
	<input type='submit' value='Oppdater Innlegget.'>
	</form>

";
//!!!!!!whilestop
}

echo "</div>";

?>
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
