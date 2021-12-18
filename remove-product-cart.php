<?php
require('connection.inc.php');
$product_id=safe_value($_POST['product_id']);
$user_name=safe_value($_POST['username']);

$sql="DELETE  FROM `cart-info` WHERE product_id='{$product_id}' && user_name='{$user_name}'";

$query=mysqli_query($conn,$sql);
if($query){
	echo "sucess";
}
else{
	echo "error";
}
?>