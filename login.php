<!doctype html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Login</h1>
	<form action="" method="post" id="frm">
	<label>Username: </label><input type="text" name="user"><br></br>
	<label>Password: </label><input type="password" name="pass"><br></br>
	<input type="submit" id="btn" value="Login" name="submit"><br></br>
		<!--New user Register Link -->
	<a href="registration.php">New User Registeration!</a>
	</form>
<?php
	if(isset($_POST["submit"])){
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	//DB Connection
	$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
	//Select DB From database
	$db = mysqli_select_db($conn, 'test') or die("databse error");
	//Selecting database
	$query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
	$numrows = mysqli_num_rows($query);
	if($numrows !=0)
	{
	while($row = mysqli_fetch_assoc($query))
	{
	$dbusername=$row['user'];
	$dbpassword=$row['pass'];
	}
	if($user == $dbusername && $pass == $dbpassword)
	{
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:data.php");
 }
 }
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>
</body>
</html>