<?PHP 
include("authenticate.php"); 
$type = "morro";
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
	<h2>Morro biten oppi det hele!</h2>
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
	<?PHP include("content.php"); ?>
	<!-- end content -->
	<!-- start sidebar -->
<?PHP	include("sidebar.php") ?>
	<!-- end sidebar -->
</div>
<!-- end page -->
<?PHP include("footer.php"); ?>
</body>
</html>
