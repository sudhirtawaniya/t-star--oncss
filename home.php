<h1 class="detailsofpro">T-shirt</h1>
<div class="product flex">
<?php 
session_start();
require("connection.inc.php");
$query="SELECT * FROM product";


$result=mysqli_query($conn,$query);


while($product=mysqli_fetch_assoc($result)){?>

<div class="card "  >
<div onclick="window.open('Product-page.php?id=<?php echo $product['id']?>','_blank')">
<img src="card-rec/<?php echo $product['image'] ?>" width="200px"/>
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

?>


</div>
