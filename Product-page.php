<?php 
require("connection.inc.php");
$id=safe_value($_GET['id']);

$query="SELECT * FROM product WHERE id={$id}";

$result=mysqli_query($conn,$query);
require("header.inc.php");
?>
<head>
<link href="product-page.css" rel="stylesheet" />
<link href="card.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	  </head>
<section>
<div class="container flex">
<div class="flex box">
<div class="Image"><?php
while($product=mysqli_fetch_assoc($result)){
 
$cat_id=$product['cat_id'];
?>
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
<h4><?php echo $product['description']?> </h4>
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
<section id="product">
<?php
$query="SELECT * FROM product WHERE cat_id={$cat_id} AND id != {$id}";

$result=mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0){?>
<h1 class="detailsofpro">similar product</h1>
<div class="product flex">
<?php
while($product=mysqli_fetch_assoc($result)){?>

<div class="card "  >
<div onclick="window.open('Product-page.php?id=<?php echo $product['id']?>','_blank')"class="card-container">
<img src="card-rec/<?php echo $product['image'] ?>"width="100%" height="250vh"/>
<h4><?php echo $product['name'] ?> </h4>
<span > <?php echo $product['price'] ?>rs <del> <?php echo $product['original price']?>rs</del></span></br>
</div>
<input type="button" id="btn<?php echo $product['id'];?>"value="Add to Cart" onclick="addcart(<?php echo $product['id'].',';?>'<?php

if(isset($_SESSION['username'])&&$_SESSION['username']!=''){
	echo $_SESSION['username'];
}
?>',this.id);"/>

<input type="button"value="Buy"/>
</div>

<?php }
}

?>


</div>

</section>
<script src="search.inc.js"></script>
</body>
</html>