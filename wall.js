let product=document.getElementById('product');
let cart=document.getElementById('cart');

let slideimg=document.querySelectorAll('img');
let slide=document.getElementsByClassName('banner');



function chnbanner(a){
	
	
	
			let pr=a*100;
			
		slide[0].style.right=pr.toString()+"%";
		
}


xml.onload=function(){
	product.innerHTML=xml.responseText;
	
}
xml.open('POST','home.php',true);
xml.send();
