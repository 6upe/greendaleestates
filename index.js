var uEmail = document.getElementById("user_email").value;
var uPassword = document.getElementById("user_password").value;

function auth(){
    if(uEmail == "greendale@email.com" && uPassword == 1234){
        window.location = "admin.html";
    }else{
        alert(uEmail + ' and ' + uPassword);
        // console.log('email: ' + uEmail);
        // console.log('password: ' + uPassword);
    }
}
