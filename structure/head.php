<?PHP echo "<button onClick=\"parent.location='logout.php'\">Logout</button> - Logged in as: " . $_SESSION['username'];  
if($_SESSION['admin']==1){
echo "  (admin)";
}
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<meta http-equiv="Content-Language" content="no"/>
<title>Frivillig på Slottsfjell!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE]>
<style type="text/css">
#sidebar #calendar {
	background-position: 0px 20px;
}
</style>
<![endif]-->
</head>
