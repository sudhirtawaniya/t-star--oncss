
var label=document.querySelectorAll(".SignupIteam");
var submitbutton=document.querySelector("input[type='submit']");
var regdetails=document.getElementsByClassName("regdetails")[0];
function hide(){
	for(let i=0;i<label.length;i++){
	label[i].style.display="none";
	}
	submitbutton.value="Login";
	regdetails.innerHTML="<p>Don't have an account<a href='#' onclick='show()'>Signup</a></p>";
	
}
function show(){
	for(let i=0;i<label.length;i++){
	label[i].style.display="inline-block";
	}
	submitbutton.value="Signup";
	regdetails.innerHTML='<div class="regdetails"><p>Already have an account?<a href="#" onclick="hide()">Login</a></p></div>';
}