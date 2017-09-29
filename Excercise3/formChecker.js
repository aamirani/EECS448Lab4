//All variables
function check(){ //form check
    var username = document.getElementsByName('username')[0].value;
    var password = document.getElementsByName('password')[0].value;
    var gloves = document.getElementsByName('gamount')[0].value;
    var shoes = document.getElementsByName('samount')[0].value;
    var hats = document.getElementsByName('hamount')[0].value;
    var shipping = document.getElementsByName('shipping')[0].value;
    if(username == ""){
        alert("Username cannot be empty");
        return false;
    }
    if(password == ""){
        alert("Password cannot be empty");
        return false;
    }
    if(gloves < 0 || hats < 0 || shoes < 0){
        alert("Amounts cannot be less than 0");
        return false;
    }
    if(gloves == "" || hats == "" || shoes == ""){
        alert("Amounts cannot be less than 0");
        return false
    }
    if(!isEmail(username)){
        alert("Username must be in an email format");
        return false;
    }
    if(shipping = ''){
        alert("Please pick a shipping option");
        return false;
    }
    
}

function isEmail(email) 
{
    var reg = /\S+@\S+\.\S+/; //Regular expression to check email validity
    return reg.test(email);
}