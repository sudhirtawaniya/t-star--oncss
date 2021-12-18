<?php require('header.inc.php');
require('connection.inc.php');

$query="SELECT product_id FROM `cart-info` WHERE user_name='{$_SESSION['username']}'";
$result=mysqli_query($conn,$query);

?>

<head><link rel="stylesheet" href="cart.css"/></head>
<section>
    <div class="small container cart-page">
        <table>
            <tr>
                <th>product</th>
                <th>quantity</th>
                <th>total</th>
                <th></th>
				
            </tr>
			<?php
			$subtotal=0;
			$tax=0;
while($data=mysqli_fetch_assoc($result)){
	
	$query="SELECT * FROM `product` WHERE id='{$data['product_id']}'";
	
	$fetch=mysqli_query($conn,$query);

	while($product=mysqli_fetch_assoc($fetch)){?>	

            <tr id="<?php echo $product['id'];?>">
                <td>
                    <div class="cart-info">
					
                        <img src="card-rec/<?php echo $product['image'];?>">
                        <div><p><?php echo $product['name']?></p>
                           price:<small class="price"><?php echo $product['price'];?></small>
                        </div>
                    </div>
                </td>
                <td><input type="number" class="btn" min="1" onkeyup="chpri(this.value,this.id)" onchange="chpri(this.value,this.id)" value="1"></td>
                <td class="tprice"><?php echo $product['price'];?></td>
              <?php $subtotal+=$product['price'];?>
                    <td><input type="button" class="rmbtn" value="remove" onclick="remove(<?php echo $product['id'];?>,'<?php echo $_SESSION['username'];?>')" ></td>
                   
          
            </tr>
			 <?php 
            	
			}
}
			?>
      

           
           
       
		
                 
        </table>
            

    </div>
    <div class="total-price">
        <table>
            <tr>
                <td>subtotal</td>
                <td id="subtotal"><?php echo $subtotal;?></td>
            </tr>
            <tr>
                <td>tax</td>
                <td id="tax"><?php echo $tax;?></td>
            </tr>
            <tr>
                <td>total</td>
                <td id="total"><?php echo $tax+$subtotal;?></td>
            </tr>
            </table>
    </div>
    <div class="last-page">
        <input type="button" value="cheakout">
    </div>
	</section>
	<script src="cart.js"></script>
	<script src="search.inc.js"></script>
</body>

</html>