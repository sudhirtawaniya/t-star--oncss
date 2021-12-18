<?php 
require('connection.inc.php');
$username=safe_value($_POST['username']);

$product_id=safe_value($_POST['product_id']);
$cheacking_query="SELECT DISTINCT 1 product_id FROM `cart-info` WHERE product_id='{$product_id}' && user_name='{$username}'";
echo $cheacking_query;
$count=mysqli_query($conn,$cheacking_query);

if(mysqli_affected_rows($conn)==0){
	$cheacking_query="SELECT product_id FROM `cart-info` WHERE user_name='{$username}'";

$count=mysqli_query($conn,$cheacking_query);
if(mysqli_affected_rows($conn)<5){
$query="INSERT INTO `cart-info`(`user_name`,`product_id`)VALUES('{$username}','{$product_id}')";

$result=mysqli_query($conn,$query);

if($result){
	
	echo "yes";
	
}
else{
	echo "no";
	
}
}
}


?>