

function homedisp() {
	txt="hello";
	document.getElementById('usernamedisp').innerHTML = txt;
	

	var getAbsoluteUrl = (function() {
			var a;
			return function(url) {
				if (!a) a =document.createElement('a');
				a.href = url;


				return a.href;
			};
	})();
}