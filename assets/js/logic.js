//age Calculator
function CalculateAge(){
    var dob = document.getElementById("dob").value;  
    console.log(dob);
    var birthDate = new Date(dob);
    console.log(" birthDate"+ birthDate);
    var difference=Date.now() - birthDate.getTime(); 
    var  ageDate = new Date(difference); 
    var calculatedAge = Math.abs(ageDate.getUTCFullYear() - 1970);
    return calculatedAge;
}

//password confirmation
var password = document.getElementById("password")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Dont Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
