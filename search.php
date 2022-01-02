<?php if((isset($_GET['a']))&&(!empty($_GET['a']))){
	require("connection.inc.php");
	$a=$_GET['a'];
	$search="SELECT name,image FROM product  WHERE name LIKE '{$a}%' OR description LIKE '%{$a}%' LIMIT 6";
	$searchresult=mysqli_query($conn,$search);
	while($name=mysqli_fetch_assoc($searchresult)){
	     echo "<div class='searchrescon'><img src='card-rec/{$name['image']}' width='30'></img><p>{$name['name']}</p></div></br>";       
	 }
}
?>