let product=document.getElementById('product');
let searchiteams=document.getElementById('searchiteams');
let slide1=document.querySelectorAll('img');
let slide=document.getElementsByClassName('banner');
var searche=document.querySelectorAll("input");

const xml=new XMLHttpRequest();
function chnbanner(a){
	let k=-(a*100)
	console.log("Enter "+a+" "+k);
	slide1[a+1].style.transform ="translateX("+k+"%)";
	
}
function search(){

xml.onload=function(){
	searchiteams.innerHTML=xml.responseText;
	
}
xml.open('GET','search.php?a='+searche[0].value,true);
xml.send();
}

xml.onload=function(){
	product.innerHTML=xml.responseText;
	
}
xml.open('POST','home.php',true);
xml.send();