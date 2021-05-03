<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";	
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password);
	mysqli_select_db($conn, $db_name);


if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Username is required");
		exit();
	} else if (empty($pass)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
		$sql1 = "SELECT * FROM users where user_name='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result)===0){
						header("Location: index.php?error=wrong username or password");
						}
						else if (mysqli_num_rows($result1)===1){
						$row = mysqli_fetch_assoc($result1);//capitalization
						if($row['user_name']==$uname && $row['password']==$pass){
							$auth=rand(100000,999999);
							$authsql = "UPDATE users SET code='$auth' where user_name='$uname'";
							$result2 = mysqli_query($conn, $authsql);
							$authsql1 = "SELECT * FROM users where user_name='$uname'";
							$result3 = mysqli_query($conn, $authsql1);
							$row1 = mysqli_fetch_assoc($result3);
							$_SESSION['user_name']=$row['user_name'];
							$_SESSION['id']=$row['id'];
							$_SESSION['code']=$row1['code'];
							$_SESSION['bilang']=time();
							header("Location: db_conn.php");
						}
						else {
							header("Location: index.php?error=Incorrect username or password");
						}
					}
					else{
						header("Location: index.php?error=Incorrect username or password");
					}
		}
	}

?>