<?PHP
include("authentication/authenticate.php");
echo "
<div class='post'><h2 class='title'>Vaktlister:</h2></u>
			<div class='entry'>
				<h3>Liste over vaktlister for Slottsfjell 2010</h3>
				<p> 
";

$prefix = "http://dl.dropbox.com/u/31772721/";
$urls="resources/scheduellist.txt"; //path to txt file containing the filenames. 
$page = join("",file("$urls"));
$kw = explode("\n", $page);


if($_SESSION['admin']==1)
{
	for($i=0;$i<count($kw);$i++)
	{
		if(!empty($kw[$i])) {
			echo "
				<form action='core/deleteupload.php' method='POST'>
				<input type='hidden' name='filename' value='".$kw[$i]."'>
				<a href='".$prefix.$kw[$i]."'>".$kw[$i]."</a>
				<input type='submit' value='delete'>
				</form>
			";
		}
	}
}
else 
{
	for($i=0;$i<count($kw);$i++)
	{
		$filename = $prefix.$kw[$i];
		echo "<a href='".$filename."'>".$kw[$i]."</a><br />";
	}
}

//includes the upload ability if the user is an admin. 
if($_SESSION["admin"]==1){
	echo "Navngi fila med et intuitivt navn, sånn at man lett skjønner hva fila innehlder.";
	include("core/upload.php");
}				

				
echo "
			</p>
			</div>
			<p class='meta'> Posted by:  <a href='#'>Kiro</a> &nbsp;|&nbsp; 
			<a href='#'>comments</a>&nbsp;|&nbsp;
			</p>
		</div>
";
/*
if($_SESSION['admin']==1){
	echo "	
	Jeg jobber med filopplasting av vaktlister. Til det er feridig kan vaktlister sendes til:  
	<a href=mailto:magnuskiro@gmail.com>magnuskiro@gmail.com</a> -Kirø
	";
}
*/
?>