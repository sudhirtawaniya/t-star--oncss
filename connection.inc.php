<?php 

$conn=mysqli_connect('localhost','root','','Tstar') or die("connection failed");
function safe_value($str){
	return mysqli_real_escape_string($GLOBALS['conn'],$str);
}
?>