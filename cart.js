let btn=document.getElementsByClassName("btn");
for(var i=0;i<btn.length;i++){
	btn[i].id=i;
}
function totalpr(){
	let price=document.getElementsByClassName("tprice");
	let total=0;
	for(var i=0;i<price.length;i++){
		total+=Number(price[i].innerHTML);
	}
	let subt=Number(document.getElementById("subtotal").innerHTML=total);
	let tax=Number(document.getElementById("tax").innerHTML);
	document.getElementById("total").innerHTML=subt+tax;
}
function chpri(value,price){
	let original_val=document.getElementsByClassName("price")[price].innerHTML;
	
	
		if(value>0){
	document.getElementsByClassName("tprice")[price].innerHTML=original_val*value;
	}
	totalpr();
	
}
function remove(id,username){
	let btn=document.getElementsByClassName("rmbtn");
	for(var i=0;i<btn.length;i++){
		btn[i].disabled=true;
	}
	xml.onload=function(){
	
	

	if(xml.responseText=='sucess'){
	//document.getElementById(id).style.display="none";
	document.getElementById(id).innerHTML="";
	
	
	}
	
	for(var j=0;j<btn.length;j++){
		btn[j].disabled=false;
	}
	totalpr();
	}
	xml.open('POST','remove-product-cart.php',true);
xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

xml.send("product_id="+id+"&username="+username);
}