<?php
include("connect.php");
// INSERT INTO `users`(`username`, `password`) VALUES (gcp','admin');
// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

$sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) {
	echo"<script>alert('Notice: Administrator has login successfully!')</script>";
   	$script = "<script>window.location = 'home.php';</script>";
   	echo $script;
}else {
 	echo"<script>alert('Notice: Invalid Username or Password.')</script>";
  	$script = "<script>window.location = 'sign.html';</script>";
  	echo $script;
}
$conn->close();
?>
