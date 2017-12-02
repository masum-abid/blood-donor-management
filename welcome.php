<?php
session_start();
if(!isset($_SESSION["sess_user"])){
header("Location: loginn.php");
}
else
{
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BB</title>
</head>
<body>
	<h1 align="center">Welcome</h1>
	<div align="center"><a href="data.php">Find Your Required Donor</a></div>
	<?=$_SESSION['sess_user'];
	?>!
	<div style="position: absolute; bottom: 5px;"><a href="logout.php">Logout</a></div> 
</body>
</html>
<?php
}
?>