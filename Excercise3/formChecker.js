//All variables
var username = document.getElementsByName('username');
var password = document.getElementsByName('password');
var gloves = document.getElementsByName('gamount');
var shoes = document.getElementsByName('samount');
var hats = document.getElementsByName('hamount');
var shipping = document.getElementsByName('shipping');
function check(){ //form check
    if(password == ""){
        alert("Password cannot be empty");
    }
    if(username == "" || password == ""){
        alert("Username or password cannot be empty");
    }
    if(gamout < 0 || hamount < 0 || samount < 0){
        alert("Amounts cannot be less than 0")
    }
    if(gamout == "" || hamount == "" || samount == ""){
        alert("Amounts cannot be less than 0")
    }
    if (!(isEmail(username))){
        alert("Username must be in an email format");
    }
    if(shipping != "50" && shipping != "5" || shipping != "0"){
        alert("A shipping option must be selected")
    }
}

function isEmail(email) 
{
    var reg = /\S+@\S+\.\S+/; //Regular expression to check email validity
    return reg.test(email);
}