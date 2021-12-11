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
<link href="nav.inc.css" rel="stylesheet" />
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
<?php
session_start();
if(isset($_SESSION['username'])&&$_SESSION['username']!=""){
	echo '<a href="reg.php" target="_blank">'.$_SESSION["username"].'</a>
	<a href="reg.php?logout=true" >Logout</a> </div>';
}

else{
	echo '
  <a href="reg.php?login=true" target="_blank">Login</a>
 <a href="reg.php?signup=true" target="_blank">signup</a>
 </div>';
}
?>

</nav>

</section>