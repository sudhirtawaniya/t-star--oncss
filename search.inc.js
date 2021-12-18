let searchiteams=document.getElementById('searchiteams');
var searche=document.querySelectorAll("input");
const xml=new XMLHttpRequest();
function search(){

xml.onload=function(){
	searchiteams.innerHTML=xml.responseText;
	
}
xml.open('GET','search.php?a='+searche[0].value,true);
xml.send();
}
function addcart(id,username,btnid){
	
	if(username!=""){
	
xml.open('POST','cart-system.php',true);
xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xml.onload=function(){
	if(xml.responseText=="yes"){
	cart.innerHTML=Number(cart.innerHTML)+1;
	}
	else{
		console.log(xml.responseText);
	}
	
}
xml.send("product_id="+id+"&username="+username);
	}
	
}