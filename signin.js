function formvalidate() 
{
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	if(username==null || username == '')
	{
		txt = "Username is invalid";
		document.getElementById('usernameerror').innerHTML = txt;
		return false;
	}

	if(password == null || password == '')
	{
		txt = "password is invalid";
		document.getElementById('passworderror').innerHTML = txt;
		return false;
	}

	var getAbsoluteUrl = (function() {
		var a;
		return function(url) {
			if (!a) a =document.createElement('a');
			a.href = url;


			return a.href;
		};
	})();

}

