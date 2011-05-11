<?PHP 
include("authentication/authenticate.php"); 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<?PHP include("core/head.php"); ?>
<body>
<div id="logo">
	<h1><a href="index.php">Slottsfjell</a></h1>
	<h2>Internside for frivillige på Slotsfjell festivalen.</h2>
</div>
<div id="menu">
	<ul>
		<?PHP include("core/menu.php");?>
	</ul>
	<?PHP include("core/search.php"); ?>
</div>
<hr />
<?PHP 
	include("content/banner.php"); 
	?>

<!-- start page -->
<div id="page">
	<!-- start content -->
<?PHP include("core/content.php"); ?>
	<!-- end content -->
	<!-- start sidebar -->
<?PHP	include("core/sidebar.php") ?>
	<!-- end sidebar -->
</div>
<!-- end page -->
<?PHP include("core/footer.php"); ?>
</body>
</html>
