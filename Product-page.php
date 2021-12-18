<?php 
require("connection.inc.php");
$id=safe_value($_GET['id']);

$query="SELECT * FROM product WHERE id={$id}";

$result=mysqli_query($conn,$query);
require("header.inc.php");
?>
<head>
<link href="product-page.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	  </head>
<section>
<div class="container flex">
<div class="flex box">
<div class="Image"><?php
while($product=mysqli_fetch_assoc($result)){?>
 

<img src="card-rec/<?php echo $product['image'];?>" class="main-img" width="350" height="500"></img>


</div>

<div class="product-info">
<h1><?php echo $product['name'];?></h1>
<span class="material-icons"style="color:orange">
star
</span><span class="material-icons"style="color:orange">
star
</span><span class="material-icons"style="color:orange">
star
</span><span class="material-icons"style="color:orange">
star
</span><span class="material-icons"style="color:orange">
star
</span>
<h2><?php echo '$'.$product['price'];?></h2>
<div class="des">
<h4>This is our Tshirt esi thisirt wesi tshirt wo tshirt pta nhi kesi tshirt but tshirt by the way this is tshirt can you know about tshirt sudhir tawaniya and our team ready to develope a e commerce website which is helpful for everyone who try to buy some product or sell some product </h4>
</div>
<input type="button" id="btn<?php echo $product['id'];?>"value="Add to Cart" onclick="addcart(<?php echo $product['id'].',';?>'<?php

if(isset($_SESSION['username'])&&$_SESSION['username']!=''){
	echo $_SESSION['username'];
}
?>',this.id);"/>
<input type="button"value="Buy"/>
</div>

</div>
</div>
<?php } ?>
</section>
<script src="search.inc.js"></script>
</body>
</html>