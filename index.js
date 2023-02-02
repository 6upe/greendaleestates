function auth(){
    var email = document.forms["adminForm"]["user_email"].value;
    var password = document.forms['adminForm']["user_password"].value;

    if(email == "preciousdivine@greendale-estates.com" && password == "preciousdivine@greendale"){
        alert("Admin Log in Success");
        window.open('https://greendale-estates.com/admin.php');
        
    }else if(email == "admin@greendale-estates.com" && password == "admin@greendale"){
        alert("Admin Log in Success");
        window.open('https://greendale-estates.com/admin.php');
    }else if(email == "hadassajulie@greendale-estates.com" && password == "hadassajulie@greendale"){
        alert("Admin Log in Success");
        window.open('https://greendale-estates.com/admin.php');
    }else if(email == "valentinemalama@greendale-estates.com" && password == "valentinemalama@greendale"){
        alert("Admin Log in Success");
        window.open('https://greendale-estates.com/admin.php');
    }else{
        alert("wrong credentials");
        window.document.location('/index.php');
    }
    
    
    
}

