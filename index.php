<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wallpaper</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<link href="wall.css" rel="stylesheet" />
</head>
<body>
<section>

<nav class="nav">

<ul>
<li>
<img src="tawaniya_family.png"width="80"></img>


<input type="search"/>
<span class="float">
 <a href="reg.html" target="_blank">Login</a>
 <a href="reg.html" target="_blank">signup</a>
 </span>
 </li>
</ul>

</nav>

</section>
<section>

<img src="Banners\im1.jpg" width="100%" height="300vh" ></img>
<div class="radio-g">
<input type="radio" checked name="ban-btn"/>
<input type="radio" name="ban-btn"/>
<input type="radio" name="ban-btn"/>
</div>
</section>
<section>
<h1 class="detailsofpro">T-shirt</h1>
<?php 
$conn=mysqli_connect('localhost','root','','Tstar') or die("connection failed");
$query="SELECT * FROM product";
$result=mysqli_query($conn,$query);
while($product=mysqli_fetch_assoc($result)){?>
	



<div class="product flex">

<div class="card ">
<img src="card-rec/<?php echo $product['image']?>" width="200px"/>
<h4><?php echo $product['name'] ?> </h4>
<span > <?php echo $product['price'] ?>rs <del> <?php echo $product['original price']?>rs</del></span></br>
<input type="button" value="Add to Cart"/>
<input type="button"value="Buy"/>
</div>

<?php }

?>


</div>
</section>
</body>
</html>