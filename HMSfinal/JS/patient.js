 function validform1(data) {
    let firstname=data.firstname.value;
    let lastname=data.lastname.value;
    
    
  if (firstname == ""||lastname== "")
   {
    alert("Please fill up the form proprly");
    return false;
  }
  else {
    return true;
}

}
