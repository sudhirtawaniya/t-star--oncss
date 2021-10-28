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

<nav class="nav flex">


<img src="tawaniya_family.png"width="80"></img>


<div class="searchcontrol">
<input type="search" onkeyup="search()"></input>
 <div  id="searchiteams">

 
 </div>
 </div>
 
<div class="reg">
 <a href="reg.html" target="_blank">Login</a>
 <a href="reg.html" target="_blank">signup</a>
 </div>


</nav>

</section>
<section>
<div class="radio-g">
<input type="radio" onclick="chnbanner(0)" checked name="ban-btn"/>
<input type="radio" onclick="chnbanner(1)" name="ban-btn"/>
<input type="radio" onclick="chnbanner(2)"name="ban-btn"/>
<input type="radio" onclick="chnbanner(3)" name="ban-btn"/>
</div>
<div class="banner">
<img src="Banners\im1.jpg" width="100%" height="100%"></img>
<img src="Banners\ban1.jpg" width="100%" height="100%" ></img>
<img src="Banners\ban2.jpg" width="100%" height="100%"></img>
<img src="Banners\ban3.jpg" width="100%" height="100%" ></img>
</div>

</section>
<section id="product">

</section>
</body>
<script src="wall.js"></script>
</html>