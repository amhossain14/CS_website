window.onload = init;
function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	add.onclick = makeRequest(../pages/add_update.php);
	change.onclick = makeRequest(../pages/change_update.php);
	makeRequest(../pages/header.html);
	makeRequest(../pages/nav.html);
	makeRequest(../pages/footer.html);
	var httpRequest;
}
(function makeRequest(url){
	httpRequest = new XMLHttpRequest();
	if(!httpRequest){
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}
	httpRequest.onreadystatechange = alertContents;
	httpRequest.open('GET', url);
	httpRequest.send();
	}
	function alertContents(){
		if(httpRequest.readyState ===XMLHttpRequest.DONE){
			if(httpRequest.status === 200){
				alert(httpRequest.responseText);
			}
			else{
				alert('There was a problem with the request');
			}
		}
	}
})();