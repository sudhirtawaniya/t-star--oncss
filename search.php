<?php if((isset($_GET['a']))&&(!empty($_GET['a']))){
	$conn=mysqli_connect('localhost','root','','Tstar') or die("connection failed");
	$a=$_GET['a'];
	$search="SELECT name FROM product WHERE name LIKE '{$a}%'";
	$searchresult=mysqli_query($conn,$search);
	while($name=mysqli_fetch_assoc($searchresult)){
	     echo "<p>{$name['name']}</p></br>";       
	 }
}
?>