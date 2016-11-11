window.onload = init;
function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	loadContent();
}
function loadContent(){
	$("#header_div").load("../pages/header.html");
	$("#nav_div").load("../pages/nav.html");
	$("#footer_div").load("../pages/footer.html");
}