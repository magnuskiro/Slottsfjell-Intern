<?PHP 
include("authentication/authenticate.php"); 
$type = "";
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
<?PHP include("structure/head.php"); ?>
<body>
<div id="logo">
	<h1><a href="#">Slottsfjell</a></h1>
	<h2>Internside for frivillige på Slotsfjell festivalen.</h2>
</div>
<div id="menu">
	<ul>
		<?PHP include("structure/menu.php");?>
	</ul>
	<?PHP include("structure/search.php"); ?>
</div>
<hr />
<?PHP include("banner.php"); ?>
<!-- start page -->
<div id="page">
	<!-- start content -->

<?PHP 
//		echo "content start"; 
		if($type == ""){
			$type = "main";
		}
		include("structure/content.php"); 

//		echo "content end"; 
	?>
	
	<!-- end content -->
	<!-- start sidebar -->
<?PHP	include("structure/sidebar.php") ?>
	<!-- end sidebar -->
</div>
<!-- end page -->
<?PHP include("structure/footer.php"); ?>
</body>
</html>
