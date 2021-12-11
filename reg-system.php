<?php
require("connection.inc.php");
session_start();
if(isset($_GET['logout'])&& $_GET['logout']==true){
     session_unset();
	session_destroy();
	
}

if(isset($_POST['Login'])&& $_POST['Login']=="Login"){
	
$username=safe_value($_POST['username']);
$password=safe_value($_POST['password']);
$password=md5($password);
$query="SELECT username FROM userecoard WHERE username='{$username}'AND Password='{$password}'";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
$_SESSION['username']=$username;
	echo "yes";
	die();
}
else{
	echo 'Worng User-name or Password';
}
}
if(isset($_POST['Login'])&& $_POST['Login']=="Signup"){

$username=safe_value($_POST['username']);
$password=safe_value($_POST['password']);
$password=md5($password);
$name=safe_value($_POST['name']);
$contact=safe_value($_POST['contact']);
$query="INSERT INTO userecoard(name,password,username,contact)VALUES('{$name}','{$password}','{$username}','{$contact}')";

$result=mysqli_query($conn,$query);
if($result){
	$_SESSION['username']=$username;
	echo "yes";
	die();
}
else{
	echo "ERROR";
}

}

?>
