<?php

$conn = new mysqli('localhost', 'root', '');

mysqli_select_db($conn, 'test');

$sql="SELECT * FROM userpass";

$data=mysqli_query($conn, $sql);

?>

<html>

<head>
	<title>List</title>
</head>

<body>

	<div style="position: absolute; right: 50px;"><form>
		<input type="text" name="search" placeholder="Search..">
	</form></div>
	
	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Blood Group</th>
		<th>Address</th>
		<th>Contact</th>
	</tr>
	
<?php

	while($userpass=mysqli_fetch_assoc($data)){
		
		echo "<tr>";
		
		echo "<td>" .$userpass['user']."</td>";
		
		echo "<td>" .$userpass['Age']."</td>";
		
		echo "<td>" .$userpass['bgroup']."</td>";
		
		echo "<td>" .$userpass['address']."</td>";
		
		echo "</tr>";
		
	}
?>

</table>

	
</body>
</html>