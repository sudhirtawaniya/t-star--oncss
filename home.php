<?php
session_start();
require("connection.inc.php");
$task="SELECT * FROM category";
$cat_iteam=mysqli_query($conn,$task);


while($iteam=mysqli_fetch_assoc($cat_iteam)){
$query="SELECT * FROM product WHERE cat_id='{$iteam['cat_id']}'";


$result=mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0){?>
<h1 class="detailsofpro"><?php echo $iteam['cat_name'];?></h1>
<div class="product flex">
<?php
while($product=mysqli_fetch_assoc($result)){?>

<div class="card "  >
<div onclick="window.open('Product-page.php?id=<?php echo $product['id']?>','_blank')" class="card-container">
<img src="card-rec/<?php echo $product['image'] ?>" width="100%" height="250vh"/>
<h4><?php echo $product['name'] ?> </h4>
<span > <?php echo $product['price'] ?>rs <?php
if($product['price']<$product['original price']){


echo "<del>".$product['original price']." rs</del>";}?></span></br>
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
<?php } ?>