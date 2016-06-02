var $_GET;
function getGET(){
	$_GET = (function(){
		var url = window.document.location.href.toString();
		var u = url.split("?");
		if(typeof(u[1]) == "string"){
			u = u[1].split("&");
			var get = {};
			for(var i in u){
				var j = u[i].split("=");
				get[j[0]] = j[1];
			}
			return get;
		} else {
			return {};
		}
	})();
}
window.setInterval(getGET, 10);
function changeHeaderClass(headerId){
	$(document).ready(function(){
		$("#"+headerId).removeClass("headerA");
		$("#"+headerId).addClass("headerActiveA");
	});
}