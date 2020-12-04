<?php  
	$con = mysqli_connect('127.0.0.1', 'root','','38lesson');
	$query = mysqli_query($con, "SELECT * FROM users WHERE email='{$_POST["email"]}' AND password='{$_POST["password"]}'");
	$stroka = $query->fetch_assoc();
if ($query->num_rows > 0) {
	header("Location: home.php?id={$stroka['id']}");
}else{
	header("Location: index.php");
}	
?>