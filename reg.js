
var label=document.querySelectorAll(".SignupIteam");
var submitbutton=document.querySelector("input[type='button']");
var regdetails=document.getElementsByClassName("regdetails")[0];

function hide(){
	for(let i=0;i<label.length;i++){
	label[i].required=false;
	label[i].style.display="none";
	}
	document.getElementById("worng-pass").style.display="none";
	submitbutton.value="Login";
	submitbutton.setAttribute('name','Login');
	regdetails.innerHTML="<p>Don't have an account<a href='#' onclick='show()'>Signup</a></p>";
	
}

function show(){
	for(let i=0;i<label.length;i++){
		label[i].required=true;
	label[i].style.display="inline-block";
	
	}
	document.getElementById("worng-pass").style.display="none";
	submitbutton.value="Signup";
	submitbutton.setAttribute('name','Signup');
	regdetails.innerHTML='<div class="regdetails"><p>Already have an account?<a href="#" onclick="hide()">Login</a></p></div>';
}

const xml=new XMLHttpRequest();
function submitbtn(){
	
var name=document.getElementsByTagName("input")[0].value;
var username=document.getElementsByTagName("input")[2].value;
var contact=document.getElementsByTagName("input")[1].value;
var Password=document.getElementsByTagName("input")[3].value;
 
	
xml.onload=function(){
	console.log(xml.responseText);
	if(xml.responseText=="yes"){
		window.location='index.php';
	}
	else{
	document.getElementById("worng-pass").innerHTML=xml.responseText;
	document.getElementById("worng-pass").style.display="block";
	}
	
}
xml.open('POST','reg-system.php',true);
xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

xml.send("name="+name+"&username="+username+"&contact="+contact+"&password="+Password+"&Login="+ submitbutton.value);
}