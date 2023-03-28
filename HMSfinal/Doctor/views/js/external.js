function isValid(pForm) {

	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr")

	let fname = pForm.fname.value;
	let lname = pForm.lname.value;

	fnameErr.innerHTML = "";
	lnameErr.innerHTML = "";

	let flag = true;

	if (fname === "") {
		alert("Please enter your first name");
		flag = false;
	}
	if (lname === "") {
		alert("Please enter your last name");
		flag = false;
	}

	return flag;
}