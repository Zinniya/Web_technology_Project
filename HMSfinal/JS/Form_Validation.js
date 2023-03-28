 function validform(data) {
    let presentAddress=data.presentAddress.value;
    let dateOfBirth=data.dateOfBirth.value;
    let confirmPassword=data.confirmPassword.value;
    let password=data.password.value;
    let gender=data.gender.value;
    let  phoneNo=data.phoneNo.value;
    let email =data.email.value;
    let username = data.name.value;
  if (username == ""||email== ""||phoneNo==""||gender==""||Password==""||confirmPassword==""||dateOfBirth==""||presentAddress=="")
   {
    alert("Please fill up the form proprly");
    return false;
  }
  else {
    return true;
}

}

function validlogin(data1)
  {
    let email=data1.email.value;
    let password=data1.password.value;
   
  if (email == ""||Password== "")
   {
    alert("Please fill up the form proprly");
    return false;
  }
  else {
    return true;
}

}




 
 







// function validform(data) {

//  let username = data.name.value[;
//   if (username == "") {
//     alert("Name must be filled out");
//     return false;
//   }
//   else {
//     alert(username);
//     return true;
// }
// }




//     if (document.getElementById("fname").value == "") {
//         document.getElementById("nameErr").innerHTML = "*Full Name cannot be blank java ";
//         document.getElementById("fname").style.borderColor = "red";
//     } else if (document.getElementById("fname").value.split(' ').length < 2) {
//         document.getElementById("nameErr").innerHTML = "*Full name must be at least 2 words j";
//         document.getElementById("fname").style.borderColor = "red";
//     } else if (!document.getElementById("fname").value.match(/^[A-Za-z ]*$/)) {
//         document.getElementById("nameErr").innerHTML = "*For full name only upper/lower case letters and white spaces are allowed";
//         document.getElementById("fname").style.borderColor = "red";
//     } else {
//         document.getElementById("nameErr").innerHTML = "";
//         document.getElementById("fname").style.borderColor = "purple";
//     }


//     if (document.getElementById("email").value == "") {
//         document.getElementById("emailErr").innerHTML = "*Email cannot be blank java";
//         document.getElementById("email").style.borderColor = "red";
//     } else if (!document.getElementById("email").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
//         document.getElementById("emailErr").innerHTML = "*Please enter a valid email address00000000";
//         document.getElementById("email").style.borderColor = "red";
//     } else {
//         document.getElementById("emailErr").innerHTML = "";
//         document.getElementById("email").style.borderColor = "purple";
//     }



//     if (document.getElementById("phoneNo").value == "") {
//         document.getElementById("phoneNoErr").innerHTML = "*Phone number cannot be blank";
//         document.getElementById("phoneNo").style.borderColor = "red";
//     } else if (!document.getElementById("phoneNo").value.match(/^[0-9]{11}$/)) {
//         document.getElementById("phoneNoErr").innerHTML = "*Phone number must be eleven (11) digits (excluding +88)";
//         document.getElementById("phoneNo").style.borderColor = "red";
//     } else {
//         document.getElementById("phoneNoErr").innerHTML = "";
//         document.getElementById("phoneNo").style.borderColor = "purple";
//     }



//     if (document.getElementById("pass").value == "") {
//         document.getElementById("passErr").innerHTML = "*Password cannot be blank";
//         document.getElementById("pass").style.borderColor = "red";
//     } else if (document.getElementById("pass").value.length < 6) {
//         document.getElementById("passErr").innerHTML = "*Password must not be less than six (6) characters";
//         document.getElementById("pass").style.borderColor = "red";
//     } else if (!document.getElementById("pass").value.match(/[A-Z]+/)) {
//         document.getElementById("passErr").innerHTML = "*Password must contain at least one upper case letter, one lower case letter and one numeric character";
//         document.getElementById("pass").style.borderColor = "red";
//     } else if (!document.getElementById("pass").value.match(/[a-z]+/)) {
//         document.getElementById("passErr").innerHTML = "*Password must contain at least one upper case letter, one lower case letter and one numeric character";
//         document.getElementById("pass").style.borderColor = "red";
//     } else if (!document.getElementById("pass").value.match(/[0-9]+/)) {
//         document.getElementById("passErr").innerHTML = "*Password must contain at least one upper case letter, one lower case letter and one numeric character";
//         document.getElementById("pass").style.borderColor = "red";
//     } else {
//         document.getElementById("passErr").innerHTML = "";
//         document.getElementById("pass").style.borderColor = "purple";
//     }



//     if (document.getElementById("conPass").value == "") {
//         document.getElementById("conPassErr").innerHTML = "*Confirm Password cannot be blank";
//         document.getElementById("conPass").style.borderColor = "red";
//     } else if (document.getElementById("conPass").value != document.getElementById("pass").value) {
//         document.getElementById("conPassErr").innerHTML = "*Password and confirm password does not match";
//         document.getElementById("conPass").style.borderColor = "red";
//     } else {
//         document.getElementById("conPassErr").innerHTML = "";
//         document.getElementById("conPass").style.borderColor = "purple";
//     }


//     if (document.getElementById("dob").value == "") {
//         document.getElementById("dobErr").innerHTML = "*Date of Birth cannot be blank java";
//         document.getElementById("dob").style.borderColor = "red";
//     } else if (calculate_age(new Date(document.getElementById("dob").value)) ) {
//         document.getElementById("dobErr").innerHTML = "";
//         document.getElementById("dob").style.borderColor = "red";
//     } else {
//         document.getElementById("dobErr").innerHTML = "";
//         document.getElementById("dob").style.borderColor = "purple";
//     }
// }
