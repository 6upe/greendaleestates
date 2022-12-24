function auth(){
    var email = document.forms["adminForm"]["user_email"].value;
    var password = document.forms['adminForm']["user_password"].value;

    if(email == "greendale@email.com" && password == 1234){
        alert("Admin Log in Success");
        // window.document.location('/admin.html');
    }else{
        alert("wrong credentials");
    }
}
