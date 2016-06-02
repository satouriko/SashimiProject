function usernameIllegalCheck(username){
	var legalChar="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!#$%^&*()-=_+[]\\{}|;\':\"<>,./<>? ";
	for(var i=0;i<username.length;i++){
		var flag=false;
		for(var j=0;j<legalChar.length;j++)
			if(username[i]==legalChar[j]){
				flag=true;
				break;
			}
		if(!flag) return true;
	}
	return false;
}
function passwordIllegalCheck(password){
	var legalChar="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()-=_+[]\\{}|;\':\"<>,./<>? ";
	for(var i=0;i<password.length;i++){
		var flag=false;
		for(var j=0;j<legalChar.length;j++)
			if(password[i]==legalChar[j]){
				flag=true;
				break;
			}
		if(!flag) return true;
	}
	return false;
}
function loginCheck(username,password){
    if(username==""||username=="生鱼片ID"){
		window.history.pushState(null, null, "?exitcode=202");
        return false;
    }else if(password==""||password=="生鱼片通行暗号"||password=="诶嘿嘿☆~") {
		window.history.pushState(null, null, "?exitcode=200");
        return false;
    }else if(username.length>64||username.length<3){
		window.history.pushState(null, null, "?exitcode=201");
        return false;
    }else if(password.length>64||password.length<6){
		window.history.pushState(null, null, "?exitcode=215");
        return false;
    }else if(usernameIllegalCheck(username)||passwordIllegalCheck(password)){
		window.history.pushState(null, null, "?exitcode=500");
		return false;
	}else return true;
}
function registerCheck(username,password,repassword,value){
    if(username==""||username=="生鱼片ID(3~64)"){
		window.history.pushState(null, null, "?exitcode=8202");
        return false;
    }else if(password==""||password=="生鱼片通行暗号(6~64)"){
		window.history.pushState(null, null, "?exitcode=8200");
        return false;
    }else if(password!=repassword){
		window.history.pushState(null, null, "?exitcode=8203");
        return false;
	}else if(username.length>64||username.length<3){
		window.history.pushState(null, null, "?exitcode=8201");
        return false;
    }else if(password.length>64||password.length<6){
		window.history.pushState(null, null, "?exitcode=8215");
        return false;
    }else if(usernameIllegalCheck(username)||passwordIllegalCheck(password)){
		window.history.pushState(null, null, "?exitcode=8500");
		return false;
	}
}
function errorReport(exitcode){
	if(typeof exitcode === "undefined") return 0;
	$('#authErrorInfo').addClass("authError");
	$('#authErrorInfo').text("Exitcode "+exitcode+"：");
    if(exitcode==202) document.getElementById('authErrorInfo').innerHTML+="ID不能为空！";
    else if(exitcode==200) document.getElementById('authErrorInfo').innerHTML+="暗号不能为空！";
    else if(exitcode==201) document.getElementById('authErrorInfo').innerHTML+="ID不符合注册长度！";
    else if(exitcode==215) document.getElementById('authErrorInfo').innerHTML+="暗号不符合注册长度！";
	else if(exitcode==500) document.getElementById('authErrorInfo').innerHTML+="ID或暗号非法！";
	else if(exitcode==403) document.getElementById('authErrorInfo').innerHTML+="暗号不正确！你不是真正的生鱼片！";
	else if(exitcode==404) document.getElementById('authErrorInfo').innerHTML+="根本没有这样的ID！";
	else if(exitcode==8202) document.getElementById('authErrorInfo').innerHTML+="ID不能为空！";
	else if(exitcode==8200) document.getElementById('authErrorInfo').innerHTML+="暗号不能为空！";
	else if(exitcode==8203) document.getElementById('authErrorInfo').innerHTML+="两次暗号不一致！";
    else if(exitcode==8201) document.getElementById('authErrorInfo').innerHTML+="ID不符合注册长度！";
    else if(exitcode==8215) document.getElementById('authErrorInfo').innerHTML+="暗号不符合注册长度！";
	else if(exitcode==8500) document.getElementById('authErrorInfo').innerHTML+="ID或暗号非法！";
	else if(exitcode==8804) document.getElementById('authErrorInfo').innerHTML+="ID已经被占用辣！(╯‵□′)╯︵┻━┻";
	else document.getElementById('authErrorInfo').innerHTML+="完全不知道发生了什么！（自豪地）";
}