function formvalidate() {

	//For firstname
	var testfirstname = /^[a-zA-Z]/;
	var fname = document.getElementById('firstname').value;
	var fnamelength = fname.length;
	if(fname.length > 2) {
		for(var i=0;i<fnamelength;i++)
		{
			if(!testfirstname.test(fname[i]))
			{
				txt = "Firstname should contain only character";
				document.getElementById("firstnameerror").innerHTML = txt;
				return false;
			}
		}
	} else {
		txt = "Firstname should contain more than 2 characters";
		document.getElementById("firstnameerror").innerHTML = txt;
		return false;
	}


	//For username
	var testusername = /^[a-zA-Z0-9]/;
	var uname = document.getElementById('username').value;
	var unamelength = uname.length;
	if(uname.length > 5)
	{
		for(var i=0 ; i<unamelength;i++)
		{
			if(!testusername.test(uname[i]))
			{
				txt2 = "Username should contain only characters and numbers";
				document.getElementById('usernameerror').innerHTML = txt2;
				return false;
			}
		}
	} else {
		txt2 = "Username should be more than 5 characters";
		document.getElementById("usernameerror").innerHTML = txt2;
		return false;
	}

	//For phone
	var testphone = /^[0-9]/;
	var phone = document.getElementById('phone').value;
	var phonelength = phone.length;
	if(phone.length > 7)
	{
		for(var i=0 ; i<phonelength ; i++)
		{
			if(!testphone.test(phone[i]))
			{
				txt3 = "Phone number is invalid";
				document.getElementById("phoneerror").innerHTML = txt3;
				return false;
			}
		}
	} else {
		txt3 = "Phone number is invalid";
		document.getElementById("phoneerror").innerHTML = txt3;
		return false;
	}


	//For checking password
	var password = document.getElementById('password').value;
	var repassword = document.getElementById('repassword').value;

	if(password != repassword)
	{
		txt4 = "Password do not match";
		document.getElementById("passworderror").innerHTML = txt4;
		return false;
	}

	//url
	var getAbsoluteUrl = (function() {
		var a;
		return function(url) {
			if (!a) a =document.createElement('a');
			a.href = url;


			return a.href;
		};
	})();
}