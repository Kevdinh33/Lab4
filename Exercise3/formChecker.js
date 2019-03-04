let email, pass;
function formChecker(){
  email = document.getElementById("userEmail").value;
  pass = document.getElementById("password").value;
  if(emailCheck()){
    alert("The e-mail entered doesn't seem to be a valid form.");
    return false;
  }
  else if(passwordCheck()){
    alert("Password field can't be left blank.");
    return false;
  }
  else if(shipCheck()){
    alert("You must choose a shipping option.");
    return false;
  }
  else{
    return true;
  }
}

function emailCheck() {
  if (email.includes("@") && email.includes(".com")) {
    return false;
  }
  else{
    return true;
  }
}


function passwordCheck() {
  if(pass === ""){
    return true;
  }
  else {
    return false;
  }
}

function shipCheck() {
  if (document.getElementById("freeShip").checked || document.getElementById("expressShip").checked || document.getElementById("3DayShip").checked) {
    return false;
  }
  else {
    return true;
  }
}
