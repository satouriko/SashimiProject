function loginCheck(username,password){
    $userlength=strlen(username);
    $passlength=strlen(password);
    if(username==""||username=="生鱼片ID"){
        window.location.href='/auth/login.php?exitcode=202';
        return false;
    }else if(password==""||password=="生鱼片通行暗号"||password=="诶嘿嘿☆~") {
        window.location.href = '/auth/login.php?exitcode=200';
        return false;
    }else if($userlength>64||$userlength<3) {
        window.location.href = '/auth/login.php?exitcode=201';
        return false;
    }else if($passlength>64||$passlength<6){
        window.location.href = '/auth/login.php?exitcode=215';
        return false;
    }else return true;
}
    function errorReport(exitcode){
    if(exitcode==202) document.getElementById('authErrorInfo').innerHTML="Exitcode 202: ID不能为空！";
    else if(exitcode==200) document.getElementById('authErrorInfo').innerHTML="Exitcode 200: 暗号不能为空！";
    else if(exitcode==201) document.getElementById('authErrorInfo').innerHTML="Exitcode 201: ID不符合注册长度！";
    else if(exitcode==215) document.getElementById('authErrorInfo').innerHTML="Exitcode 201: 暗号不符合注册长度！";
}