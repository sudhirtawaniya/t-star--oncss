<h1 class="detailsofpro">T-shirt</h1>
<div class="product flex">
<?php 

require("connection.inc.php");
$query="SELECT * FROM product";


$result=mysqli_query($conn,$query);


while($product=mysqli_fetch_assoc($result)){?>

<div class="card " onclick="window.open('Product-page.php?id=<?php echo $product['id']?>','_blank')" >

<img src="card-rec/<?php echo $product['image'] ?>" width="200px"/>
<h4><?php echo $product['name'] ?> </h4>
<span > <?php echo $product['price'] ?>rs <del> <?php echo $product['original price']?>rs</del></span></br>

<input type="button" value="Add to Cart"/>
<input type="button"value="Buy"/>
</div>

<?php }

?>


</div>
