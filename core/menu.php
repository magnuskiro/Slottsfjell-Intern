<?PHP
include("db/dbconnect.php");

echo "<li class='first'><a href='index.php' accesskey='1' title=''>Hjem</a></li>";

$res = mysql_query("SELECT * FROM categories");
$i = 2;
while($row = mysql_fetch_array($res)){
	if($row['active'] == 1){
		echo "<li><a href='index.php?contentType=".$row['type']."' accesskey='$i' title=''>".$row['name']."</a></li>";
	}
	$i++;		
}//end while

?>

<!--
<li class="first"><a href="index.php" accesskey="1" title="">Hjem</a></li>
<li><a href="index.php?contentType=news" accesskey="2" title="">Nyheter</a></li>
<li><a href="index.php?contentType=about" accesskey="3" title="">Om Slottsfjell</a></li>
<li><a href="index.php?contentType=work" accesskey="4" title="">Jobb p&aring Slottsfjell</a></li>
<li><a href="index.php?contentType=scheduel" accesskey="5" title="">Vaktlister</a></li>
<li><a href="index.php?contentType=camping" accesskey="6" title="">Camping</a></li>
<li><a href="index.php?contentType=fun" accesskey="7" title="">Morro</a></li>
<li><a href="index.php?contentType=info" accesskey="8" title="">INFO</a></li>
-->
