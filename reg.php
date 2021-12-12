<?php
session_start();
if(isset($_GET['logout'])&& $_GET['logout']==true){
	    session_unset();
	session_destroy();
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link href="reg.css" rel="stylesheet"/>
<title>
Welcome To Tawaniyas
</title>

</head>

<body>
<section>
<nav></nav>
</section>
<section>
<div class="flex input-line" >

<form action="#" method="POST" >
<div id="worng-pass"></div></br></br></br>
<input type="text" name="name"class="SignupIteam" required /><p class="label SignupIteam"tabindex=1>Name</p></br>
<input type="text" name="contact"  class="SignupIteam"  required /><p class="label SignupIteam"tabindex=2>Email or Phone</p></br>

<input type="text" name="username" required /><p class="label" tabindex=3>User Name</p></br>
<input type="password" name="password" required /><p class="label"tabindex=4>Password</p></br>
<input type="button" value="Signup" name="Signup" onclick="submitbtn()"tabindex=5/>

<div class="regdetails"><p>Already have an account?<a href="#" onclick="hide()">Login</a></p>

</div>

</form>

<img class="ani-img flex" src="res-reg/comuser.png" width="500"></img>
</div>

</section>
<script src="reg.js"></script>
<?php
if(isset($_GET['login'])&& $_GET['login']==true){
	echo "<script> hide();</script>";
}
if(isset($_GET['signup'])&&$_GET['signup']==true){
	echo "<script> show();</script>";
}
?>
</body>
</html>