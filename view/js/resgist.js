function Kiemtra(){
    var fullname = document.getElementById("fullname");
    var user = document.getElementById("user");
    var pass = document.getElementById("pass");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");
    var city = document.getElementById("city");

    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
    var error4 = document.getElementById("error4");
    var error5 = document.getElementById("error5");
    var error6 = document.getElementById("error6");
    var error7 = document.getElementById("error7");
   

    //kiểm tra họ tên
    if(fullname.value.length==0){
        fullname.style.border="1px solid red";
        error1.innerHTML="Họ và tên không được để trống!";
        return false;
    }else{
        fullname.style.border="none";
        error1.innerHTML="";
    }

    //kiểm tra tên đăng nhập
    if(user.value.length==0){
        user.style.border="1px solid red";
        error2.innerHTML="Tên đăng nhập không được để trống!";
        return false;
    }else{
        user.style.border="none";
        error2.innerHTML="";
    }

    //kiểm tra password
    if(pass.value.length==0){
        pass.style.border="1px solid red";
        error3.innerHTML="Hãy thiết lập mật khẩu!";
        return false;
    }else{
        pass.style.border="none";
        error3.innerHTML="";
    }

    //kiểm tra email
    if(email.value.length==0){
        email.style.border="1px solid red";
        error4.innerHTML="Email không được để trống!";
        return false;
    }else{
        email.style.border="none";
        error4.innerHTML="";
    }

    //Kiểm tra số điện thoại
    if(phone.value.length==0){
        phone.style.border="1px solid red";
        error5.innerHTML="Vui lòng nhập số điện thoại!";
        return false;
    }else{
        phone.style.border="none";
        error5.innerHTML="";
    }

    //kiểm tra địa chỉ
    if(address.value.length==0){
        address.style.border="1px solid red";
        error6.innerHTML="Địa chỉ không được để trống!";
        return false;
    }else{
        address.style.border="none";
        error6.innerHTML="";
    }

    //kiểm tra thành phố
    if(city.value.length==0){
        city.style.border="1px solid red";
        error7.innerHTML="Vui lòng nhập thành phố bạn đang sống!";
        return false;
    }else{
        city.style.border="none";
        error7.innerHTML="";
    }
}