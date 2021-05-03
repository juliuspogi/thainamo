<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";	
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password);
	mysqli_select_db($conn, $db_name);

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
			if((time() - $_SESSION['bilang']) > 300){ 
			$_SESSION['code']=0; 
			}else{
			$_SESSION['bilang']=time();
?>

<!DOCTYPE html>
<html>
<head>
	<title>THAINAMO</title>
</head>
<body>
	<center>	
		<div id="main2">
		<h3>THAINAMO</span></h3>
		<h1>Thainamo the Authentication code <CODE></CODE></h1>
			<form action="home.php" method="POST">
			
			<h2><?php echo $_SESSION['code']; ?></h2>
			<input type="text" name="authentication" class="text" placeholder="Enter Authentication"><br><br>
			<input type="submit" name="sub" class="sub" align="center">
		</center>
		</form>
	</div>

</body>
</html>


<?php 
}
}
else{
	header("Location: index.php");
}

?>