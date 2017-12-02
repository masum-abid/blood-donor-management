<!doctype html>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>User Registration</h1>
	<form action="" method="post" id="frm">
	<label>Username			: </label><input type="text" name="user"><br/><br/>
	<label>Password			: </label><input type="password" name="pass"><br/><br/>
	<label>Age				: </label><input type="text" name="Age"><br/><br/>
	<label>Address			: </label><input type="text" name="address"><br/><br/>
	<label>Contact Number	: </label><input type="text" name="number 1"><br/><br/>
	<label>Emergency Contact: </label><input type="text" name="number 2"><br/><br/>
	<label>e-mail			: </label><input type="email" name="email"><br/><br/>
	<label>Blood Group		: </label><input type="text" name="bgroup"><br/><br/>
	<label>Gender			: </label><input type="radio" name="gender" value="male"> Male<br>
									<input type="radio" name="gender" value="female"> Female<br>
	<input type="submit" id="btn" value="Register" name="submit"><br/><br/>
	<!-- Login Link -->
	<a href="login.php">Login</a>
	</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) &&
	!empty($_POST['pass']) &&
	!empty($_POST['Age']) &&
	!empty($_POST['address']) &&
	//!empty($_POST['number1']) &&
	!empty($_POST['bgroup']) &&
	//!empty($_POST['bgroup']) &&
	!empty($_POST['gender']) 
	){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $age = $_POST['Age'];
 $address = $_POST['address'];
// $number1 = $_POST['number1'];
 $bgroup = $_POST['bgroup'];
 $gender = $_POST['gender'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'test') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT into userpass(user,pass,Age,address,gender,bgroup) VALUES('$user','$pass', '$age', '$address', '$gender', '$bgroup')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 echo "Your Account Created Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 }
}
?>
</body>
</html>