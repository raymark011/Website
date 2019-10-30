<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$username = $_POST['username'];
    $password = $_POST['password'];
    		
	// checking empty fields
	if(empty($username) || empty($password)) {
				
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO rayanadb.student_tbl(username, password) VALUES(:username, :password)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':username', $username);
		$query->bindparam(':password', $password);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
<a href="index.php">Home</a>
	<br/><br/>

	<form action="adduser.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<!-- <tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr> -->
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
