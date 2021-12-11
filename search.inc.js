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