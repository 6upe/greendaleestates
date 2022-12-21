function auth(){
    var email = document.forms["adminForm"]["user_email"].value;
    var password = document.forms['adminForm']["user_password"].value;

    if(email == "greendale@email.com" && password == 1234){
        // alert(email + " and " + password);
        // return true;
    }else{
        alert("wrong credentials");
        return false;
    }
}
